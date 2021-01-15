<?php namespace App\Controllers;
use App\Models\Moviemodel;
class Movie extends BaseController
{
	protected $adminModel;
    public function __construct()
    {
        $this->movieModel = new Moviemodel();
    }

	public function index()
	{
		$data = [
			'title' => 'MovieList',
			'movie' =>$this->movieModel->get_movie(),
			'isi' => 'AdminMovie/movie',
		];
		echo view('layout/wrapper', $data);
	}

	public function addMovie()
	{
		$data = [
			'title' => 'AddMovie',
			'isi' => 'AdminMovie/addMovie',
		];
		echo view('layout/wrapper', $data);
	}

	public function save_add()
	{	
		
					
		$data=[
			
			'img' => $this->request->getPost('img'),
			'title' => $this->request->getPost('title'),
			'genre' => $this->request->getPost('genre'),
			'duration' =>$this->request->getPost('duration'), 
			'released_at' => $this->request->getPost('released_at'),
			'producer' => $this->request->getPost('producer'),
			'sutradara' =>$this->request->getPost('sutradara'), 
			'cast' => $this->request->getPost('cast'),
			'sinopsis' =>$this->request->getPost('sinopsis'),
			'is_active' =>$this->request->getPost('is_active'), 

		];
		$this->movieModel->insert_movie($data);
		session()->setFlashdata('success','film berhasil ditambahkan');
		return redirect()->to(base_url('movie'));

		
	}
	public function editMovie($movie_id)
	{
		$data = [
			'title' => 'EditMovie',
			'movie' => $this->movieModel->edit_movie($movie_id),
			'isi' => 'AdminMovie/editMovie',
		];
		echo view('layout/wrapper', $data);
	}

	public function updateMovie($movie_id)
	{
		$data=[
			
			'img' => $this->request->getPost('img'),
			'title' => $this->request->getPost('title'),
			'genre' => $this->request->getPost('genre'),
			'duration' =>$this->request->getPost('duration'), 
			'released_at' => $this->request->getPost('released_at'),
			'producer' => $this->request->getPost('producer'),
			'sutradara' =>$this->request->getPost('sutradara'), 
			'cast' => $this->request->getPost('cast'),
			'sinopsis' =>$this->request->getPost('sinopsis'),
			'is_active' =>$this->request->getPost('is_active'), 

		];
		$this->movieModel->update_movie($data, $movie_id);
		session()->setFlashdata('success','film berhasil diupdate');
		return redirect()->to(base_url('movie'));
	}

	public function deleteMovie($movie_id)
	{
		{
			
			$this->movieModel->delete_movie($movie_id);
			session()->setFlashdata('success','film berhasil dihapus');
			return redirect()->to(base_url('movie'));
		}

	}

	


}