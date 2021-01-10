<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Movie extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'movie_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'img'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'title' => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'genre' => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'duration' => [
				'type'           => 'TIME',
				'null'           => true,
			],
			'released_at' => [
				'type'           => 'DATE',
				'null'           => true,
			],
			'producer' => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'sutradara' => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'cast' => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'sinopsis' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'is_active' => [
				'type'           => 'INT',
				'constraint'     => '128',
			],
		]);
		$this->forge->addKey('movie_id', true);
		$this->forge->createTable('movie');
	}

	public function down()
	{
		$this->forge->dropTable('movie');
	}
}
