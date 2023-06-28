<?php

namespace App\Controllers;

use App\Models\NilaiGapModel;
use App\Models\FaktorPenilaianModel;
use App\Models\NamaKandidatModel;
use App\Models\DataKandiatnModel;
use App\Models\DataKandidatModel;

// use App\Models\KecerdasanModel;
// use App\Models\SikapKerjaModel;
// use App\Models\PerilakuModel;

class NilaiGap extends BaseController
{
    protected $data;
    protected $nilai_gap_model;
    protected $faktor_penilaian_model;
    protected $nama_kandidat_model;
    protected $data_kandidat_model;
    // protected $kecerdasan_model;
    // protected $sikap_kerja_model;
    // protected $perilaku_model;


    public function __construct() {

        $this->nilai_gap_model = New NilaiGapModel();
        $this->faktor_penilaian_model = New FaktorPenilaianModel();
        $this->nama_kandidat_model = New NamaKandidatModel();
        $this->data_kandidat_model = New DataKandidatModel();
        // $this->kecerdasan_model = New KecerdasanModel();
        // $this->sikap_kerja_model = New SikapKerjaModel();
        // $this->perilaku_model = New PerilakuModel();

    }

    public function nilai_gap(){
        $this->data['title'] = 'Nilai Gap';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Nilai Gap'
            )
        );

        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data_kandidat'] = $this->data_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        // $this->data['kecerdasan'] = $this->kecerdasan_model->orderBy('id ASC')->select('*')->get()->getResult();
        // $this->data['sikap_kerja'] = $this->sikap_kerja_model->orderBy('id ASC')->select('*')->get()->getResult();
        // $this->data['perilaku'] = $this->perilaku_model->orderBy('id ASC')->select('*')->where("id_nama_kandidat")->get()->getResult();
        $this->data['nilai_gap'] = $this->nilai_gap_model
                                ->orderBy('id ASC')
                                ->select('nilai_gap.id, nama_kandidat.nama_pendaftar, 
                                nilai_gap.i1, nilai_gap.i2, nilai_gap.i3, 
                                nilai_gap.i4, nilai_gap.i5, nilai_gap.i6, 
                                nilai_gap.i7, nilai_gap.i8, nilai_gap.i9, 
                                nilai_gap.i10, nilai_gap.s1, nilai_gap.s2, nilai_gap.s3, 
                                nilai_gap.s4, nilai_gap.s5, nilai_gap.s6, nilai_gap.p1, nilai_gap.p2, nilai_gap.p3, 
                                nilai_gap.p4')
                                ->join('nama_kandidat', 'nama_kandidat.id = nilai_gap.id_nama_kandidat' )
                                // ->join('faktor_penilaian', 'faktor_penilaian.id = nilai_gap.id_faktor_penilaian' )
                                ->get()->getResult();

        return view('nilai_gap/index', $this->data);
    }

    public function create_nilai_gap(){
        $this->data['title'] = 'Tambah Nilai Gap';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'NilaiGap',
                'url'   => base_url('aspek')
            ),
            array(
                'title' => 'Tambah Nilai Gap'
            )
        );

        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data_kandidat'] = $this->data_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        // $this->data['kecerdasan'] = $this->kecerdasan_model->orderBy('id ASC')->select('*')->get()->getResult();
        // $this->data['sikap_kerja'] = $this->sikap_kerja_model->orderBy('id ASC')->select('*')->get()->getResult();
        // $this->data['perilaku'] = $this->perilaku_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['nilai_gap'] = $this->nilai_gap_model->orderBy('id ASC')->select('*')->get()->getResult();

        return view('nilai_gap/create', $this->data);
    }

    public function update_nilai_gap($id=''){
        $this->data['title'] = 'Ubah Data Nilai Gap';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Nilai Gap',
                'url'   => base_url('nilai_gap')
            ),
            array(
                'title' => 'Ubah Data Nilai Gap'
            )
        );
        if(empty($id)){
            return redirect()->to('nilai_gap')->with('error', 'Data Tidak di Temukan');
        }

        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data_kandidat'] = $this->data_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        // $this->data['kecerdasan'] = $this->kecerdasan_model->orderBy('id ASC')->select('*')->get()->getResult();
        // $this->data['sikap_kerja'] = $this->sikap_kerja_model->orderBy('id ASC')->select('*')->get()->getResult();
        // $this->data['perilaku'] = $this->perilaku_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data'] = $this->nilai_gap_model->select('*')->where(['id'=>$id])->first();

        return view('nilai_gap/edit', $this->data);
    }

    public function submit_changes_nilai_gap(){
        $this->data['request'] = $this->request;
        $data = [
            'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
            // 'i1' => $this->request->getPost('i1'),
            // 'i2' => $this->request->getPost('i2'),
            // 'i3' => $this->request->getPost('i3'),
            // 'i4' => $this->request->getPost('i4'),
            // 'i5' => $this->request->getPost('i5'),
            // 'i6' => $this->request->getPost('i6'),
            // 'i7' => $this->request->getPost('i7'),
            // 'i8' => $this->request->getPost('i8'),
            // 'i9' => $this->request->getPost('i9'),
            // 'i10' => $this->request->getPost('i10'),
        ];
        if(!empty($this->request->getPost('id'))) {
            $this->nilai_gap_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
            return redirect()->to('nilai_gap')->with('success', 'Berhasil Memperbaharui Data');
        } else {
            $this->nilai_gap_model->insert($data);
            return redirect()->to('nilai_gap')->with('success', 'Berhasil Menambahkan Data');
        }
    }

    public function delete_nilai_gap($id=''){
        if(empty($id)){
            return redirect()->to('nilai_gap')->with('error', 'Data Tidak di Temukan');
        }
        $delete = $this->nilai_gap_model->delete($id);
        if($delete){
            return redirect()->to('nilai_gap')->with('success', 'Data Berhasil di Hapus');
        }
    }
}