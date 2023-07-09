<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perhitungan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id'            => [
                'type'              => 'INT', 
                'constraint'	    => 11, 
                'unsigned'          => true, 
                'auto_increment'    => true
            ],            
            'id_nama_kandidat'	=> [
                'type'          => 'INT', 
                'constraint'	=> 11, 
                'unsigned'      => true
            ],
			'nilai_total'	    => [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
			'rank'	=> [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp'
		]);

		$this->forge->addKey('id', true)->addKey(['id_nama_kandidat']);

        $this->forge->addForeignKey('id_nama_kandidat', 'nama_kandidat', 'id', 'cascade', 'cascade');

		$this->forge->createTable('perhitungan', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('perhitungan', true);
    }
}