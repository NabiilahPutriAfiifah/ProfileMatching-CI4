<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AspekModel;
use App\Models\FaktorPenilaianModel;

class Dashboard extends BaseController {

    protected $data;
    protected $session;

    protected $users_model;
    protected $aspek_model;
    protected $faktor_penilaian_model;

     // Initialize Objects
     public function __construct()
     {
         $this->users_model = new UsersModel();
         $this->aspek_model = new AspekModel();
         $this->faktor_penilaian_model = new FaktorPenilaianModel();

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

        return view('dashboard/index', $this->data);
    }
}