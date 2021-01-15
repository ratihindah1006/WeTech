<?php

namespace App\Controllers;

use App\Models\CheckoutModel;

class Checkout_Berhasil extends BaseController
{
	protected $checkoutModel;

	public function __construct()
	{
		$this->checkoutModel = new CheckoutModel();
	}

	public function index($id)
	{
		$data = [
			'isi' => 'checkout_berhasil',
			'checkout' => $this->checkoutModel->edit_checkout($id)
		];
		echo view('layouts/wrapper', $data);
	}
}
