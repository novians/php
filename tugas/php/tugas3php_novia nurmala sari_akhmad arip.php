<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Nilai Mahasiswa</title>
</head>
<style>
    body {
        height: 100%;
    }

    body {
        margin: 0;
        background: linear-gradient(45deg, #49a09d, #5f2c82);
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
</style>

<body>
    <?php
    $mhs1 = ["nim" => "001", "nama" => "novia", "nilai" => 75];
    $mhs2 = ["nim" => "002", "nama" => "nurmala", "nilai" => 79];
    $mhs3 = ["nim" => "003", "nama" => "sari", "nilai" => 75];
    $mhs4 = ["nim" => "004", "nama" => "fatimah", "nilai" => 45];
    $mhs5 = ["nim" => "005", "nama" => "cut", "nilai" => 74];
    $mhs6 = ["nim" => "006", "nama" => "intan", "nilai" => 55];
    $mhs7 = ["nim" => "007", "nama" => "nur", "nilai" => 35];
    $mhs8 = ["nim" => "008", "nama" => "santo", "nilai" => 15];
    $mhs9 = ["nim" => "009", "nama" => "agam", "nilai" => 95];
    $mhs10 = ["nim" => "010", "nama" => "danil", "nilai" => 65];

    $kumpulanmahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5, $mhs6, $mhs7, $mhs8, $mhs9, $mhs10];
    $kumpulanjudul = ["No", "NIM", "Nama", "Nilai", "Keterangan", "Grade", "Predikat"];
    ?>
    <br>
    <h1 class="text-center">Data Nilai Mahasiswa</h1>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <?php
                    foreach ($kumpulanjudul as $judul) { ?>
                        <th><?= $judul ?></th>
                    <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kumpulanmahasiswa as $mahasiswa) {
                    $nim = $mahasiswa["nim"];
                    $nama = $mahasiswa["nama"];
                    $nilai = $mahasiswa["nilai"];

                    $keterangan = ($nilai >= 60) ? "Lulus" : "Gagal";

                    if ($nilai >= 85 && $nilai <= 100) {
                        $grade = "A";
                    } elseif ($nilai >= 70 && $nilai <= 85) {
                        $grade = "B";
                    } elseif ($nilai >= 60 && $nilai <= 70) {
                        $grade = "C";
                    } elseif ($nilai >= 50 && $nilai <= 60) {
                        $grade = "D";
                    } else {
                        $grade = "E";
                    }

                    switch ($grade) {
                        case 'A':
                            $predikat = "Sangat Baik";
                            break;
                        case 'B':
                            $predikat = "Baik";
                            break;
                        case 'C':
                            $predikat = "Cukup";
                            break;
                        case 'D':
                            $predikat = "Kurang";
                            break;

                        default:
                            $predikat = "Buruk";
                            break;
                    }
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $nim ?></td>
                        <td><?= $nama ?></td>
                        <td><?= $nilai ?></td>
                        <td><?= $keterangan ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $predikat ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <?php
                $jumlahmahasiswa = count($kumpulanmahasiswa);
                $kumpulannilai = array_column($kumpulanmahasiswa, "nilai");
                $nilaTerbesar = max($kumpulannilai);
                $nilaiterkecil = min($kumpulannilai);
                $totalnilai = array_sum($kumpulannilai);
                $rata2 = $totalnilai / $jumlahmahasiswa;

                $tfoot = [
                    "Nilai Terbesar" => $nilaTerbesar,
                    "Nilai Terkecil" => $nilaiterkecil,
                    "Rata - Rata" => $rata2,
                    "Jumlah Mahasiswa" => $jumlahmahasiswa,
                ];
                foreach ($tfoot as $key => $value) { ?>
                    <tr>
                        <th colspan="4"><?= $key ?></th>
                        <th colspan="3"><?= $value ?></th>

                    </tr>
                <?php
                }
                ?>
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