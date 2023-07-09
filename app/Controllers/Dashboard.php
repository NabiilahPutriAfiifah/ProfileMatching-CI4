<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AspekModel;
use App\Models\FaktorPenilaianModel;
use App\Models\NamaKandidatModel;
use App\Models\DataKandidatModel;

class Dashboard extends BaseController {

    protected $data;
    protected $session;

    protected $users_model;
    protected $aspek_model;
    protected $faktor_penilaian_model;
    protected $nama_kandidat_model;
    protected $data_kandidat_model;

     // Initialize Objects
     public function __construct()
     {
         $this->users_model = new UsersModel();
         $this->aspek_model = new AspekModel();
         $this->faktor_penilaian_model = new FaktorPenilaianModel();
         $this->nama_kandidat_model = new NamaKandidatModel();
         $this->data_kandidat_model = new DataKandidatModel();

         $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
     }

    public function index() {

        $this->data['title'] = "Dashboard";
        $this->data['breadcrumbs'] = array(
            array(
                'title'     => 'Dashboard'
            )
        );
        $this->data['users'] = $this->users_model->select('*')->countAll();
        $this->data['aspek'] = $this->aspek_model->select('*')->countAll();
        $this->data['faktor_penilaian'] = $this->faktor_penilaian_model->select('*')->countAll();
        $this->data['nama_kandidat'] = $this->nama_kandidat_model->select('*')->countAll();
        $this->data['data_kandidat'] = $this->data_kandidat_model->select('*')->countAll();

        return view('dashboard/index', $this->data);
    }
}