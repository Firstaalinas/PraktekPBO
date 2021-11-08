<!-- Nama   : Firsta Alina Saputra -->
<!-- NIM    : 20051397085 -->
<!-- Kelas  : 2020 A - D4 Manajemen Informatika -->

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="No 1.css">
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal 1</h2>

<?php

class Orang{
    protected $nama,$umur;

    public function __construct($nama,$umur){
    $this->nama = $nama;
    $this->umur = $umur;
    }
}

class Dosen extends Orang{
    private $nip;
    
    public function __construct($nama, $umur, $nip){
    $this->nip = $nip;
    parent::__construct($nama, $umur);    
    }

    public function hasil(){
        return $this->nama . ' berumur ' . $this->umur. ' dengan NIP ' . $this->nip;
    }
}

$dosen1 = new Dosen('Firsta', 20, 20051397085); 
$dosen2 = new Dosen('Alina', 30, 20051397086);
$dosen3 = new Dosen('Saputra', 40, 20051397087);

echo $dosen1->hasil();
echo '<br> <br>';
echo $dosen2->hasil();
echo '<br> <br>';
echo $dosen3->hasil();
echo '<br> <br>';

?>

</div>
</body>
</html>