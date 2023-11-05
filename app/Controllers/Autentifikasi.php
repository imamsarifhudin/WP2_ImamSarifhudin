<?php

namespace App\Controllers;

class Autentifikasi extends BaseController
{
    public function index()
    {
        // If the user is already logged in, redirect them to the user page
        if ($this->session->get('email')) {
            return redirect()->to('user');
        }

        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required',
        ], [
            'email' => [
                'required' => 'Email Harus diisi!!',
                'valid_email' => 'Email Tidak Benar!!',
            ],
            'password' => [
                'required' => 'Password Harus diisi',
            ],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $data['judul'] = 'Login';
            $data['user'] = '';

            return view('templatess/aute_header', $data)
                ->view('autentifikasi/login')
                ->view('templatess/aute_footer');
        } else {
            return $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $modelUser = new \App\Models\ModelUser();
        $user = $modelUser->where('email', $email)->first();

        if ($user) {
            if ($user['is_active'] == 1 && password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set($data);

                if ($user['role_id'] == 1) {
                    return redirect()->to('admin');
                } else {
                    if ($user['image'] == 'default.jpg') {
                        $this->session->setFlashdata('pesan', '<div class="alert alert-info alert-message" role="alert">Silahkan Ubah Profile Anda untuk Ubah Photo Profil</div>');
                    }
                    return redirect()->to('user');
                }
            } else {
                $this->session->setFlashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                return redirect()->to('autentifikasi');
            }
        } else {
            $this->session->setFlashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            return redirect()->to('autentifikasi');
        }
    }
}
