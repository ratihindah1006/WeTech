<?php

namespace App\Controllers;

use App\Models\CheckoutModel;
use App\Models\Moviemodel;

class Checkout extends BaseController
{
	protected $adminModel;
	protected $movieModel;
	protected $checkoutModel;

	public function __construct()
	{
		$this->movieModel = new Moviemodel();
		$this->checkoutModel = new CheckoutModel();
	}

	public function index($id)
	{
		$data = [
			'title' => 'Checkout',
			'isi' => 'checkout',
		];
		$data['movie'] = $this->movieModel->edit_movie($id);
		return view('layouts/wrapper', $data);
	}

	public function addCheckout()
	{
		$data = [
			'title' => 'checkout',
			'isi' => 'AdminBayar/bayar',
		];
		echo view('layout/wrapper', $data);
	}
	public function save_checkout()
	{

		$data = [


			'title' => $this->request->getPost('title'),
			'tanggal' => $this->request->getPost('tanggal'),
			'jam' => $this->request->getPost('jam'),
			'total_bayar' => $this->request->getPost('total_bayar'),
			'bayar' => $this->request->getPost('bayar'),


		];
		$this->checkoutModel->insert_checkout($data);
		session()->setFlashdata('success', 'checkout berhasil ');
		return redirect()->to(base_url('homepage'));
	}
	public function editCheckout($id_checkout)
	{
		$data = [
			'title' => 'EditCheckout',
			'checkout' => $this->checkoutModel->edit_checkout($id_checkout),
			'isi' => 'AdminBayar/verifBayar',
		];
		echo view('layout/wrapper', $data);
	}

	public function updateCheckout($id_checkout)
	{
		$data = [


			'title' => $this->request->getPost('title'),
			'tanggal' => $this->request->getPost('tanggal'),
			'jam' => $this->request->getPost('jam'),
			'total_bayar' => $this->request->getPost('total_bayar'),
			'bayar' => $this->request->getPost('bayar'),


		];
		$this->checkoutModel->update_checkout($data, $id_checkout);
		session()->setFlashdata('success', 'update berhasil ');
		return redirect()->to(base_url('checkout'));
	}

	public function deleteCheckout($id_checkout)
	{


		$this->checkoutModel->delete_checkout($id_checkout);
		session()->setFlashdata('success', 'checkout dibatalkan');
		return redirect()->to(base_url('checkout'));
	}

	public function save()
	{
		$data = [
			'user_id' => session()->get('user_id'),
			'title' => $this->request->getVar('judul'),
			'tanggal' => $this->request->getVar('tanggal'),
			'jam' => $this->request->getVar('jam'),
			'total_bayar' => 40000,
			'bayar' => 0,
			'is_active' => 1
		];
		$this->checkoutModel->insert($data);
		$tmp['id_checkout'] = $this->checkoutModel->insertID();
		session()->set($tmp);
		return redirect()->to('/Checkout_Berhasil/' . $tmp['id_checkout']);
	}
}
