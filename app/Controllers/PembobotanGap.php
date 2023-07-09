<?php

namespace App\Controllers;

use App\Models\PembobotanGapModel;
use App\Models\FaktorPenilaianModel;
use App\Models\NamaKandidatModel;
use App\Models\DataKandidatModel;

class PembobotanGap extends BaseController
{
    protected $data;
    protected $pembobotan_gap_model;
    protected $faktor_penilaian_model;
    protected $nama_kandidat_model;
    protected $data_kandidat_model;


    public function __construct() {

        $this->pembobotan_gap_model = New PembobotanGapModel();
        $this->faktor_penilaian_model = New FaktorPenilaianModel();
        $this->nama_kandidat_model = New NamaKandidatModel();
        $this->data_kandidat_model = New DataKandidatModel();

    }

    public function pembobotan_gap(){
        $this->data['title'] = 'Pembobotan Nilai Gap';
        $this->data['breadcrumbs'] = array(
            array(
                'title' => 'Dashboard',
                'url' => base_url()
            ),
            array(
                'title' => 'Pembobotan Nilai Gap'
            )
        );

        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['nama_kandidat'] = $this->nama_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['data_kandidat'] = $this->data_kandidat_model->orderBy('id ASC')->select('*')->get()->getResult();
        $this->data['bobot'] = $this->pembobotan_gap_model->findAll();
        $this->data['pembobotan_gap'] = $this->pembobotan_gap_model
                                ->orderBy('id ASC')
                                ->select('pembobotan_gap.id, nama_kandidat.nama_pendaftar, 
                                pembobotan_gap.i1, pembobotan_gap.i2, pembobotan_gap.i3, 
                                pembobotan_gap.i4, pembobotan_gap.i5, pembobotan_gap.i6, 
                                pembobotan_gap.i7, pembobotan_gap.i8, pembobotan_gap.i9, 
                                pembobotan_gap.i10, pembobotan_gap.s1, pembobotan_gap.s2, pembobotan_gap.s3, 
                                pembobotan_gap.s4, pembobotan_gap.s5, pembobotan_gap.s6, pembobotan_gap.p1, pembobotan_gap.p2, pembobotan_gap.p3, 
                                pembobotan_gap.p4')
                                ->join('nama_kandidat', 'nama_kandidat.id = pembobotan_gap.id_nama_kandidat' )
                                // ->join('faktor_penilaian', 'faktor_penilaian.id = pembobotan_gap.id_faktor_penilaian' )
                                ->get()->getResult();

        return view('pembobotan_gap/index', $this->data);
    }

}