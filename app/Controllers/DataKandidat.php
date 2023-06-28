<?php

namespace App\Controllers;

// use App\Models\KecerdasanModel;
// use App\Models\SikapKerjaModel;
// use App\Models\PerilakuModel;
use App\Models\DataKandidatModel;
use App\Models\NamaKandidatModel;
use App\Models\FaktorPenilaianModel;
use App\Models\NilaiGapModel;
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

    public function __construct() {

        // $this->kecerdasan_model = New KecerdasanModel();
        // $this->sikap_kerja_model = New SikapKerjaModel();
        // $this->perilaku_model = New PerilakuModel();
        $this->data_kandidat_model = New DataKandidatModel();
        $this->nama_kandidat_model = New NamaKandidatModel();
        $this->faktor_penilaian_model = New FaktorPenilaianModel();
        $this->nilai_gap_model = New NilaiGapModel();
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
                                      data_kandidat.p4')
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
    $this->data['data'] = $this->data_kandidat_model->select('*')->where(['id'=>$id])->first();

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
        $this->data_kandidat_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
        $this->nilai_gap_model->where(['id_nama_kandidat'=>$this->request->getPost('id')])->set($bobot_kandidat)->update();
        return redirect()->to('data_kandidat')->with('success', 'Berhasil Memperbaharui Data');
    } else {
        $this->data_kandidat_model->insert($data);
        $this->nilai_gap_model->insert($bobot_kandidat);
        return redirect()->to('data_kandidat')->with('success', 'Berhasil Menambahkan Data');
    }
}

