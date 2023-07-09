<?php

namespace App\Controllers;

use App\Models\PerhitunganModel;
use App\Models\FaktorPenilaianModel;
use App\Models\NamaKandidatModel;
use App\Models\DataKandidatModel;


class Perhitungan extends BaseController
{
    protected $data;
    protected $perhitungan_model;
    protected $faktor_penilaian_model;
    protected $nama_kandidat_model;
    protected $data_kandidat_model;


    public function __construct() {

        $this->perhitungan_model = New PerhitunganModel();
        $this->faktor_penilaian_model = New FaktorPenilaianModel();
        $this->nama_kandidat_model = New NamaKandidatModel();
        $this->data_kandidat_model = New DataKandidatModel();
    }

    public function perhitungan(){
        $this->data['title'] = 'Nilai Total';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Nilai Total'
            )
        );

        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data_kandidat'] = $this->data_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['bobot'] = $this->perhitungan_model->findAll();
        $this->data['perhitungan'] = $this->perhitungan_model
                                ->orderBy('nilai_total', 'DESC')
                                ->select('perhitungan.id, nama_kandidat.nama_pendaftar, 
                                perhitungan.nilai_total, perhitungan.rank')
                                ->join('nama_kandidat', 'nama_kandidat.id = perhitungan.id_nama_kandidat' )
                                ->get()->getResult();

        return view('perhitungan/index', $this->data);
    }
}