<?php

namespace App\Models;

use CodeIgniter\Model;

class PerhitunganModel extends Model
{
    protected $table = 'perhitungan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_nama_kandidat', 'nilai_total', 'rank'];

    // Add any additional methods or customizations you need for the model
    public function getPerhitungan($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}