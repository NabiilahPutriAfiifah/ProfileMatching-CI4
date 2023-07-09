<?php

namespace App\Controllers;

use App\Models\NilaiGapModel;
use App\Models\FaktorPenilaianModel;
use App\Models\NamaKandidatModel;
use App\Models\DataKandiatnModel;
use App\Models\DataKandidatModel;

class NilaiGap extends BaseController
{
    protected $data;
    protected $nilai_gap_model;
    protected $faktor_penilaian_model;
    protected $nama_kandidat_model;
    protected $data_kandidat_model;


    public function __construct() {

        $this->nilai_gap_model = New NilaiGapModel();
        $this->faktor_penilaian_model = New FaktorPenilaianModel();
        $this->nama_kandidat_model = New NamaKandidatModel();
        $this->data_kandidat_model = New DataKandidatModel();

    }

    public function nilai_gap(){
        $this->data['title'] = 'Nilai Gap';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Nilai Gap'
            )
        );

        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data_kandidat'] = $this->data_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['nilai_gap'] = $this->nilai_gap_model
                                ->orderBy('id ASC')
                                ->select('nilai_gap.id, nama_kandidat.nama_pendaftar, 
                                nilai_gap.i1, nilai_gap.i2, nilai_gap.i3, 
                                nilai_gap.i4, nilai_gap.i5, nilai_gap.i6, 
                                nilai_gap.i7, nilai_gap.i8, nilai_gap.i9, 
                                nilai_gap.i10, nilai_gap.s1, nilai_gap.s2, nilai_gap.s3, 
                                nilai_gap.s4, nilai_gap.s5, nilai_gap.s6, nilai_gap.p1, nilai_gap.p2, nilai_gap.p3, 
                                nilai_gap.p4')
                                ->join('nama_kandidat', 'nama_kandidat.id = nilai_gap.id_nama_kandidat' )
                                // ->join('faktor_penilaian', 'faktor_penilaian.id = nilai_gap.id_faktor_penilaian' )
                                ->get()->getResult();

        return view('nilai_gap/index', $this->data);
    }

}