<?php

namespace App\Controllers;

use App\Models\DataKandidatModel;
use App\Models\NamaKandidatModel;
use App\Models\FaktorPenilaianModel;
use App\Models\NilaiGapModel;
use App\Models\PembobotanGapModel;
use App\Models\NilaiTotalModel;
use App\Models\AspekModel;
use App\Models\PerhitunganModel;

class DataKandidat extends BaseController{

    protected $data;

    protected $data_kandidat_model;
    protected $nama_kandidat_model;
    protected $faktor_penilaian_model;
    protected $nilai_gap_model;
    protected $pembobotan_gap_model;
    protected $nilai_total_model;
    protected $aspek_model;
    protected $perhitungan_model;

    public function __construct() {

        $this->data_kandidat_model = New DataKandidatModel();
        $this->nama_kandidat_model = New NamaKandidatModel();
        $this->faktor_penilaian_model = New FaktorPenilaianModel();
        $this->nilai_gap_model = New NilaiGapModel();
        $this->pembobotan_gap_model = New PembobotanGapModel();
        $this->nilai_total_model = New NilaiTotalModel();
        $this->aspek_model = New AspekModel();
        $this->perhitungan_model = New PerhitunganModel();
    }
    
//-------------------------------------------- Data Kandidat -----------------------------------------------------//

public function data_kandidat(){
    $this->data['title'] = 'Data Kandidat';
    $this->data['breadcrumbs'] = array(
        array(
            'title' => 'Dashboard',
            'url' => base_url()
        ),
        array(
            'title' => 'Data Kandidat'
        )
    );

    $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    $this->data['data_kandidat'] = $this->data_kandidat_model
                            ->orderBy('id ASC')
                            ->select('data_kandidat.id, nama_kandidat.nama_pendaftar, 
                                      data_kandidat.i1, data_kandidat.i2, data_kandidat.i3, 
                                      data_kandidat.i4, data_kandidat.i5, data_kandidat.i6, 
                                      data_kandidat.i7, data_kandidat.i8, data_kandidat.i9, 
                                      data_kandidat.i10, data_kandidat.s1, data_kandidat.s2, data_kandidat.s3, 
                                      data_kandidat.s4, data_kandidat.s5, data_kandidat.s6, data_kandidat.p1, data_kandidat.p2, data_kandidat.p3, 
                                      data_kandidat.p4, data_kandidat.id_nama_kandidat')
                            ->join('nama_kandidat', 'nama_kandidat.id = data_kandidat.id_nama_kandidat' )
                            ->get()->getResult();
    // $this->nilai_total();
    return view('data_kandidat/index', $this->data);
}

public function create_data_kandidat(){
    $this->data['title'] = 'Tambah Data Kandidat';
    $this->data['breadcrumbs'] = array(
        array(
            'title' => 'Dashboard',
            'url' => base_url()
        ),
        array(
            'title' => 'Data Kandidat',
            'url'   => base_url('data_kandidat')
        ),
        array(
            'title' => 'Tambah Data Kandidat'
        )
    );

    $this->data['data_kandidat'] = $this->data_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
    $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
    $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    return view('data_kandidat/create', $this->data);
}

public function update_data_kandidat($id=''){
    $this->data['title'] = 'Ubah Data Kandidat';
    $this->data['breadcrumbs'] = array(
        array(
            'title' => 'Dashboard',
            'url' => base_url()
        ),
        array(
            'title' => 'Data Kandidat',
            'url'   => base_url('data_kandidat')
        ),
        array(
            'title' => 'Ubah Data Kandidat'
        )
    );
    if(empty($id)){
        return redirect()->to('data_kandidat')->with('error', 'Data Tidak di Temukan');
    }

    $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
    $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    $this->data['data'] = $this->data_kandidat_model->select('*')->where(['id_nama_kandidat'=>$id])->first();

    return view('data_kandidat/edit', $this->data);
}

public function submit_changes_data_kandidat(){
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
        's1' => $this->request->getPost('s1'),
        's2' => $this->request->getPost('s2'),
        's3' => $this->request->getPost('s3'),
        's4' => $this->request->getPost('s4'),
        's5' => $this->request->getPost('s5'),
        's6' => $this->request->getPost('s6'),
        'p1' => $this->request->getPost('p1'),
        'p2' => $this->request->getPost('p2'),
        'p3' => $this->request->getPost('p3'),
        'p4' => $this->request->getPost('p4'),
        
    ];
    
//-------------------------------------------- Menghitung Nilai Gap -----------------------------------------------------//

    $faktor_kandidat = $this->faktor_penilaian_model->orderBy('id ASC')->findAll();
    $bobot_kandidat = [
        'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
        'i1' => $data['i1'] - $faktor_kandidat[0]['nilai'],
        'i2' => $data['i2'] - $faktor_kandidat[1]['nilai'],
        'i3' => $data['i3'] - $faktor_kandidat[2]['nilai'],
        'i4' => $data['i4'] - $faktor_kandidat[3]['nilai'],
        'i5' => $data['i5'] - $faktor_kandidat[4]['nilai'],
        'i6' => $data['i6'] - $faktor_kandidat[5]['nilai'],
        'i7' => $data['i7'] - $faktor_kandidat[6]['nilai'],
        'i8' => $data['i8'] - $faktor_kandidat[7]['nilai'],
        'i9' => $data['i9'] - $faktor_kandidat[8]['nilai'],
        'i10' => $data['i10'] - $faktor_kandidat[9]['nilai'],
        's1' => $data['s1'] - $faktor_kandidat[10]['nilai'],
        's2' => $data['s2'] - $faktor_kandidat[11]['nilai'],
        's3' => $data['s3'] - $faktor_kandidat[12]['nilai'],
        's4' => $data['s4'] - $faktor_kandidat[13]['nilai'],
        's5' => $data['s5'] - $faktor_kandidat[14]['nilai'],
        's6' => $data['s6'] - $faktor_kandidat[15]['nilai'],
        'p1' => $data['p1'] - $faktor_kandidat[16]['nilai'],
        'p2' => $data['p2'] - $faktor_kandidat[17]['nilai'],
        'p3' => $data['p3'] - $faktor_kandidat[18]['nilai'],
        'p4' => $data['p4'] - $faktor_kandidat[19]['nilai'],
    ];

    

    
    if(!empty($this->request->getPost('id'))) {
        $this->data_kandidat_model->where(['id_nama_kandidat'=>$this->request->getPost('id')])->set($data)->update();
        $this->nilai_gap_model->where('id_nama_kandidat', $this->request->getPost('id'))->set($bobot_kandidat)->update();
        $this->bobot_i($data['id_nama_kandidat'],'update');
        $this->nilai_total($data['id_nama_kandidat'],'update');
        $this->perhitungan($data['id_nama_kandidat'],'update');
        // $this->nilai_total_model->where('id_nama_kandidat', $this->request->getPost('id'))->set($nilai_total)->update();
        return redirect()->to('data_kandidat')->with('success', 'Berhasil Memperbaharui Data');
    } else {
        $this->data_kandidat_model->insert($data);
        $this->nilai_gap_model->insert($bobot_kandidat);
        // $kandidat = $this->nilai_gap_model->orderBy('id', 'DESC')->first();
        $this->bobot_i($data['id_nama_kandidat'], 'insert');
        $this->nilai_total($data['id_nama_kandidat'],'insert');
        $this->perhitungan($data['id_nama_kandidat'],'insert');
        return redirect()->to('data_kandidat')->with('success', 'Berhasil Menambahkan Data');
    }
}

public function delete_data_kandidat($id=''){
    if(empty($id)){
        return redirect()->to('data_kandidat')->with('error', 'Data Tidak di Temukan');
    }
    $this->nilai_gap_model->where('id_nama_kandidat', $id)->delete();
    $this->pembobotan_gap_model->where('id_nama_kandidat', $id)->delete();
    $this->nilai_total_model->where('id_nama_kandidat', $id)->delete();
    $this->perhitungan_model->where('id_nama_kandidat', $id)->delete();
    $delete = $this->data_kandidat_model->where('id_nama_kandidat', $id)->delete();
    if($delete){
        return redirect()->to('data_kandidat')->with('success', 'Data Berhasil di Hapus');
    }
}

    
//-------------------------------------------- Pembobotan Nilai Gap -----------------------------------------------------//

public function bobot_i($id, $labels){
    $bobot = [];
    $bobot_i = $this->nilai_gap_model->where('id_nama_kandidat', $id)->first();
    $bobot['id_nama_kandidat']= $bobot_i['id_nama_kandidat'];
        for ($i = 1; $i <= 10; $i++) { 
            switch ($bobot_i["i$i"]) {
                case 0 :
                    $bobot["i$i"] = 5;
                break;
                case 1 :
                    $bobot["i$i"] = 4.5;
                break;
                case -1 :
                    $bobot["i$i"] = 4;
                break;
                case 2 :
                    $bobot["i$i"] = 3.5;
                break;
                case -2 :
                    $bobot["i$i"] = 3;
                break;
                case 3 :
                    $bobot["i$i"] = 2.5;
                break;
                case -3 :
                    $bobot["i$i"] = 2;
                break;
                case 4 :
                    $bobot["i$i"] = 1.5;
                break;
                case -4 :
                    $bobot["i$i"] = 1;
                break;
            }
        }
        for ($i = 1; $i <= 6; $i++) { 
            switch ($bobot_i["s$i"]) {
                case 0 :
                    $bobot["s$i"] = 5;
                break;
                case 1 :
                    $bobot["s$i"] = 4.5;
                break;
                case -1 :
                    $bobot["s$i"] = 4;
                break;
                case 2 :
                    $bobot["s$i"] = 3.5;
                break;
                case -2 :
                    $bobot["s$i"] = 3;
                break;
                case 3 :
                    $bobot["s$i"] = 2.5;
                break;
                case -3 :
                    $bobot["s$i"] = 2;
                break;
                case 4 :
                    $bobot["s$i"] = 1.5;
                break;
                case -4 :
                    $bobot["s$i"] = 1;
                break;
            }
        }
        for ($i = 1; $i <= 4; $i++) { 
            switch ($bobot_i["p$i"]) {
                case 0 :
                    $bobot["p$i"] = 5;
                break;
                case 1 :
                    $bobot["p$i"] = 4.5;
                break;
                case -1 :
                    $bobot["p$i"] = 4;
                break;
                case 2 :
                    $bobot["p$i"] = 3.5;
                break;
                case -2 :
                    $bobot["p$i"] = 3;
                break;
                case 3 :
                    $bobot["p$i"] = 2.5;
                break;
                case -3 :
                    $bobot["p$i"] = 2;
                break;
                case 4 :
                    $bobot["p$i"] = 1.5;
                break;
                case -4 :
                    $bobot["p$i"] = 1;
                break;
            }
        }
        // dd($bobot);
        if ($labels == 'insert') {
            $this->pembobotan_gap_model->save($bobot);
        } else {
            $this->pembobotan_gap_model->where('id_nama_kandidat', $id)->set($bobot)->update();
        }
    }

        
//-------------------------------------------- Perhitungan Nilai Total -----------------------------------------------------//

