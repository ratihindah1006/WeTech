<?php namespace App\Controllers;

class Homepage extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Homepage',
			'isi' => 'homepage',
		];
		echo view('layouts/wrapper', $data);
	}
	

}