<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Auditorium extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'seat_no' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('auditorium');
	}

	public function down()
	{
		$this->forge->dropTable('auditorium');
	}
}
