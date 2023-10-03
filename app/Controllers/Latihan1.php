<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_latihan1;

class Latihan1 extends BaseController
{
    public function index()
    {

        echo "Selamat Datang.. selamat belajar Web Programming";
        return view('view-latihan1');
        
    }

    public function penjumlahan($nilai1, $nilai2)
    {
        $model = new Model_Latihan1();
        $data['nilai1'] = $nilai1;
        $data['nilai2'] = $nilai2;
        $data['hasil'] = $model->jumlah($nilai1, $nilai2);
        return view('view-latihan1', $data);
    }
}
