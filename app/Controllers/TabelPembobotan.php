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



}