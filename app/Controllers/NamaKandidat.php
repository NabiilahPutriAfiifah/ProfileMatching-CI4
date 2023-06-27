<?php

namespace App\Controllers;

use App\Models\NamaKandidatModel;

// use Dompdf\Dompdf;

class NamaKandidat extends BaseController{

    protected $data;

    protected $nama_kandidat_model;


    public function __construct() {

        $this->nama_kandidat_model = New NamaKandidatModel();

    }


    //-------------------------------------------- Nama Kandidat -----------------------------------------------------//

    public function nama_kandidat(){
        $this->data['title'] = 'NamaKandidat';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'NamaKandidat'
            )
        );

        $this->data['nama_kandidat'] = $this->nama_kandidat_model
                                ->orderBy('id ASC')
                                ->select('nama_kandidat.id, nama_kandidat.kode_pendaftar, 
                                          nama_kandidat.nama_pendaftar')
                                ->get()->getResult();

        return view('nama_kandidat/index', $this->data);
    }

    public function create_nama_kandidat(){
        $this->data['title'] = 'Tambah Data Nama Kandidat';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'NamaKandidat',
                'url'   => base_url('nama_kandidat')
            ),
            array(
                'title' => 'Tambah Data Nama Kandidat'
            )
        );

        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();

        return view('nama_kandidat/create', $this->data);
    }


    public function update_nama_kandidat($id=''){
        $this->data['title'] = 'Ubah Data Nama Kandidat';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'NamaKandidat',
                'url'   => base_url('nama_kandidat')
            ),
            array(
                'title' => 'Ubah Data Nama Kandidat'
            )
        );
        if(empty($id)){
            return redirect()->to('nama_kandidat')->with('error', 'Data Tidak di Temukan');
        }

        $this->data['data'] = $this->nama_kandidat_model->select('*')->where(['id'=>$id])->first();

        return view('nama_kandidat/edit', $this->data);
    }

    public function submit_changes_nama_kandidat(){
        $this->data['request'] = $this->request;
        $data = [
            'kode_pendaftar' => $this->request->getPost('kode_pendaftar'),
            'nama_pendaftar' => $this->request->getPost('nama_pendaftar'),
        ];
        if(!empty($this->request->getPost('id'))) {
            $this->nama_kandidat_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
            return redirect()->to('nama_kandidat')->with('success', 'Berhasil Memperbaharui Data');
        } else {
            $this->nama_kandidat_model->insert($data);
            return redirect()->to('nama_kandidat')->with('success', 'Berhasil Menambahkan Data');
        }
    }

    public function delete_nama_kandidat($id=''){
        if(empty($id)){
            return redirect()->to('nama_kandidat')->with('error', 'Data Tidak di Temukan');
        }
        $delete = $this->nama_kandidat_model->delete($id);
        if($delete){
            return redirect()->to('nama_kandidat')->with('success', 'Data Berhasil di Hapus');
        }
    }

}