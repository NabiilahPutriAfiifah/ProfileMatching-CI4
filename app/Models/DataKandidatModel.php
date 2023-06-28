<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKandidatModel extends Model
{
    protected $table = 'data_kandidat';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_nama_kandidat', 'i1', 'i2', 'i3', 'i4', 'i5', 'i6', 'i7', 'i8', 'i9', 'i10', 's1', 's2', 's3', 's4', 's5', 's6','p1', 'p2', 'p3', 'p4'];

    // Add any additional methods or customizations you need for the model
    public function getDataKandidat($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}