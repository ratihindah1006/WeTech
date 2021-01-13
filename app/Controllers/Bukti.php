<?php namespace App\Controllers;

class Bukti extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Bukti',
			'isi' => 'bukti',
		];
		echo view('layouts/wrapper', $data);
	}


	

}