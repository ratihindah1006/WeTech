<?php namespace App\Controllers;
use App\Models\UserModel;

class Terdaftar extends BaseController
{
	protected $adminModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
	public function index()
	{
		$data = [
			'title' => 'User Terdaftar',
			'user' =>$this->userModel->get_user(),
			'isi' => 'user/terdaftar',
		];
		echo view('layout/wrapper', $data);
	}

	public function addUser()
	{
		$data = [
			'title' => 'Add User',
			'isi' => 'user/addTerdaftar',
		];
		echo view('layout/wrapper', $data);
	}

	public function save_add()
	{
					
		$data=[
			
			'nama' => $this->request->getPost('nama'),
			'email' => $this->request->getPost('email'),
			'role_id' => $this->request->getPost('role_id'),				
			'is_active' =>$this->request->getPost('is_active'), 
			'date_created' =>$this->request->getPost('date_created'),

		];
		$this->userModel->insert_user($data);
		session()->setFlashdata('success','user berhasil ditambahkan');
		return redirect()->to(base_url('terdaftar'));

		
	}
	public function editUser($user_id)
	{
		$data = [
			'title' => 'Edit User',
			'user' => $this->userModel->edit_user($user_id),
			'isi' => 'user/editTerdaftar',
		];
		echo view('layout/wrapper', $data);
	}
	public function updateUser($user_id)
	{
					
		$data=[
			
			'nama' => $this->request->getPost('nama'),
			'email' => $this->request->getPost('email'),
			'role_id' => $this->request->getPost('role_id'),				
			'is_active' =>$this->request->getPost('is_active'), 
			'date_created' =>$this->request->getPost('date_created'),

		];
		$this->userModel->update_user($data, $user_id);
		session()->setFlashdata('success','user berhasil diupdate');
		return redirect()->to(base_url('terdaftar'));

		
	}


	public function deleteUser($user_id)
	{
		{
			
			$this->userModel->delete_user($user_id);
			session()->setFlashdata('success','user berhasil dihapus');
			return redirect()->to(base_url('terdaftar'));
		}

	}

	

}