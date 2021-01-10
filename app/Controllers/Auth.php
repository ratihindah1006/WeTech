<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data['title'] = "Bioskop | Login";
        $data['validation'] = \config\services::validation();

        return view('Auth/Login', $data);
    }

    public function login()
    {
        $rules = [
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'valid_email' => 'Format email salah'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $email      = $this->request->getPost('email');
            $password   = $this->request->getPost('password');

            $row = $this->userModel->getLogin($email);

            if ($row == NULL) {
                return redirect()->to('/Login')->withInput()->with('pesan', 'Email Belum terdaftar');
            }
            if (password_verify($password, $row->password)) {
                return redirect()->to(base_url('Home'));
            } else {
                session()->setFlashdata('pesan', 'Password Salah');
                return redirect()->to(base_url('Auth'));
            }
        } else {
            $validator = \Config\Services::validation();
            return redirect()->to('/auth/register')->withInput()->with('validation', $validator);
        }
    }

    public function register()
    {
        $data['title'] = "Bioskop | Register";
        return view('Auth/Register', $data);
    }
}
