<?php

namespace App\Controllers;

use App\Models\NilaiTotalModel;
use App\Models\FaktorPenilaianModel;
use App\Models\NamaKandidatModel;
use App\Models\DataKandiatnModel;
use App\Models\DataKandidatModel;


class NilaiTotal extends BaseController
{
    protected $data;
    protected $nilai_total_model;
    protected $faktor_penilaian_model;
    protected $nama_kandidat_model;
    protected $data_kandidat_model;


    public function __construct() {

        $this->nilai_total_model = New NilaiTotalModel();
        $this->faktor_penilaian_model = New FaktorPenilaianModel();
        $this->nama_kandidat_model = New NamaKandidatModel();
        $this->data_kandidat_model = New DataKandidatModel();
    }

    public function nilai_total(){
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
        $this->data['bobot'] = $this->nilai_total_model->findAll();
        $this->data['nilai_total'] = $this->nilai_total_model
                                ->orderBy('id ASC')
                                ->select('nilai_total.id, nama_kandidat.nama_pendaftar, 
                                nilai_total.core_factor_i, nilai_total.secondary_factor_i, nilai_total.nilai_total_i, nilai_total.core_factor_s, nilai_total.secondary_factor_s, nilai_total.nilai_total_s, nilai_total.core_factor_p, nilai_total.secondary_factor_p, nilai_total.nilai_total_p')
                                ->join('nama_kandidat', 'nama_kandidat.id = nilai_total.id_nama_kandidat' )
                                ->get()->getResult();

        return view('nilai_total/index', $this->data);
    }

}