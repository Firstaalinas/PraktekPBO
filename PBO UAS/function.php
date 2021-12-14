<!-- Nama   : Firsta Alina Saputra -->
<!-- NIM    : 20051397085 -->
<!-- Kelas  : 2020 A - D4 Manajemen Informatika -->

<?php

class Produk
{
    public $pc;
    public $laptop;
    public $jmlLaptop;
    public $jmlPc;
    public $hargaLaptop;
    public $hargaPc;
    public $totalSeluruh;
    public $totalHargaPC;
    public $totalHargaLaptop;

    function __construct()
    {
        $this->hargaPc = 12000000;
        $this->hargaLaptop = 8000000;
    }
}


class Jumlah extends Produk
{
    public function getJumlah($jmlLaptop, $jmlPc)
    {
        $this->jmlLaptop = $jmlLaptop;
        $this->jmlPC = $jmlPc;
    }

    public function setHarga()
    {
        $this->totalHargaPC = $this->hargaPc * $this->jmlPC;
        $this->totalHargaLaptop = $this->hargaLaptop * $this->jmlLaptop;
        $this->totalSeluruh = $this->totalHargaPC + $this->totalHargaLaptop;
    }

    public function Finaltotal()
    {
        echo "================= Struk Total Pembelian =================";
        echo "<br>";
        echo "Harga 1 PC = Rp. " . $this->hargaPc . ",-";
        echo "<br>";
        echo "Jumlah PC yang di beli = " . $this->jmlPC . " Set";
        echo "<br>";
        echo "Total Harga PC = Rp. " . $this->totalHargaPC . ",-";
        echo "<br>";
        echo "<br>";
        echo "Harga 1 Laptop = Rp. " . $this->hargaLaptop . ",-";
        echo "<br>";
        echo "Jumlah Laptop yang di beli = " . $this->jmlLaptop . " Set";
        echo "<br>";
        echo "Total Harga Laptop = Rp. " . $this->totalHargaLaptop . ",-";
        echo "<br><br>";
        echo "Total Keseluruhan = Rp. " . $this->totalSeluruh . ",-";
        echo "<br>";
        echo "========================================================";
        echo "<br>";
        echo "<br>";
    }
}
