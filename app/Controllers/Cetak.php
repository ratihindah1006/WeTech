<?php

namespace App\Controllers;

use App\Models\CheckoutModel;

class Cetak extends BaseController
{
	protected $checkoutModel;

	public function __construct()
	{
		$this->checkoutModel = new CheckoutModel();
	}

	public function index($id)
	{
		$data = [
			'title' => 'Cetak',
			'isi' => 'UserTransaksi/cetak',
			'checkout' => $this->checkoutModel->edit_checkout($id)
		];
		if ($data['checkout']['bayar'] == 0)
			return redirect()->to(base_url('Riwayat'));
		echo view('layouts/content', $data);
	}
}