public function delete_data_kandidat($id=''){
    if(empty($id)){
        return redirect()->to('data_kandidat')->with('error', 'Data Tidak di Temukan');
    }
    $delete = $this->data_kandidat_model->delete($id);
    if($delete){
        return redirect()->to('data_kandidat')->with('success', 'Data Berhasil di Hapus');
    }
}


    // //-------------------------------------------- Kecerdasan -----------------------------------------------------//

    // public function kecerdasan(){
    //     $this->data['title'] = 'Kecerdasan';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'Kecerdasan'
    //         )
    //     );

    //     $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['kecerdasan'] = $this->kecerdasan_model
    //                             ->orderBy('id ASC')
    //                             ->select('kecerdasan.id, nama_kandidat.nama_pendaftar, 
    //                                       kecerdasan.i1, kecerdasan.i2, kecerdasan.i3, 
    //                                       kecerdasan.i4, kecerdasan.i5, kecerdasan.i6, 
    //                                       kecerdasan.i7, kecerdasan.i8, kecerdasan.i9, 
    //                                       kecerdasan.i10')
    //                             ->join('nama_kandidat', 'nama_kandidat.id = kecerdasan.id_nama_kandidat' )
    //                             ->get()->getResult();
    //     // $this->data['kecerdasan'] = $this->kecerdasan_model->getKecerdasan2();
    //     // $this->data['sikap_kerja'] = $this->sikap_kerja_model->getSikapKerja2();
    //     // $this->data['perilaku'] = $this->perilaku_model->getPerilaku2();

    //     return view('data_kandidat/kecerdasan/index', $this->data);
    // }

    // public function create_kecerdasan(){
    //     $this->data['title'] = 'Tambah Data Kecerdasan';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'Kecerdasan',
    //             'url'   => base_url('data_kandidat/kecerdasan')
    //         ),
    //         array(
    //             'title' => 'Tambah Data Kecerdasan'
    //         )
    //     );

    //     $this->data['kecerdasan'] = $this->kecerdasan_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     return view('data_kandidat/kecerdasan/create', $this->data);
    // }

    // public function update_kecerdasan($id=''){
    //     $this->data['title'] = 'Ubah Data Kecerdasan';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'kecerdasan',
    //             'url'   => base_url('data_kandidat/kecerdasan')
    //         ),
    //         array(
    //             'title' => 'Ubah Data Kecerdasan'
    //         )
    //     );
    //     if(empty($id)){
    //         return redirect()->to('data_kandidat/kecerdasan')->with('error', 'Data Tidak di Temukan');
    //     }

    //     $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['data'] = $this->kecerdasan_model->select('*')->where(['id'=>$id])->first();

    //     return view('data_kandidat/kecerdasan/edit', $this->data);
    // }

    // public function submit_changes_kecerdasan(){
    //     $this->data['request'] = $this->request;
    //     $data = [
    //         'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
    //         'i1' => $this->request->getPost('i1'),
    //         'i2' => $this->request->getPost('i2'),
    //         'i3' => $this->request->getPost('i3'),
    //         'i4' => $this->request->getPost('i4'),
    //         'i5' => $this->request->getPost('i5'),
    //         'i6' => $this->request->getPost('i6'),
    //         'i7' => $this->request->getPost('i7'),
    //         'i8' => $this->request->getPost('i8'),
    //         'i9' => $this->request->getPost('i9'),
    //         'i10' => $this->request->getPost('i10'),
            
    //     ];
    //     $faktor_kecerdasan = $this->faktor_penilaian_model->where('id_aspek', 1)->orderBy('id ASC')->findAll();
    //     // dd($faktor_kecerdasan);
    //     $bobot_kecerdasan = [
    //         'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
    //         'i1' => $data['i1'] - $faktor_kecerdasan[0]['nilai'],
    //         'i2' => $data['i2'] - $faktor_kecerdasan[1]['nilai'],
    //         'i3' => $data['i3'] - $faktor_kecerdasan[2]['nilai'],
    //         'i4' => $data['i4'] - $faktor_kecerdasan[3]['nilai'],
    //         'i5' => $data['i5'] - $faktor_kecerdasan[4]['nilai'],
    //         'i6' => $data['i6'] - $faktor_kecerdasan[5]['nilai'],
    //         'i7' => $data['i7'] - $faktor_kecerdasan[6]['nilai'],
    //         'i8' => $data['i8'] - $faktor_kecerdasan[7]['nilai'],
    //         'i9' => $data['i9'] - $faktor_kecerdasan[8]['nilai'],
    //         'i10' => $data['i10'] - $faktor_kecerdasan[9]['nilai'],
    //     ];
    //     if(!empty($this->request->getPost('id'))) {
    //         $this->kecerdasan_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
    //         $this->nilai_gap_model->where(['id_nama_kandidat'=>$this->request->getPost('id')])->set($bobot_kecerdasan)->update();
    //         return redirect()->to('data_kandidat/kecerdasan')->with('success', 'Berhasil Memperbaharui Data');
    //     } else {
    //         $this->kecerdasan_model->insert($data);
    //         $this->nilai_gap_model->insert($bobot_kecerdasan);
    //         return redirect()->to('data_kandidat/kecerdasan')->with('success', 'Berhasil Menambahkan Data');
    //     }
    // }

    // public function delete_kecerdasan($id=''){
    //     if(empty($id)){
    //         return redirect()->to('data_kandidat/kecerdasan')->with('error', 'Data Tidak di Temukan');
    //     }
    //     $delete = $this->kecerdasan_model->delete($id);
    //     if($delete){
    //         return redirect()->to('data_kandidat/kecerdasan')->with('success', 'Data Berhasil di Hapus');
    //     }
    // }



    // //-------------------------------------------- Sikap Kerja -----------------------------------------------------//

    // public function sikap_kerja(){
    //     $this->data['title'] = 'Sikap Kerja';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'Sikap Kerja'
    //         )
    //     );

    //     $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['sikap_kerja'] = $this->sikap_kerja_model
    //                             ->orderBy('id ASC')
    //                             ->select('sikap_kerja.id, nama_kandidat.nama_pendaftar, 
    //                                       sikap_kerja.s1, sikap_kerja.s2, sikap_kerja.s3, 
    //                                       sikap_kerja.s4, sikap_kerja.s5, sikap_kerja.s6')
    //                             ->join('nama_kandidat', 'nama_kandidat.id = sikap_kerja.id_nama_kandidat' )
    //                             ->get()->getResult();
    //     return view('data_kandidat/sikap_kerja/index', $this->data);
    // }

    // public function create_sikap_kerja(){
    //     $this->data['title'] = 'Tambah Data Sikap Kerja';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'Sikap Kerja',
    //             'url'   => base_url('data_kandidat/sikap_kerja')
    //         ),
    //         array(
    //             'title' => 'Tambah Data Sikap Kerja'
    //         )
    //     );

    //     $this->data['sikap_kerja'] = $this->sikap_kerja_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     return view('data_kandidat/sikap_kerja/create', $this->data);
    // }

    // public function update_sikap_kerja($id=''){
    //     $this->data['title'] = 'Ubah Data Sikap Kerja';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'Sikap Kerja',
    //             'url'   => base_url('data_kandidat/sikap_kerja')
    //         ),
    //         array(
    //             'title' => 'Ubah Data Sikap Kerja'
    //         )
    //     );
    //     if(empty($id)){
    //         return redirect()->to('data_kandidat/sikap_kerja')->with('error', 'Data Tidak di Temukan');
    //     }

    //     $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['data'] = $this->sikap_kerja_model->select('*')->where(['id'=>$id])->first();

    //     return view('data_kandidat/sikap_kerja/edit', $this->data);
    // }

    // public function submit_changes_sikap_kerja(){
    //     $this->data['request'] = $this->request;
    //     $data = [
    //         'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
    //         's1' => $this->request->getPost('s1'),
    //         's2' => $this->request->getPost('s2'),
    //         's3' => $this->request->getPost('s3'),
    //         's4' => $this->request->getPost('s4'),
    //         's5' => $this->request->getPost('s5'),
    //         's6' => $this->request->getPost('s6'),
    //     ];
    //     $faktor_sikap_kerja = $this->faktor_penilaian_model->where('id_aspek', 2)->orderBy('id ASC')->findAll();
    //     // dd($faktor_sikap_kerja);
    //     $bobot_sikap_kerja = [
    //         'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
    //         's1' => $data['s1'] - $faktor_sikap_kerja[0]['nilai'],
    //         's2' => $data['s2'] - $faktor_sikap_kerja[1]['nilai'],
    //         's3' => $data['s3'] - $faktor_sikap_kerja[2]['nilai'],
    //         's4' => $data['s4'] - $faktor_sikap_kerja[3]['nilai'],
    //         's5' => $data['s5'] - $faktor_sikap_kerja[4]['nilai'],
    //         's6' => $data['s6'] - $faktor_sikap_kerja[5]['nilai'],
    //     ];
    //     if(!empty($this->request->getPost('id'))) {
    //         $this->sikap_kerja_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
    //         $this->nilai_gap_model->where(['id_nama_kandidat'=>$this->request->getPost('id')])->set($bobot_sikap_kerja)->update();
    //         return redirect()->to('data_kandidat/sikap_kerja')->with('success', 'Berhasil Memperbaharui Data');
    //     } else {
    //         $this->sikap_kerja_model->insert($data);
    //         $this->nilai_gap_model->insert($bobot_sikap_kerja);
    //         return redirect()->to('data_kandidat/sikap_kerja')->with('success', 'Berhasil Menambahkan Data');
    //     }
    // }

    // public function delete_sikap_kerja($id=''){
    //     if(empty($id)){
    //         return redirect()->to('data_kandidat/sikap_kerja')->with('error', 'Data Tidak di Temukan');
    //     }
    //     $delete = $this->sikap_kerja_model->delete($id);
    //     if($delete){
    //         return redirect()->to('data_kandidat/sikap_kerja')->with('success', 'Data Berhasil di Hapus');
    //     }
    // }

    // //-------------------------------------------- Perilaku -----------------------------------------------------//

    // public function perilaku(){
    //     $this->data['title'] = 'Perilaku';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'Perilaku'
    //         )
    //     );

    //     $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['perilaku'] = $this->perilaku_model
    //                             ->orderBy('id ASC')
    //                             ->select('perilaku.id, nama_kandidat.nama_pendaftar, 
    //                                       perilaku.p1, perilaku.p2, perilaku.p3, 
    //                                       perilaku.p4')
    //                             ->join('nama_kandidat', 'nama_kandidat.id = perilaku.id_nama_kandidat' )
    //                             ->get()->getResult();
    //     return view('data_kandidat/perilaku/index', $this->data);
    // }

    // public function create_perilaku(){
    //     $this->data['title'] = 'Tambah Data Perilaku';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'Perilaku',
    //             'url'   => base_url('data_kandidat/perilaku')
    //         ),
    //         array(
    //             'title' => 'Tambah Data Perilaku'
    //         )
    //     );

    //     $this->data['perilaku'] = $this->perilaku_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     return view('data_kandidat/perilaku/create', $this->data);
    // }

    // public function update_perilaku($id=''){
    //     $this->data['title'] = 'Ubah Data Perilaku';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'Perilaku',
    //             'url'   => base_url('data_kandidat/perilaku')
    //         ),
    //         array(
    //             'title' => 'Ubah Data Perilaku'
    //         )
    //     );
    //     if(empty($id)){
    //         return redirect()->to('data_kandidat/perilaku')->with('error', 'Data Tidak di Temukan');
    //     }

    //     $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
    //     $this->data['data'] = $this->perilaku_model->select('*')->where(['id'=>$id])->first();

    //     return view('data_kandidat/perilaku/edit', $this->data);
    // }

    // public function submit_changes_perilaku(){
    //     $this->data['request'] = $this->request;
    //     $data = [
    //         'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
    //         'p1' => $this->request->getPost('p1'),
    //         'p2' => $this->request->getPost('p2'),
    //         'p3' => $this->request->getPost('p3'),
    //         'p4' => $this->request->getPost('p4'),
    //     ];
    //     $faktor_perilaku = $this->faktor_penilaian_model->where('id_aspek', 3)->orderBy('id ASC')->findAll();
    //     $bobot_perilaku = [
    //         'id_nama_kandidat' => $this->request->getPost('nama_pendaftar'),
    //         'p1' => $data['p1'] - $faktor_perilaku[0]['nilai'],
    //         'p2' => $data['p2'] - $faktor_perilaku[1]['nilai'],
    //         'p3' => $data['p3'] - $faktor_perilaku[2]['nilai'],
    //         'p4' => $data['p4'] - $faktor_perilaku[3]['nilai'],
    //     ];
    //     if(!empty($this->request->getPost('id'))) {
    //         $this->perilaku_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
    //         $this->nilai_gap_model->where(['id_nama_kandidat'=>$this->request->getPost('id')])->set($bobot_perilaku)->update();
    //         return redirect()->to('data_kandidat/perilaku')->with('success', 'Berhasil Memperbaharui Data');
    //     } else {
    //         $this->perilaku_model->insert($data);
    //         $this->nilai_gap_model->insert($bobot_perilaku);
    //         return redirect()->to('data_kandidat/perilaku')->with('success', 'Berhasil Menambahkan Data');
    //     }
    // }

    // public function delete_perilaku($id=''){
    //     if(empty($id)){
    //         return redirect()->to('data_kandidat/perilaku')->with('error', 'Data Tidak di Temukan');
    //     }
    //     $delete = $this->perilaku_model->delete($id);
    //     if($delete){
    //         return redirect()->to('data_kandidat/perilaku')->with('success', 'Data Berhasil di Hapus');
    //     }
    // }

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