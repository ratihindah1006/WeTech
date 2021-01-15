<?php

namespace App\Controllers;

class Bayar extends BaseController
{
	public function index()
	{
		$data = [
			'isi' => 'AdminBayar/bayar',
		];
		echo view('layout/wrapper', $data);
	}
}
