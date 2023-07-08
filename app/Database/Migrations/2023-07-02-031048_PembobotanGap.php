<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PembobotanGap extends Migration
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
            'i1'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            'i2'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            'i3'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
			'i4'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            'i5'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            'i6'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
			'i7'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            'i8'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            'i9'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
			'i10'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            's1'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            's2'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            's3'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
			's4'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            's5'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            's6'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            'p1'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            'p2'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
            'p3'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
			'p4'	=> [
                'type'          => 'FLOAT', 
                'constraint'    => 11
            ],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp'
		]);

		$this->forge->addKey('id', true)->addKey(['id_nama_kandidat']);

        $this->forge->addForeignKey('id_nama_kandidat', 'nama_kandidat', 'id', 'cascade', 'cascade');

		$this->forge->createTable('pembobotan_gap', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('pembobotan_gap', true);
    }
}