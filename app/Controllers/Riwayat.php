<?php namespace App\Controllers;

class Riwayat extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Riwayat Beli',
			'isi' => 'UserTransaksi/riwayat',
		];
		echo view('layouts/wrapper', $data);
	}


	

}