<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Checkout extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'id_checkout'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'user_id'	=> [
				'type'	=> 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'tanggal' => [
				'type'           => 'DATE',
				'null'           => true,
			],
			'jam' => [
				'type'           => 'TIME',
				'null'           => true,
			],
			'total_bayar' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'bayar' => [
				'type'           	=> 'INT',
				'constraint'    	 => '11',
			],
			'bukti' => [
				'type'           	=> 'VARCHAR',
				'constraint'    	 => '128',
			],
			'is_active' => [
				'type'           	=> 'INT',
				'constraint'    	 => '2',
			],
		]);
		$this->forge->addKey('id_checkout', true);
		$this->forge->addForeignKey('user_id', 'user', 'user_id');
		$this->forge->createTable('checkout');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('checkout');
	}
}
