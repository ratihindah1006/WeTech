<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SeatReserved extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'id_sr'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_seat'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
			],
			'reservation_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
			],
			'screening_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
		]);
		$this->forge->addKey('id_sr', true);
		$this->forge->addForeignKey('id_seat', 'seat', 'id_seat');
		$this->forge->addForeignKey('reservation_id', 'reservation', 'reservation_id');
		$this->forge->createTable('seat_reserved');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('seat_reserved');
	}
}
