<?php

namespace App\Models;

use CodeIgniter\Model;

class TabelPembobotanModel extends Model {

    protected $table = 'tabel_pembobotan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['selisih','bobot', 'keterangan'];
    
    public function getTabelPembobotan($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}