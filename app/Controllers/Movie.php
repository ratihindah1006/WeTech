<?php namespace App\Controllers;
use App\Models\MovieModel;
class Movie extends BaseController
{
	protected $adminModel;
    public function __construct()
    {
        $this->MovieModel = new MovieModel();
    }

	public function index()
	{
		$data = [
			'title' => 'AddMovie',
			'movie' =>$this->MovieModel->get_movie(),
			'isi' => 'AdminMovie/movie',
		];
		echo view('layouts/wrapper', $data);
	}

}