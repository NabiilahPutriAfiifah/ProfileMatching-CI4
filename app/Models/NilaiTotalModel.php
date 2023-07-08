<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiTotalModel extends Model
{
    protected $table = 'nilai_total';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_nama_kandidat', 'core_factor_i', 'secondary_factor_i', 'nilai_total_i', 'core_factor_s', 'secondary_factor_s', 'nilai_total_s', 'core_factor_p', 'secondary_factor_p', 'nilai_total_p'];

    // Add any additional methods or customizations you need for the model
    public function getNilaiTotal($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}