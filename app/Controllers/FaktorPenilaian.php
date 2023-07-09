<?php

namespace App\Controllers;

use App\Models\FaktorPenilaianModel;
use App\Models\AspekModel;

// use Dompdf\Dompdf;

class FaktorPenilaian extends BaseController{

    protected $data;

    protected $faktor_penilaian_model;
    protected $aspek_model;


    public function __construct() {

        $this->faktor_penilaian_model = New FaktorPenilaianModel();
        $this->aspek_model = New AspekModel();

    }


    //-------------------------------------------- Faktor Penilaian -----------------------------------------------------//

    public function faktor_penilaian(){
        $this->data['title'] = 'Faktor Penilaian';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'FaktorPenilaian'
            )
        );

        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model
                                ->orderBy('id ASC')
                                ->select('faktor_penilaian.id, aspek.nama_aspek, faktor_penilaian.nama_kriteria, faktor_penilaian.faktor, faktor_penilaian.nilai')
                                ->join('aspek', 'aspek.id = faktor_penilaian.id_aspek' )
                                ->get()->getResult();

        return view('faktor_penilaian/index', $this->data);
    }


    public function update_faktor_penilaian($id=''){
        $this->data['title'] = 'Ubah Data Faktor Penilaian';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'FaktorPenilaian',
                'url'   => base_url('faktor_penilaian')
            ),
            array(
                'title' => 'Ubah Data Faktor Penilaian'
            )
        );
        if(empty($id)){
            return redirect()->to('faktor_penilaian')->with('error', 'Data Tidak di Temukan');
        }

        $this->data['aspek'] = $this->aspek_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data'] = $this->faktor_penilaian_model->select('*')->where(['id'=>$id])->first();

        return view('faktor_penilaian/edit', $this->data);
    }

    public function submit_changes_faktor_penilaian(){
        $this->data['request'] = $this->request;
        $data = [
            'id_aspek' => $this->request->getPost('nama_aspek'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'faktor' => $this->request->getPost('faktor'),
            'nilai' => $this->request->getPost('nilai'),
        ];
        if(!empty($this->request->getPost('id'))) {
            $this->faktor_penilaian_model->where(['id'=>$this->request->getPost('id')])->set($data)->update();
            return redirect()->to('faktor_penilaian')->with('success', 'Berhasil Memperbaharui Data');
        } else {
            $this->faktor_penilaian_model->insert($data);
            return redirect()->to('faktor_penilaian')->with('success', 'Berhasil Menambahkan Data');
        }
    }

}