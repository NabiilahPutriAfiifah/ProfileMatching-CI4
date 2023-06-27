<?php

namespace App\Models;

use CodeIgniter\Model;

class KecerdasanModel extends Model {

    protected $table = 'kecerdasan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_nama_kandidat','i1', 'i2', 'i3', 'i4', 'i5', 'i6', 'i7', 'i8', 'i9', 'i10'];
    
    public function getKecerdasan($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }

    // public function getKecerdasan2(){
    //     $this->orderBy('id ASC')
    //         ->select('kecerdasan.id, nama_kandidat.nama_pendaftar, 
    //                     kecerdasan.i1, kecerdasan.i2, kecerdasan.i3, 
    //                     kecerdasan.i4, kecerdasan.i5, kecerdasan.i6, 
    //                     kecerdasan.i7, kecerdasan.i8, kecerdasan.i9, 
    //                     kecerdasan.i10')
    //     ->join('nama_kandidat', 'nama_kandidat.id = kecerdasan.id_nama_kandidat' )
    //     ->get()->getResult();
    //     return $this->findAll();
    //     }
}