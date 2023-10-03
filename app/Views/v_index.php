<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/stylebuku.css">

</head>

<body>
    <div id="wrapper">
        <section>
            <h1><?= $judul ?></h1>
            <p style="text-align: justify;">Pada pengertian CodeIgniter di atas
                tadi dijelaskan bahwa CodeIgniter menggunakan metode MVC. Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih
                jauh dalam belajar CodeIgniter.</p>
            <p>MVC adalah teknik atau konsep yang memisahkan
                komponen utama menjadi tiga komponen yaitu model, view, dan
                controller.</p>
            <ol type="a">
                <li><strong>Model</strong></li>
                <p style="text-align: justify;">Model adalah kelas yang merepresentasikan atau
                    memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga
                    dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan
                    pengolahan atau manipulasi database. Seperti misalnya mengambil data
                    dari database, menginput dan pengolahan database lainnya. Semua
                    instruksi atau fungsi yang berhubung dengan pengolahan database
                    ditempatkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi
                    untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan
                    objek lingkaran sebagai kelas model.</p>
                <p style="text-align: justify;">Sebagai catatan, semua model harus disimpan di
                    dalam folder <code>app/Models</code>.</p>
                <li><strong>View</strong></li>
                <p style="text-align: justify;">View merupakan bagian yang menangani halaman antarmuka pengguna
                    atau halaman yang ditampilkan kepada pengguna (pada browser). Tampilan
                    dari antarmuka pengguna dikumpulkan pada view untuk memisahkannya
                    dari controller dan model sehingga memudahkan perancang web dalam
                    melakukan pengembangan tampilan halaman situs web.</p>
                <li><strong>Controller</strong></li>
                <p style="text-align: justify;">Controller merupakan kumpulan instruksi aksi yang
                    menghubungkan model dan view, jadi pengguna tidak akan berhubungan
                    dengan model secara langsung, intinya data yang tersimpan di
                    database (model) diambil oleh controller dan kemudian controller
                    pula yang menampilkannya ke view. Jadi controller adalah yang mengolah
                    instruksi.</p>
                <p style="text-align: justify;">Dari penjelasan tentang model, view, dan controller
                    di atas, dapat disimpulkan bahwa controller sebagai penghubung antara view
                    dan model. Misalnya pada aplikasi yang menampilkan data dengan
                    menggunakan metode konsep MVC, controller memanggil instruksi pada
                    model yang mengambil data dari database, kemudian controller yang
                    meneruskannya ke view untuk ditampilkan. Jadi jelas dan sangat mudah dalam pengembangan aplikasi dengan cara MVC ini karena
                    perancang web atau pengembang front-end tidak perlu lagi berhubungan
                    dengan controller, dia hanya perlu berhubungan dengan view untuk
                    mendesain tampilan aplikasi, karena pengembang back-end yang menangani bagian
                    controller dan modelnya. Jadi pembagian tugas pun
                    menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan
                    cepat dan terstruktur.</p>
            </ol>
        </section>
    </div>
</body>

</html>