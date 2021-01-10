<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'role_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'is_active' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'date_created' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
		]);
		$this->forge->addKey('user_id', true);
		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
