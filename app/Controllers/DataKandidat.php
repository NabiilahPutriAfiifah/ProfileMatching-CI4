<?php

namespace App\Controllers;

// use App\Models\KecerdasanModel;
// use App\Models\SikapKerjaModel;
// use App\Models\PerilakuModel;
use App\Models\DataKandidatModel;
use App\Models\NamaKandidatModel;
use App\Models\FaktorPenilaianModel;
use App\Models\NilaiGapModel;
use App\Models\PembobotanGapModel;
// use Dompdf\Dompdf;

class DataKandidat extends BaseController{

    protected $data;

    // protected $kecerdasan_model;
    // protected $sikap_kerja_model;
    // protected $perilaku_model;
    protected $data_kandidat_model;
    protected $nama_kandidat_model;
    protected $faktor_penilaian_model;
    protected $nilai_gap_model;
    protected $pembobotan_gap_model;

    public function __construct() {

        // $this->kecerdasan_model = New KecerdasanModel();
        // $this->sikap_kerja_model = New SikapKerjaModel();
        // $this->perilaku_model = New PerilakuModel();
        $this->data_kandidat_model = New DataKandidatModel();
        $this->nama_kandidat_model = New NamaKandidatModel();
        $this->faktor_penilaian_model = New FaktorPenilaianModel();
        $this->nilai_gap_model = New NilaiGapModel();
        $this->pembobotan_gap_model = New PembobotanGapModel();
    }
    
//-------------------------------------------- Kecerdasan -----------------------------------------------------//

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
    // $this->data['kecerdasan'] = $this->kecerdasan_model->getKecerdasan2();
    // $this->data['sikap_kerja'] = $this->sikap_kerja_model->getSikapKerja2();
    // $this->data['perilaku'] = $this->perilaku_model->getPerilaku2();

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
    // dd($data);
    $faktor_kandidat = $this->faktor_penilaian_model->orderBy('id ASC')->findAll();
    // dd($faktor_kandidat);
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
        $this->bobot_i($this->request->getPost('id'),'update');
        return redirect()->to('data_kandidat')->with('success', 'Berhasil Memperbaharui Data');
    } else {
        $this->data_kandidat_model->insert($data);
        $this->nilai_gap_model->insert($bobot_kandidat);
        $kandidat = $this->nilai_gap_model->orderBy('id', 'DESC')->first();
        $this->bobot_i($kandidat['id_nama_kandidat'], 'insert');
        
        return redirect()->to('data_kandidat')->with('success', 'Berhasil Menambahkan Data');
    }
}

public function delete_data_kandidat($id=''){
    if(empty($id)){
        return redirect()->to('data_kandidat')->with('error', 'Data Tidak di Temukan');
    }
    $this->nilai_gap_model->where('id_nama_kandidat', $id)->delete();
    $this->pembobotan_gap_model->where('id_nama_kandidat', $id)->delete();
    $delete = $this->data_kandidat_model->where('id_nama_kandidat', $id)->delete();
    if($delete){
        return redirect()->to('data_kandidat')->with('success', 'Data Berhasil di Hapus');
    }
}

public function bobot_i($id, $labels){
    $bobot = [];
    $bobot_i = $this->nilai_gap_model->where('id_nama_kandidat', $id)->first();
    // dd($bobot_i);
    // for ($j = 0; $j < count($bobot_i); $j++){
    // }
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
        
        
    // dd($bobot);
    // foreach ($bobot as $data){
    //     $this->pembobotan_gap_model->save([
    //         'id_nama_kandidat'=>$data['id_nama_kandidat'],
    //         'i1'=>$data['i1'],
    //         'i2'=>$data['i2'],
    //         'i3'=>$data['i3'],
    //         'i4'=>$data['i4'],
    //         'i5'=>$data['i5'],
    //         'i6'=>$data['i6'],
    //         'i7'=>$data['i7'],
    //         'i8'=>$data['i8'],
    //         'i9'=>$data['i9'],
    //         'i10'=>$data['i10'],
    //         's1'=>$data['s1'],
    //         's2'=>$data['s2'],
    //         's3'=>$data['s3'],
    //         's4'=>$data['s4'],
    //         's5'=>$data['s5'],
    //         's6'=>$data['s6'],
    //         'p1'=>$data['p1'],
    //         'p2'=>$data['p2'],
    //         'p3'=>$data['p3'],
    //         'p4'=>$data['p4'],
    //     ]);
    // };
    // dd();
}

}