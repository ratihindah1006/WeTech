<?php

namespace App\Controllers;

use App\Models\CheckoutModel;

class Bukti extends BaseController
{
	protected $checkoutModel;

	public function __construct()
	{
		$this->checkoutModel = new CheckoutModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Bukti',
			'isi' => 'bukti',
		];
		echo view('layouts/wrapper', $data);
	}

	public function save()
	{
		if ($this->request->getMethod() !== 'post') {
			return redirect()->to(base_url('Bukti'));
		}
		$validated = $this->validate([
			'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
		]);
		if ($validated == FALSE) {
			return $this->index();
		} else {
			$bukti = $this->request->getFile('file_upload');
			$newName = session()->get('user_id') . "_" . $bukti->getName();
			$bukti->move(ROOTPATH . 'public/uploads/bukti', $newName);

			$data = [
				'bukti' => $newName
			];


			$this->checkoutModel->update_checkout($data, session()->get('id_checkout'));
			return redirect()->to(base_url('Include_Invoice'));
		}
	}
}
