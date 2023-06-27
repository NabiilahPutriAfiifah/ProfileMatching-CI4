<?php

namespace App\Models;

use CodeIgniter\Model;

class PerilakuModel extends Model {

    protected $table = 'perilaku';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_nama_kandidat','p1', 'p2', 'p3', 'p4'];
    
    public function getPerilaku($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }
    // public function getPerilaku2(){
    //     $this->orderBy('id ASC')
    //         ->select('perilaku.id, nama_kandidat.nama_pendaftar, 
    //                     perilaku.p1, perilaku.p2, perilaku.p3, 
    //                     perilaku.p4')
    //     ->join('nama_kandidat', 'nama_kandidat.id = perilaku.id_nama_kandidat' )
    //     ->get()->getResult();
    //     return $this->findAll();
    //     }
}