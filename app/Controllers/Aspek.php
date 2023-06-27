<?php

namespace App\Controllers;

use App\Models\AspekModel;

// use Dompdf\Dompdf;

class Aspek extends BaseController{

    protected $data;

    protected $aspek_model;


    public function __construct() {

        $this->aspek_model = New AspekModel();

    }


    //-------------------------------------------- Aspek -----------------------------------------------------//

    public function aspek(){
        $this->data['title'] = 'Aspek';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Aspek'
            )
        );

        $this->data['aspek'] = $this->aspek_model
                                ->orderBy('id ASC')
                                ->select('aspek.id, aspek.kode_aspek, 
                                          aspek.nama_aspek, aspek.persentase, aspek.bobot_core, aspek.bobot_secondary')
                                ->get()->getResult();

        return view('aspek/index', $this->data);
    }

    public function create_aspek(){
        $this->data['title'] = 'Tambah Data Aspek';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Aspek',
                'url'   => base_url('aspek')
            ),
            array(
                'title' => 'Tambah Data Aspek'
            )
        );

        $this->data['aspek'] = $this->aspek_model->orderBy('id ASC')->select('*')->get()->getResult();

        return view('aspek/create', $this->data);
    }


    public function update_aspek($id=''){
        $this->data['title'] = 'Ubah Data Aspek';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Aspek',
                'url'   => base_url('aspek')
            ),
            array(
                'title' => 'Ubah Data Aspek'
            )
        );
        if(empty($id)){
            return redirect()->to('aspek')->with('error', 'Data Tidak di Temukan');
        }

        $this->data['data'] = $this->aspek_model->select('*')->where(['id'=>$id])->first();

        return view('aspek/edit', $this->data);
    }

    public function submit_changes_aspek(){
        $this->data['request'] = $this->request;
        $data = [
            'kode_aspek' => $this->request->getPost('kode_aspek'),
            'nama_aspek' => $this->request->getPost('nama_aspek'),
            'persentase' => $this->request->getPost('persentase'),
            'bobot_core' => $this->request->getPost('bobot_core'),
            'bobot_secondary' => $this->request->getPost('bobot_secondary'),
        ];
        if(!empty($this->request->getPost('id'))) {
            $this->aspek_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
            return redirect()->to('aspek')->with('success', 'Berhasil Memperbaharui Data');
        } else {
            $this->aspek_model->insert($data);
            return redirect()->to('aspek')->with('success', 'Berhasil Menambahkan Data');
        }
    }

    public function delete_aspek($id=''){
        if(empty($id)){
            return redirect()->to('aspek')->with('error', 'Data Tidak di Temukan');
        }
        $delete = $this->aspek_model->delete($id);
        if($delete){
            return redirect()->to('aspek')->with('success', 'Data Berhasil di Hapus');
        }
    }

}