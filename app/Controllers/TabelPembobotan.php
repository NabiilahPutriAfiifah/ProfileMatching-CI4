<?php

namespace App\Controllers;

use App\Models\TabelPembobotanModel;

// use Dompdf\Dompdf;

class TabelPembobotan extends BaseController{

    protected $data;

    protected $tabel_pembobotan_model;


    public function __construct() {

        $this->tabel_pembobotan_model = New TabelPembobotanModel();

    }


    //-------------------------------------------- Tabel Pembobotan -----------------------------------------------------//

    public function tabel_pembobotan(){
        $this->data['title'] = 'TabelPembobotan';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'TabelPembobotan'
            )
        );

        $this->data['tabel_pembobotan'] = $this->tabel_pembobotan_model
                                ->orderBy('id ASC')
                                ->select('tabel_pembobotan.id, tabel_pembobotan.selisih, 
                                          tabel_pembobotan.bobot, tabel_pembobotan.keterangan')
                                ->get()->getResult();

        return view('tabel_pembobotan/index', $this->data);
    }

    // public function create_tabel_pembobotan(){
    //     $this->data['title'] = 'Tambah Data TabelPembobotan';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'TabelPembobotan',
    //             'url'   => base_url('tabel_pembobotan')
    //         ),
    //         array(
    //             'title' => 'Tambah Data TabelPembobotan'
    //         )
    //     );

    //     $this->data['tabel_pembobotan'] = $this->tabel_pembobotan_model->orderBy('id ASC')->select('*')->get()->getResult();

    //     return view('tabel_pembobotan/create', $this->data);
    // }


    // public function update_tabel_pembobotan($id=''){
    //     $this->data['title'] = 'Ubah Data TabelPembobotan';
    //     $this->data['breadcrumbs'] = array(
    //         array(
    //             'title' => 'Dashboard',
    //             'url' => base_url()
    //         ),
    //         array(
    //             'title' => 'TabelPembobotan',
    //             'url'   => base_url('tabel_pembobotan')
    //         ),
    //         array(
    //             'title' => 'Ubah Data TabelPembobotan'
    //         )
    //     );
    //     if(empty($id)){
    //         return redirect()->to('tabel_pembobotan')->with('error', 'Data Tidak di Temukan');
    //     }

    //     $this->data['data'] = $this->tabel_pembobotan_model->select('*')->where(['id'=>$id])->first();

    //     return view('tabel_pembobotan/edit', $this->data);
    // }

    public function submit_changes_tabel_pembobotan(){
        $this->data['request'] = $this->request;
        $data = [
            'selisih' => $this->request->getPost('selisih'),
            'bobot' => $this->request->getPost('bobot'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];
        if(!empty($this->request->getPost('id'))) {
            $this->tabel_pembobotan_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
            return redirect()->to('tabel_pembobotan')->with('success', 'Berhasil Memperbaharui Data');
        } else {
            $this->tabel_pembobotan_model->insert($data);
            return redirect()->to('tabel_pembobotan')->with('success', 'Berhasil Menambahkan Data');
        }
    }

    // public function delete_tabel_pembobotan($id=''){
    //     if(empty($id)){
    //         return redirect()->to('tabel_pembobotan')->with('error', 'Data Tidak di Temukan');
    //     }
    //     $delete = $this->tabel_pembobotan_model->delete($id);
    //     if($delete){
    //         return redirect()->to('tabel_pembobotan')->with('success', 'Data Berhasil di Hapus');
    //     }
    // }

}