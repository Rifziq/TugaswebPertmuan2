<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
        }
        .card {
            border-radius: 15px;
            margin-bottom: 30px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.03);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.2em;
            text-align: center;
        }
        .turbo, .irit, .sensor {
            padding: 10px;
            background-color: #f0f8ff;
            border-left: 5px solid #007bff;
            margin-bottom: 10px;
        }
        .badge-custom {
            background-color: #ff5722;
            color: white;
            font-size: 1em;
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Informasi Mobil</h1>
    <div class="row justify-content-center">
        <?php 
            class Mobil {
                public $nama;
                public $merk;
            
                public function __construct($nama, $merk) {
                    $this->nama = $nama;
                    $this->merk = $merk;
                }
            
                public function cetakInfo() {
                    echo "<h5 class='card-title'>Nama Mobil: <span class='badge-custom'>" . $this->nama . "</span></h5>";
                    echo "<p>Merk: <span class='badge bg-info'>" . $this->merk . "</span></p>";
                }
            }
            
            class MobilSport extends Mobil {
                public $kecepatan;
            
                public function __construct($nama, $merk, $kecepatan) {
                    parent::__construct($nama, $merk); 
                    $this->kecepatan = $kecepatan;
                }
            
                public function turbo() {
                    echo "<div class='turbo'>Mobil ini memiliki kecepatan turbo sebesar " . $this->kecepatan . " km/jam.</div>";
                }
            }
            
            class CityCar extends Mobil {
                public $model;
            
                public function __construct($nama, $merk, $model) {
                    parent::__construct($nama, $merk); 
                    $this->model = $model;
                }
            
                public function irit() {
                    echo "<div class='irit'>City car ini sangat irit bahan bakar.</div>";
                }
            
                public function sensor() {
                    echo "<div class='sensor'>City car ini dilengkapi dengan sensor parkir.</div>";
                }
            }
            
            echo "<div class='col-md-5'>";
            echo "<div class='card'>";
            echo "<div class='card-header'>Mobil Sport</div>";
            echo "<div class='card-body'>";
            $mobilSport = new MobilSport("McLaren P1 GTR", "McLaren",  322);
            $mobilSport->cetakInfo();
            $mobilSport->turbo();
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
            echo "<div class='col-md-5'>";
            echo "<div class='card'>";
            echo "<div class='card-header'>City Car</div>";
            echo "<div class='card-body'>";
            $cityCar = new CityCar("Sirion", "Daihatsu", "Model A");
            $cityCar->cetakInfo();
            $cityCar->irit();
            $cityCar->sensor();
            echo "</div>";
            echo "</div>";
            echo "</div>";
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
