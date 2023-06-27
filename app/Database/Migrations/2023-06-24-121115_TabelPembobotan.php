<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelPembobotan extends Migration
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
            'selisih'	    => [
                'type'          => 'TINYINT', 
                'constraint'	=> 3,
            ],
			'bobot'	=> [
                'type'          => 'FLOAT', 
            ],
			'keterangan'	=> [
                'type'          => 'VARCHAR', 
                'constraint'    => 100
            ],            
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp'
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('tabel_pembobotan', true);
    }

    public function down()
    {
        $this->forge->dropTable('tabel_pembobotan', true);
    }
}