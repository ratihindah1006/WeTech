<?php

namespace App\Controllers;

use App\Models\Moviemodel;

class Homepage extends BaseController
{
	protected $movieModel;
	public function __construct()
	{
		$this->movieModel = new Moviemodel();
	}

	public function index()
	{
		$data = [
			'title' => 'Homepage',
			'isi' => 'homepage',
		];
		$data['m_now'] = $this->movieModel->getMovie(1);
		$data['m_cooming'] = $this->movieModel->getMovie(2);
		echo view('layouts/wrapper', $data);
	}
}
