<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_latihan1;

class Latihan1 extends BaseController
{
    public function index()
    {
    // echo "Selamat Datang.. selamat belajar Web Programming";
    // $this->load->view('view-latihan1');
    echo "Selamat Datang.. selamat belajar Web Programming";
    return view('view-latihan1');
    }

    public function penjumlahan($nilai1, $nilai2)
    {
    // $this->load->model('Model_latihan1');
    // $data['nilai1'] = $n1;
    // $data['nilai2'] = $n2;
    // $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
    // $this->load->view('view-latihan1', $data);
        $model = new Model_Latihan1();
        $data['nilai1'] = $nilai1;
        $data['nilai2'] = $nilai2;
        $data['hasil'] = $model->jumlah($nilai1, $nilai2);
        return view('view-latihan1', $data);
    }
}
