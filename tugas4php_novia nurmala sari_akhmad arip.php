<?php
require 'tugas4.php';
//ciptakan object
$a1 = new pegawai('190348376', 'Neur', 'manager', 'islam', 'menikah');
$a2 = new pegawai('3u37632763', 'Ronaldo', 'staff', 'islam', 'belum menikah');
$a3 = new pegawai('0912862562', 'Mohammed Salah', 'asisten manager', 'islam', 'menikah');
$a4 = new pegawai('2862332523', 'Messi', 'staff', 'islam', 'menikah');
$a5 = new pegawai('237273rt3', 'Novia', 'kepala bagian', 'islam', 'belum menikah');
$a6 = new pegawai('283877654', 'Nurmala', 'asisten manager', 'islam', 'belum menikah');
$a7 = new pegawai('0302332e32', 'sari', 'staff', 'islam', 'menikah');
$a8 = new pegawai('022973234', 'cut', 'kepala bagian', 'islam', 'menikah');
$a9 = new pegawai('1973663432', 'intan', 'staff', 'islam', 'menikah');
$a10 = new pegawai('376635222', 'nur', 'manager', 'islam', 'belum menikah');


//use member class

//array associative
$data_pegawai = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Gaji Pegawai</title>
</head>
<style>
    body {
        height: 100%;
    }

    body {
        margin: 0;
        background: linear-gradient(45deg, #191970, #556B2F);
        font-family: sans-serif;
        font-weight: 100;
    }

    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
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

    h1 {
        color: #fff;
    }
</style>
<br>
<h1 class="text-center"><?= Pegawai::perusahaan ?></h1></br>
<div class="">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nip</th>
                <th>Nama Pegawai</th>
                <th>Agama</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Nomor</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan Jabatan</th>
                <th>Zakat Profesi</th>
                <th>Gaji Kotor</th>
                <th>Gaji Bersih</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data_pegawai as $pegawai) {
                $pegawai->mencetak();
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="12">
                    <h5 class="text-center">Data Gaji Pegawai</h5>
                </th>

            </tr>



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