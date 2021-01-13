<?php namespace App\Controllers;

class Include_Invoice extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Riwayat Beli',
			'isi' => 'include',
		];
		echo view('layouts/wrapper', $data);
	}


	

}