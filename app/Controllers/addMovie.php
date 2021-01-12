<?php namespace App\Controllers;

class addMovie extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'AddMovie',
			'isi' => 'AdminMovie/addMovie',
		];
		echo view('layout/wrapper', $data);
	}



}