<?php

namespace App\Models;

use CodeIgniter\Model;

class AspekModel extends Model {

    protected $table = 'aspek';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['kode_aspek','nama_aspek', 'persentase', 'bobot_core', 'bobot_secondary'];
    
    public function getAspek($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}