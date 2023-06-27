<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FaktorPenilaian extends Migration
{
    public function up()
    {
        // Kategori
		$this->forge->addField([
			'id'            => [
                'type'              => 'INT', 
                'constraint'	    => 11, 
                'unsigned'          => true, 
                'auto_increment'    => true
            ],            
            'id_aspek'	=> [
                'type'          => 'INT', 
                'constraint'	=> 11, 
                'unsigned'      => true
            ],
            'nama_kriteria'	    => [
                'type'          => 'VARCHAR', 
                'constraint'	=> 50,
            ],
			'faktor'	=> [
                'type'          => 'VARCHAR', 
                'constraint'	=> 100
            ],
			'nilai'	=> [
                'type'          => 'INT', 
                'constraint'    => 11
            ],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp'
		]);

		$this->forge->addKey('id', true)->addKey(['id_aspek'])->addUniqueKey('nama_kriteria');

        $this->forge->addForeignKey('id_aspek', 'aspek', 'id', 'cascade', 'restrict');

		$this->forge->createTable('faktor_penilaian', true);

        // $this->db->table('faktor_penilaian')->insertBatch([
        //     [
        //         'nama_kriteria' => 'Common Sense',
        //         'faktor'        => 'Secondary Factor',
        //         'nilai'         => '3',
        //     ],
        //     [
        //         'nama_kriteria' => 'Ketelitian dan Tanggung Jawab',
        //         'faktor'        => 'Core Factor',
        //         'nilai'         => '4',
        //     ],
        // ]);
    }

    public function down()
    {
        $this->forge->dropTable('faktor_penilaian', true);
    }
}