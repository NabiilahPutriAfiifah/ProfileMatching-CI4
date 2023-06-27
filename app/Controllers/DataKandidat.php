<?php

namespace App\Controllers;

use App\Models\KecerdasanModel;
use App\Models\SikapKerjaModel;
use App\Models\PerilakuModel;
use App\Models\NamaKandidatModel;
use App\Models\FaktorPenilaianModel;
// use Dompdf\Dompdf;

class DataKandidat extends BaseController{

    protected $data;

    protected $kecerdasan_model;
    protected $sikap_kerja_model;
    protected $perilaku_model;
    protected $nama_kandidat_model;
    protected $faktor_penilaian_model;

    public function __construct() {

        $this->kecerdasan_model = New KecerdasanModel();
        $this->sikap_kerja_model = New SikapKerjaModel();
        $this->perilaku_model = New PerilakuModel();
        $this->nama_kandidat_model = New NamaKandidatModel();
        $this->faktor_penilaian_model = New FaktorPenilaianModel();
    }
    
    //-------------------------------------------- Kecerdasan -----------------------------------------------------//

    public function kecerdasan(){
        $this->data['title'] = 'Kecerdasan';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Kecerdasan'
            )
        );

        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['kecerdasan'] = $this->kecerdasan_model
                                ->orderBy('id ASC')
                                ->select('kecerdasan.id, nama_kandidat.nama_pendaftar, 
                                          kecerdasan.i1, kecerdasan.i2, kecerdasan.i3, 
                                          kecerdasan.i4, kecerdasan.i5, kecerdasan.i6, 
                                          kecerdasan.i7, kecerdasan.i8, kecerdasan.i9, 
                                          kecerdasan.i10')
                                ->join('nama_kandidat', 'nama_kandidat.id = kecerdasan.id_nama_kandidat' )
                                ->get()->getResult();
        // $this->data['kecerdasan'] = $this->kecerdasan_model->getKecerdasan2();
        // $this->data['sikap_kerja'] = $this->sikap_kerja_model->getSikapKerja2();
        // $this->data['perilaku'] = $this->perilaku_model->getPerilaku2();

        return view('data_kandidat/kecerdasan/index', $this->data);
    }

    public function create_kecerdasan(){
        $this->data['title'] = 'Tambah Data Kecerdasan';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Kecerdasan',
                'url'   => base_url('data_kandidat/kecerdasan')
            ),
            array(
                'title' => 'Tambah Data Kecerdasan'
            )
        );

        $this->data['kecerdasan'] = $this->kecerdasan_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        return view('data_kandidat/kecerdasan/create', $this->data);
    }

    public function update_kecerdasan($id=''){
        $this->data['title'] = 'Ubah Data Kecerdasan';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'kecerdasan',
                'url'   => base_url('data_kandidat/kecerdasan')
            ),
            array(
                'title' => 'Ubah Data Kecerdasan'
            )
        );
        if(empty($id)){
            return redirect()->to('data_kandidat/kecerdasan')->with('error', 'Data Tidak di Temukan');
        }

        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data'] = $this->kecerdasan_model->select('*')->where(['id'=>$id])->first();

        return view('data_kandidat/kecerdasan/edit', $this->data);
    }

    public function submit_changes_kecerdasan(){
        $this->data['request'] = $this->request;
        $data = [
            'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
            'i1' => $this->request->getPost('i1'),
            'i2' => $this->request->getPost('i2'),
            'i3' => $this->request->getPost('i3'),
            'i4' => $this->request->getPost('i4'),
            'i5' => $this->request->getPost('i5'),
            'i6' => $this->request->getPost('i6'),
            'i7' => $this->request->getPost('i7'),
            'i8' => $this->request->getPost('i8'),
            'i9' => $this->request->getPost('i9'),
            'i10' => $this->request->getPost('i10'),
            
        ];
        if(!empty($this->request->getPost('id'))) {
            $this->kecerdasan_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
            return redirect()->to('data_kandidat/kecerdasan')->with('success', 'Berhasil Memperbaharui Data');
        } else {
            $this->kecerdasan_model->insert($data);
            return redirect()->to('data_kandidat/kecerdasan')->with('success', 'Berhasil Menambahkan Data');
        }
    }

    public function delete_kecerdasan($id=''){
        if(empty($id)){
            return redirect()->to('data_kandidat/kecerdasan')->with('error', 'Data Tidak di Temukan');
        }
        $delete = $this->kecerdasan_model->delete($id);
        if($delete){
            return redirect()->to('data_kandidat/kecerdasan')->with('success', 'Data Berhasil di Hapus');
        }
    }



    //-------------------------------------------- Sikap Kerja -----------------------------------------------------//

    public function sikap_kerja(){
        $this->data['title'] = 'Sikap Kerja';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Sikap Kerja'
            )
        );

        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['sikap_kerja'] = $this->sikap_kerja_model
                                ->orderBy('id ASC')
                                ->select('sikap_kerja.id, nama_kandidat.nama_pendaftar, 
                                          sikap_kerja.s1, sikap_kerja.s2, sikap_kerja.s3, 
                                          sikap_kerja.s4, sikap_kerja.s5, sikap_kerja.s6')
                                ->join('nama_kandidat', 'nama_kandidat.id = sikap_kerja.id_nama_kandidat' )
                                ->get()->getResult();
        return view('data_kandidat/sikap_kerja/index', $this->data);
    }

    public function create_sikap_kerja(){
        $this->data['title'] = 'Tambah Data Sikap Kerja';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Sikap Kerja',
                'url'   => base_url('data_kandidat/sikap_kerja')
            ),
            array(
                'title' => 'Tambah Data Sikap Kerja'
            )
        );

        $this->data['sikap_kerja'] = $this->sikap_kerja_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        return view('data_kandidat/sikap_kerja/create', $this->data);
    }

    public function update_sikap_kerja($id=''){
        $this->data['title'] = 'Ubah Data Sikap Kerja';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Sikap Kerja',
                'url'   => base_url('data_kandidat/sikap_kerja')
            ),
            array(
                'title' => 'Ubah Data Sikap Kerja'
            )
        );
        if(empty($id)){
            return redirect()->to('data_kandidat/sikap_kerja')->with('error', 'Data Tidak di Temukan');
        }

        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data'] = $this->sikap_kerja_model->select('*')->where(['id'=>$id])->first();

        return view('data_kandidat/sikap_kerja/edit', $this->data);
    }

    public function submit_changes_sikap_kerja(){
        $this->data['request'] = $this->request;
        $data = [
            'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
            's1' => $this->request->getPost('s1'),
            's2' => $this->request->getPost('s2'),
            's3' => $this->request->getPost('s3'),
            's4' => $this->request->getPost('s4'),
            's5' => $this->request->getPost('s5'),
            's6' => $this->request->getPost('s6'),
        ];
        if(!empty($this->request->getPost('id'))) {
            $this->sikap_kerja_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
            return redirect()->to('data_kandidat/sikap_kerja')->with('success', 'Berhasil Memperbaharui Data');
        } else {
            $this->sikap_kerja_model->insert($data);
            return redirect()->to('data_kandidat/sikap_kerja')->with('success', 'Berhasil Menambahkan Data');
        }
    }

    public function delete_sikap_kerja($id=''){
        if(empty($id)){
            return redirect()->to('data_kandidat/sikap_kerja')->with('error', 'Data Tidak di Temukan');
        }
        $delete = $this->sikap_kerja_model->delete($id);
        if($delete){
            return redirect()->to('data_kandidat/sikap_kerja')->with('success', 'Data Berhasil di Hapus');
        }
    }

    //-------------------------------------------- Perilaku -----------------------------------------------------//

    public function perilaku(){
        $this->data['title'] = 'Perilaku';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Perilaku'
            )
        );

        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['perilaku'] = $this->perilaku_model
                                ->orderBy('id ASC')
                                ->select('perilaku.id, nama_kandidat.nama_pendaftar, 
                                          perilaku.p1, perilaku.p2, perilaku.p3, 
                                          perilaku.p4')
                                ->join('nama_kandidat', 'nama_kandidat.id = perilaku.id_nama_kandidat' )
                                ->get()->getResult();
        return view('data_kandidat/perilaku/index', $this->data);
    }

    public function create_perilaku(){
        $this->data['title'] = 'Tambah Data Perilaku';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Perilaku',
                'url'   => base_url('data_kandidat/perilaku')
            ),
            array(
                'title' => 'Tambah Data Perilaku'
            )
        );

        $this->data['perilaku'] = $this->perilaku_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        return view('data_kandidat/perilaku/create', $this->data);
    }

    public function update_perilaku($id=''){
        $this->data['title'] = 'Ubah Data Perilaku';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Perilaku',
                'url'   => base_url('data_kandidat/perilaku')
            ),
            array(
                'title' => 'Ubah Data Perilaku'
            )
        );
        if(empty($id)){
            return redirect()->to('data_kandidat/perilaku')->with('error', 'Data Tidak di Temukan');
        }

        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data'] = $this->perilaku_model->select('*')->where(['id'=>$id])->first();

        return view('data_kandidat/perilaku/edit', $this->data);
    }

    public function submit_changes_perilaku(){
        $this->data['request'] = $this->request;
        $data = [
            'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
            'p1' => $this->request->getPost('p1'),
            'p2' => $this->request->getPost('p2'),
            'p3' => $this->request->getPost('p3'),
            'p4' => $this->request->getPost('p4'),
        ];
        if(!empty($this->request->getPost('id'))) {
            $this->perilaku_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
            return redirect()->to('data_kandidat/perilaku')->with('success', 'Berhasil Memperbaharui Data');
        } else {
            $this->perilaku_model->insert($data);
            return redirect()->to('data_kandidat/perilaku')->with('success', 'Berhasil Menambahkan Data');
        }
    }

    public function delete_perilaku($id=''){
        if(empty($id)){
            return redirect()->to('data_kandidat/perilaku')->with('error', 'Data Tidak di Temukan');
        }
        $delete = $this->perilaku_model->delete($id);
        if($delete){
            return redirect()->to('data_kandidat/perilaku')->with('success', 'Data Berhasil di Hapus');
        }
    }

    // public function cetak(){
    //     $data = [
    //         'data' => $this->menu_model->getMenu()
    //     ];
    //     $dompdf = new Dompdf();
    //     $dompdf->loadHtml(view('/data_kandidat/cetakLaporan', $data));
    //     $dompdf->setPaper('A4', 'landscape');
    //     $dompdf->render();
    //     $dompdf->stream('Laporan_Pengeluaran_' . date('d-M-y'), ['Attachment' => 0]);
    // }
}