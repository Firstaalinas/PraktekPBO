<!--Nama    : Firsta Alina Saputra -->
<!--Nim     : 20051397085 -->
<!--Kelas   : 2020 A D4 Manajemen Informatika -->
<!--Praktikum ke 3 -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css"> 
    <title>Praktikum 3 PBO</title>
</head>
<body>
    <div class = "container">
    <?php
//Tabungan
class Tabungan{
    protected $saldo;
}

//Pengambilan Saldo;
class PengambilanUang extends Tabungan {
    private $proteksi;

    public function __construct($saldo){
        $this->saldo = $saldo;
        $this->proteksi = 1000;
    }

    public function getSaldo(){
        return 'Uang yang ditabung : ' .$this->saldo . '<br> Uang yang diproteksi : ' .$this->proteksi;
}

    public function ambilUang($jumlah){
        if ($jumlah === 4500) {
            return 'Uang yang akan diambil : '.$jumlah . ' false <br> Saldo Sekarang : '.$this->saldo;
        }
        else {
            return 'Uang yang akan diambil : '.$jumlah . ' true <br> Saldo sekarang : '. $this->saldo -= $jumlah;
        }
    }
}

// Run Program
$tabungan = new PengambilanUang(5000);
echo $tabungan->getSaldo();
echo '<br> -------------------------------- <br>';
echo $tabungan->ambilUang(4500);
echo '<br> -------------------------------- <br>';
echo $tabungan->ambilUang(2500);

?>
    </div>

</body>
</html>

