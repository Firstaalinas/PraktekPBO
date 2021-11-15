<!-- Nama   : Firsta Alina Saputra -->
<!-- NIM    : 20051397085 -->
<!-- Kelas  : 2020A - D4 Manajemen Informatika -->
<!-- Praktikum ke 5 -->

<?php

class Pegawai {
    protected $nama;
    
    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getGaji(){
        return Manajer::getGaji();
    }

    public function getKendaraan(){
        return Kurir::getKendaraan();
    }
}

class Manajer extends Pegawai {
    private $gaji;

    public function __construct($nama, $gaji){
        $this->gaji = $gaji;
        parent::__construct($nama);
    }

    public function getGaji(){
        return $this->gaji;
    }
}

class Kurir extends Pegawai {
    private $kendaraan;

    public function __construct($nama, $kendaraan){
        $this->kendaraan = $kendaraan;
        parent::__construct($nama);
    }

    public function getKendaraan(){
        return $this->kendaraan;
    }
}

class Info{
    public static function info(Pegawai $pegawai){
        return 'Manajer ' . $pegawai->getNama() . ' mendapatkan Gaji Rp. ' . number_format($pegawai->getGaji());
    }

    public static function infoKurir(Pegawai $pegawai){
        return 'Kurir ' . $pegawai->getNama() . ' mendapatkan Gaji Rp. ' . number_format($pegawai->getKendaraan());
    }
}

$manajer = new Manajer ('Firsta', 50000000);
$kurir = new Kurir ('Alina', 10000000);