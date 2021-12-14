<!-- Nama   : Firsta Alina Saputra -->
<!-- NIM    : 20051397085 -->
<!-- Kelas  : 2020 A - D4 Manajemen Informatika -->

<?php
include 'function.php';
$jumlah = new Jumlah();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Komputer</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container" style="margin-top:50px;">
        <div class=" panel-success">
            <div class="panel-body bg-primary">
                <div class="container text-center">
                    <h1><i class="fa fa-shopping-cart"></i> Selamat Datang Di Toko Komputer</h1>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="container text-center">
                    <div class="col">
                        <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#buy"><i class="fa fa-shopping-cart"></i> Beli</button>
                    </div>

                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-body">
                <div class="container text-center">
                    <?php
                    if (isset($_POST['check'])) {
                        $jmlLaptop = $_POST['laptop'];
                        $jmlPc = $_POST['komputer'];
                        if ($jmlLaptop == null) {
                            $jumlah->getJumlah(0, $jmlPc);
                        } elseif ($jmlPc == null) {
                            $jumlah->getJumlah($jmlLaptop, 0);
                        } else {
                            $jumlah->getJumlah($jmlLaptop, $jmlPc);
                        }
                        $jumlah->setHarga();
                        $jumlah->Finaltotal();
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>

    <br>
    <br>

    <div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger" style="border-radius: 5px 5px 0px 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="">Formulir Pembelian</h4>
                </div>
                <div class="modal-body">
                    <form class="form-group" action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                            <input type="number" class="form-control" name="komputer" id="komputer" placeholder="Masukkan Jumlah PC Yang Dibeli *" readOnly>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                            <input type="number" class="form-control" name="laptop" id="laptop" placeholder="Masukkan Jumlah Laptop Yang Dibeli *" readOnly>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" id="btnlaptop" onclick="OnlyLaptop()" class="btn btn-success" style="float:left;"> Laptop </button>
                    <button type="button" id="btnkomputer" onclick="OnlyKomputer()" class="btn btn-success" style="float:left;"> Komputer</button>
                    <button type="button" onclick="Keduanya()" class="btn btn-success" style="float:left;"> Laptop & Komputer</button>
                    <button type="submit" class="btn btn-primary" name="check"><i class="fa fa-check"></i> Cek Total </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
<script type="text/javascript">
    function OnlyLaptop() {
        document.getElementById("laptop").readOnly = false;
        document.getElementById("komputer").readOnly = true;

        document.getElementById("btnkomputer").disabled = false;
        document.getElementById("btnlaptop").disabled = true;
    }

    function OnlyKomputer() {
        document.getElementById("laptop").readOnly = true;
        document.getElementById("komputer").readOnly = false;

        document.getElementById("btnkomputer").disabled = true;
        document.getElementById("btnlaptop").disabled = false;
    }

    function Keduanya() {
        document.getElementById("laptop").readOnly = false;
        document.getElementById("komputer").readOnly = false;

        document.getElementById("btnkomputer").disabled = false;
        document.getElementById("btnlaptop").disabled = false;
    }

    function exit() {
        document.getElementById("laptop").readOnly = true;
        document.getElementById("komputer").readOnly = true;
    }
</script>