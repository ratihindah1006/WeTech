<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Seat extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_seat'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'row' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'no' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'auditorium_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
		]);
		$this->forge->addKey('id_seat', true);
		$this->forge->createTable('seat');
	}

	public function down()
	{
		$this->forge->dropTable('seat');
	}
}
