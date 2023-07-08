<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataKandidat extends Migration
{
    public function up()
    {
        //Kecerdasan
		$this->forge->addField([
			'id'            => [
                'type'              => 'INT', 
                'constraint'	    => 11, 
                'unsigned'          => true, 
                'auto_increment'    => true
            ],
            'id_nama_kandidat'	    => [
                'type'          => 'INT', 
                'constraint'	=> 11,
                'unsigned'      => true
            ],
			'i1'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            'i2'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            'i3'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
			'i4'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            'i5'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            'i6'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
			'i7'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            'i8'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            'i9'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
			'i10'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
			's1'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            's2'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            's3'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
			's4'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            's5'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            's6'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
			'p1'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            'p2'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            'p3'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
			'p4'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp'
		]);

        $this->forge->addKey('id', true)->addKey(['id_nama_kandidat']);
        $this->forge->addForeignKey('id_nama_kandidat', 'nama_kandidat', 'id', 'cascade', 'cascade');
		$this->forge->createTable('data_kandidat', true);

    }

    
    public function down()
    {
        $this->forge->dropTable('data_kandidat', true);
    }
}