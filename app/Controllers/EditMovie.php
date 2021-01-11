<?php namespace App\Controllers;

class EditMovie extends BaseController
{

	public function index($movie_id)
	{
		$data = [
			'title' => 'EditMovie',
			'isi' => 'AdminMovie/editMovie',
		];
		echo view('layouts/wrapper', $data);
	}



}