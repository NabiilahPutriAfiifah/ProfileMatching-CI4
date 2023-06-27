<?php

namespace App\Models;

use CodeIgniter\Model;

class NamaKandidatModel extends Model {

    protected $table = 'nama_kandidat';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['kode_pendaftar','nama_pendaftar'];
    
    public function getNamaKandidat($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}