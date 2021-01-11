<?php namespace App\Controllers;

class EditTerdaftar extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Add Movie',
			'isi' => 'user/EditTerdaftar',
		];
		echo view('layouts/wrapper', $data);
	}

}