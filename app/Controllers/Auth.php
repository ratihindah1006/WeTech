<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        if (session()->get('status') == 1) {
            return redirect()->to('/Home');
        }
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
                $data = [
                    'user_id' => $row->user_id,
                    'email' => $email,
                    'role_id' => $row->role_id,
                    'status' => 1
                ];
                session()->set($data);

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
        $data['validation'] = \config\services::validation();

        return view('Auth/Register', $data);
    }

    public function saveRegister()
    {
        $rules = [
            'username' => 'required',
            'email' => [
                'rules' => 'required|is_unique[user.email]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'is_unique' => 'Email sudah terdaftar'
                ]
            ],
            'password1' => 'required',
            'password2' => 'required|matches[password1]'
        ];

        if ($this->validate($rules)) {
            $data = [
                'nama' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->userModel->insert($data);
            session()->setFlashdata('daftar', 'Akun berhasil terdaftar');

            return redirect()->to('/Login');
        } else {
            $validator = \Config\Services::validation();
            return redirect()->to('/auth/register')->withInput()->with('validation', $validator);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('Login');
    }
}
