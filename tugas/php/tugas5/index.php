<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>bangun datar</title>
</head>
<style>
    h1 {
        color: #fff;
    }

    body {
        height: 100%;
    }

    body {
        margin: 0;
        background: #49a09d;
        font-family: sans-serif;
        font-weight: 100;
    }

    table {
        width: 800px;
        border-collapse: collapse;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 15px;
        background-color: rgba(255, 255, 255, 0.2);
        color: #fff;
    }

    th {
        text-align: left;
    }

    table {
        border-collapse: collapse;
    }


    table,
    tr,
    td {
        border: none;
    }


    .noBorder {
        border: none !important;
    }

    thead th,
    tfoot th,
    tfoot td {
        background: linear-gradient(to bottom,
                rgba(0, 0, 0, 0.1),
                rgba(0, 0, 0, 0.5));
        border: 3px solid purple;
        border: none;
    }
</style>

<body>
    <?php
    require_once "lingkaran.php";
    require_once "persegipanjang.php";
    require_once "segitiga.php";
    $arrayJudulTable = ["No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling Bidang"];
    ?>
    <br>
    <h1 class="text-center">Data bangun datar</h1></br>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <?php
                    foreach ($arrayJudulTable as $judul) { ?>
                        <th>
                            <?= $judul ?></th>

                    <?php } ?>
                </tr>

            </thead>
            <tbody>
                <?php
                $persegipanjang = new Persegipanjang(20, 15);
                $lingkaran = new Lingkaran(14);
                $segitiga = new Segitiga(15, 12);

                $arrayBentuk = [$persegipanjang, $lingkaran, $segitiga];
                $no = 1;
                foreach ($arrayBentuk as $bentuk) {
                    $namabidang = $bentuk->namabidang();
                    $keterangan = $bentuk->keterangan();
                    $luasbidang = $bentuk->luasbidang();
                    $kelilingbidang = $bentuk->kelilingbidang();

                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $namabidang ?></td>
                        <td><?= $keterangan ?></td>
                        <td><?= $luasbidang ?></td>
                        <td><?= $kelilingbidang ?></td>

                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>