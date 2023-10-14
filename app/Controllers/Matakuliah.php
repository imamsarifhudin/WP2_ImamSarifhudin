<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use CodeIgniter\Controller;

class Matakuliah extends BaseController
{
    public function index()
    {
        return view('view-form-matakuliah');
    }

    public function cetak()
    {

        //define validation
        $validation = $this->validate([
            'kode' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Kode Matakuliah Harus diisi',
                    'min_length' => 'Kode terlalu pendek'
                ]
            ],
            'nama'    => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama Matakuliah Harus diisi',
                    'min_length' => 'Nama terlalu pendek'
                ]
            ],
            'sks'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Wajib pilih Sks nya',
                ]
            ],
        ]);

        if (!$validation) {
            return view('view-form-matakuliah', [
                'validation' => $this->validator
            ]);
        } else {
            $data = [
                'kode' => $this->request->getPost('kode'),
                'nama' => $this->request->getPost('nama'),
                'sks' => $this->request->getPost('sks')
            ];
            return view('view-data-matakuliah', $data);
        }
    }

}
