<?php

namespace App\Controllers;

use App\Models\CheckoutModel;

class Riwayat extends BaseController
{
	protected $checkoutModel;

	public function __construct()
	{
		$this->checkoutModel = new CheckoutModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Riwayat Beli',
			'isi' => 'UserTransaksi/riwayat',
			'checkout' => $this->checkoutModel->findAll()
		];
		echo view('layouts/wrapper', $data);
	}
}
