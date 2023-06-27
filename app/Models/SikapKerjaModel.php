<?php

namespace App\Models;

use CodeIgniter\Model;

class SikapKerjaModel extends Model {

    protected $table = 'sikap_kerja';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_nama_kandidat','s1', 's2', 's3', 's4', 's5', 's6'];
    
    public function getSikapKerja($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }

    // public function getSikapKerja2(){
    //     $this->orderBy('id ASC')
    //         ->select('sikap_kerja.id, nama_kandidat.nama_pendaftar, 
    //                     sikap_kerja.s1, sikap_kerja.s2, sikap_kerja.s3, 
    //                     sikap_kerja.s4, sikap_kerja.s5, sikap_kerja.s6')
    //     ->join('nama_kandidat', 'nama_kandidat.id = sikap_kerja.id_nama_kandidat' )
    //     ->get()->getResult();
    //     return $this->findAll();
    //     }
}