    public function nilai_total($id, $labels){
        $bobot_gap = $this->pembobotan_gap_model->where('id_nama_kandidat', $id)->orderBy('id ASC')->first();
        // dd($id);
        $aspek = $this->aspek_model->select(['bobot_core','bobot_secondary'])->findAll();
        
            $core_faktor_i = ($bobot_gap['i3'] + $bobot_gap['i4'] + $bobot_gap['i6'] + $bobot_gap['i7'] + $bobot_gap['i8'] + $bobot_gap['i10']) / 6;
            $secondary_faktor_i = ($bobot_gap['i1'] + $bobot_gap['i2'] + $bobot_gap['i5'] + $bobot_gap['i9']) / 4;
            $core_faktor_s = ($bobot_gap['s2'] + $bobot_gap['s6']) / 2;
            $secondary_faktor_s = ($bobot_gap['s1'] + $bobot_gap['s3'] + $bobot_gap['s4'] + $bobot_gap['s5']) / 4;
            $core_faktor_p = ($bobot_gap['p3'] + $bobot_gap['p4']) / 2;
            $secondary_faktor_p = ($bobot_gap['p1'] + $bobot_gap['p2']) / 2;

            $nilai_total = [
                'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
                'core_factor_i' => $core_faktor_i,
                'secondary_factor_i' => $secondary_faktor_i,
                'nilai_total_i' => (($aspek[0]['bobot_core'] / 100) * $core_faktor_i) + (($aspek[0]['bobot_secondary'] / 100) * $secondary_faktor_i),
                'core_factor_s' => $core_faktor_s,
                'secondary_factor_s' => $secondary_faktor_s,
                'nilai_total_s' => (($aspek[1]['bobot_core'] / 100) * $core_faktor_s) + (($aspek[1]['bobot_secondary'] / 100) * $secondary_faktor_s),
                'core_factor_p' => $core_faktor_p,
                'secondary_factor_p' => $secondary_faktor_p,
                'nilai_total_p' => (($aspek[2]['bobot_core'] / 100) * $core_faktor_p) + (($aspek[2]['bobot_secondary'] / 100) * $secondary_faktor_p),
            ];

            if ($labels == 'insert') {
                $this->nilai_total_model->save($nilai_total);
            } else {
                $this->nilai_total_model->where('id_nama_kandidat', $nilai_total['id_nama_kandidat'])->set($nilai_total)->update();
            }
    }

        
//-------------------------------------------- Perhitungan Ranking -----------------------------------------------------//

    public function perhitungan($id, $labels){
        $hitung = $this->nilai_total_model->where('id_nama_kandidat', $id)->orderBy('id ASC')->first();
        $aspek = $this->aspek_model->select('persentase')->findAll();

        $rank = [
            'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
            'nilai_total' => ($hitung['nilai_total_i'] * ($aspek[0]['persentase']) / 100) + ($hitung['nilai_total_s'] * ($aspek[1]['persentase']) / 100) + ($hitung['nilai_total_p'] * ($aspek[2]['persentase']) / 100),
            'rank' => '1',
        ];

        if ($labels == 'insert') {
            $this->perhitungan_model->save($rank);
        } else {
            $this->perhitungan_model->where('id_nama_kandidat', $rank['id_nama_kandidat'])->set($rank)->update();
        }
    }

}