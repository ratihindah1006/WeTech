<?php namespace App\Controllers;

class EditMovie extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Edit Movie',
			'isi' => 'AdminMovie/editMovie',
		];
		echo view('layouts/wrapper', $data);
	}



}