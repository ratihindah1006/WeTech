<?php namespace App\Controllers;

class Checkout extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Checkout',
			'isi' => 'checkout',
		];
		echo view('layouts/wrapper', $data);
	}


	

}