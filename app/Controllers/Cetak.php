<?php namespace App\Controllers;

class Cetak extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Cetak',
			'isi' => 'cetak',
		];
		echo view('layouts/content', $data);
	}


	

}