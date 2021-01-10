<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home',
			'isi' => 'home',
		];
		echo view('layouts/wrapper', $data);
	}


	

}