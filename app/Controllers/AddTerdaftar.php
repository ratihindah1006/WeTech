<?php namespace App\Controllers;

class AddTerdaftar extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Add Movie',
			'isi' => 'user/addTerdaftar',
		];
		echo view('layouts/wrapper', $data);
	}



}