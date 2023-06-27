<?php

namespace App\Models;

use CodeIgniter\Model;

class FaktorPenilaianModel extends Model {

    protected $table = 'faktor_penilaian';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_aspek','nama_kriteria', 'faktor', 'nilai'];
    
    public function getFaktorPenilaian($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}