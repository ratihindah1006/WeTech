<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reservation extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'reservation_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'user_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
			],
			'screening_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
			],
			'reserved' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'paid' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'active' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
		]);
		$this->forge->addKey('reservation_id', true);
		$this->forge->addForeignKey('user_id', 'user', 'user_id');
		$this->forge->addForeignKey('screening_id', 'screening', 'screening_id');
		$this->forge->createTable('reservation');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('reservation');
	}
}
