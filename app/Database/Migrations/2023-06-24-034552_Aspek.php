<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Aspek extends Migration
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
            'kode_aspek'	    => [
                'type'          => 'VARCHAR', 
                'constraint'	=> 50,
            ],
			'nama_aspek'	=> [
                'type'          => 'VARCHAR', 
                'constraint'	=> 100
            ],
			'persentase'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            'bobot_core'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
            'bobot_secondary'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp'
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('aspek', true);

        $this->db->table('aspek')->insertBatch([
            [
                'kode_aspek'        => 'AA01',
                'nama_aspek'        => 'Kecerdasan',
                'persentase'        => 30,
                'bobot_core'        => 60,
                'bobot_secondary'   => 40,
            ],
            [
                'kode_aspek'        => 'AA02',
                'nama_aspek'        => 'Sikap Kerja',
                'persentase'        => 30,
                'bobot_core'        => 65,
                'bobot_secondary'   => 35,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('aspek', true);
    }
}