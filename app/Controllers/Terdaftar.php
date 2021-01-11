<?php namespace App\Controllers;

class Terdaftar extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'User Terdaftar',
			'isi' => 'user/terdaftar',
		];
		echo view('layouts/wrapper', $data);
	}


	

}