<?php namespace App\Controllers;

class VerifikasiAdmin extends BaseController
{
	public function index()
	{
		$data = [
			'isi' => 'verifikasiAdmin',
		];
		echo view('layouts/wrapper', $data);
	}


	

}