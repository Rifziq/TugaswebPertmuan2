<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
        }
        .card {
            border-radius: 10px;
            background-color: #fff;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 15px 0;
        }
        .card-body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .highlight {
            color: #dc3545;
            font-weight: bold;
        }
        .highlight-kip {
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Mahasiswa</h1>

        <div class="row justify-content-center">
            <?php
            class Mahasiswa {
                public $nama;
                public $nim;
                public $jurusan;

                public function __construct($nama, $nim, $jurusan) {
                    $this->nama = $nama;
                    $this->nim = $nim;
                    $this->jurusan = $jurusan;
                }

                public function cetakInfo() {
                    echo "<p>Nama: <span class='highlight'>$this->nama</span></p>";
                    echo "<p>NIM: <span class='highlight'>$this->nim</span></p>";
                    echo "<p>Jurusan: <span class='highlight'>$this->jurusan</span></p>";
                }
            }

            class MahasiswaReguler extends Mahasiswa {
                public $biayaKuliah;

                public function __construct($nama, $nim, $jurusan, $biayaKuliah) {
                    parent::__construct($nama, $nim, $jurusan);
                    $this->biayaKuliah = $biayaKuliah;
                }

                public function cetakInfo() {
                    parent::cetakInfo();
                    echo "<p>Biaya Kuliah: <span class='highlight'>Rp. $this->biayaKuliah</span></p>";
                }
            }

            class MahasiswaKIP extends Mahasiswa {
                public $bantuanKIP;

                public function __construct($nama, $nim, $jurusan, $bantuanKIP) {
                    parent::__construct($nama, $nim, $jurusan);
                    $this->bantuanKIP = $bantuanKIP;
                }

                public function tunjanganKIP() {
                    echo "<p class='highlight-kip'>Mahasiswa ini menerima bantuan KIP sebesar: Rp. $this->bantuanKIP</p>";
                }

                public function cetakInfo() {
                    parent::cetakInfo();
                    echo "<p>Bantuan KIP: <span class='highlight-kip'>Rp. $this->bantuanKIP</span></p>";
                }
            }

            $mahasiswaReguler = new MahasiswaReguler("Rifziq", "232300043", "Teknik Informatika", 8000000);
            $mahasiswaKIP = new MahasiswaKIP("Rizaldi", "232300044", "Sistem Informasi", 4800000);

            // Mahasiswa Reguler
            echo '<div class="col-md-5 mb-4">';
            echo '<div class="card shadow">';
            echo '<div class="card-header">Mahasiswa Reguler</div>';
            echo '<div class="card-body">';
            $mahasiswaReguler->cetakInfo();
            echo '</div>';
            echo '</div>';
            echo '</div>';

            // Mahasiswa KIP
            echo '<div class="col-md-5 mb-4">';
            echo '<div class="card shadow">';
            echo '<div class="card-header bg-success text-white">Mahasiswa KIP</div>';
            echo '<div class="card-body">';
            $mahasiswaKIP->cetakInfo();
            $mahasiswaKIP->tunjanganKIP();
            echo '</div>';
            echo '</div>';
            echo '</div>';
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
