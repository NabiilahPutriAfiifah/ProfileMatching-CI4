<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NamaKandidat extends Migration
{
    public function up()
    {
		$this->forge->addField([
			'id'            => [
                'type'              => 'INT', 
                'constraint'	    => 11, 
                'unsigned'          => true, 
                'auto_increment'    => true
            ],
            'kode_pendaftar'    => [
                'type'          => 'VARCHAR', 
                'constraint'	=> 50,
            ],
			'nama_pendaftar'	=> [
                'type'          => 'VARCHAR', 
                'constraint'	=> 100
            ],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp'
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('nama_kandidat', true);

        $this->db->table('nama_kandidat')->insertBatch([
            [
                'kode_pendaftar'    => 'NK01',
                'nama_pendaftar'    => 'Nabila',
            ],
            [
                'kode_pendaftar'    => 'NK02',
                'nama_pendaftar'    => 'Sarah',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('nama_kandidat', true);
    }
}