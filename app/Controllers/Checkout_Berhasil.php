<?php namespace App\Controllers;

class Checkout_Berhasil extends BaseController
{
	public function index()
	{
		$data = [
			'isi' => 'checkout_berhasil',
		];
		echo view('layouts/wrapper', $data);
	}


	

}