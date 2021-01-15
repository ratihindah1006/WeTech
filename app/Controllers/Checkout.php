<?php namespace App\Controllers;
use App\Models\CheckoutModel;

class Checkout extends BaseController
{
	protected $adminModel;
    public function __construct()
    {
        $this->checkoutModel = new CheckoutModel();
    }

	public function index()
	{
		$data = [
			'title' => 'Checkout',
			'checkout' =>$this->checkoutModel->get_checkout(),
			'isi' => 'AdminBayar/bayar',
		];
		echo view('layouts/wrapper', $data);
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
							
		$data=[
			
			
			'title' => $this->request->getPost('title'),
			'tanggal' => $this->request->getPost('tanggal'),
			'jam' =>$this->request->getPost('jam'), 
			'total_bayar' => $this->request->getPost('total_bayar'),
			'bayar' => $this->request->getPost('bayar'),
			 

		];
		$this->checkoutModel->insert_checkout($data);
		session()->setFlashdata('success','checkout berhasil ');
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
		$data=[
			
			
			'title' => $this->request->getPost('title'),
			'tanggal' => $this->request->getPost('tanggal'),
			'jam' =>$this->request->getPost('jam'), 
			'total_bayar' => $this->request->getPost('total_bayar'),
			'bayar' => $this->request->getPost('bayar'),
			 

		];
		$this->checkoutModel->update_checkout($data, $id_checkout);
		session()->setFlashdata('success','update berhasil ');
		return redirect()->to(base_url('checkout'));
	}

	public function deleteCheckout($id_checkout)
	{
		
			
			$this->checkoutModel->delete_checkout($id_checkout);
			session()->setFlashdata('success','checkout dibatalkan');
			return redirect()->to(base_url('checkout'));
		}
	

}
