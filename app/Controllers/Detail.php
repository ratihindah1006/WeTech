<?php namespace App\Controllers;

class Detail extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Detail',
			'isi' => 'detail',
		];
		echo view('layouts/wrapper', $data);
	}


	

}