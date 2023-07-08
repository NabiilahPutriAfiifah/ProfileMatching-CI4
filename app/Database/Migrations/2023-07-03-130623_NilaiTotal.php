<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NilaiTotal extends Migration
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
			'core_factor_i'	    => [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
			'secondary_factor_i'	=> [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
			'nilai_total_i'	    => [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
            
			'core_factor_s'	    => [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
			'secondary_factor_s'	=> [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
			'nilai_total_s'	    => [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
            
			'core_factor_p'	    => [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
			'secondary_factor_p'	=> [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
			'nilai_total_p'	    => [
                'type'          => 'FLOAT', 
                'constraint'	=> 11
            ],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp'
		]);

		$this->forge->addKey('id', true)->addKey(['id_nama_kandidat']);

        $this->forge->addForeignKey('id_nama_kandidat', 'nama_kandidat', 'id', 'cascade', 'cascade');

		$this->forge->createTable('nilai_total', true);
    }

    public function down()
    {
        $this->forge->dropTable('nilai_total', true);
    }
}