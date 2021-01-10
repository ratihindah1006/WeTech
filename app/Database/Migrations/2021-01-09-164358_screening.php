<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Screening extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addKey('reservation_id', true);
		$this->forge->addField([
			'screening_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'movie_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
			],
			'screening_start' => [
				'type'           => 'TIME',
				'null'           => true,
			],
		]);
		$this->forge->addKey('screening_id', true);
		$this->forge->addForeignKey('movie_id', 'movie', 'movie_id');
		$this->forge->createTable('screening');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('screening');
	}
}
