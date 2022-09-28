<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data gaji pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <br>
    <h1 style="text-align: center">Data Gaji Pegawai</h1>
    <div class="container px-5 my-5">
        <form id="contactForm" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" name="namapegawai" id="namaPegawai" type="text" placeholder="Nama pegawai" data-sb-validations="required" />
                <label for="namaPegawai">Nama pegawai</label>
                <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama pegawai is required.</div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="agama" id="agama" aria-label="Agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konhucu">Konhucu</option>
                </select>
                <label for="agama">Agama</label>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="manager" id="manager" type="radio" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="asisten" id="asisten" type="radio" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="kabag" id="kabag" type="radio" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="kabag">Kabag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="staff" id="staff" type="radio" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="menikah" id="menikah" type="radio" name="status" data-sb-validations="" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="belummenikah" id="belumMenikah" type="radio" name="status" data-sb-validations="" />
                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="jumlahanak" id="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
                <label for="jumlahAnak">Jumlah Anak</label>
                <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
            </div>
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg " name="proses" type="submit">Submit</button>

            </div>
        </form>
    </div>

    <?php
    error_reporting();
    if (isset($_POST["proses"])) {
        $namapegawai = $_POST["namapegawai"];
        $agama = $_POST["agama"];
        $jabatan = $_POST["jabatan"];
        $status = $_POST["status"];
        $jumlahanak = $_POST["jumlahanak"];

        switch ($jabatan) {
            case 'manager':
                $gapok = 20000000;
                break;
            case 'asisten':
                $gapok = 15000000;
                break;
            case 'kabag':
                $gapok = 10000000;
                break;
            case 'staff':
                $gapok = 5000000;
                break;


            default:
                $gapok = 0;
                break;
        }

        $tunjanganjabatan = 20 * $gapok / 100;
        if ($status == "menikah" && $jumlahanak <= 2) {
            $tunjangankeluarga =  5 * $gapok / 100;
        } elseif ($status == "menikah" && $jumlahanak <= 5) {
            $tunjangankeluarga = 10 * $gapok / 100;
        } elseif ($status == "menikah" && $jumlahanak > 5) {
            $tunjangankeluarga = 15 * $gapok / 100;
        } else {
            $tunjangankeluarga = 0;
        }
        $gajikotor = $gapok + $tunjanganjabatan + $tunjangankeluarga;
        $zakatprofesi = ($agama == "Islam" && $gajikotor >= 6000000) ? (2.5 * $gajikotor) / 100 : 0;
        $takehomepay = $gajikotor - $zakatprofesi;
    ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Gaji Pegawai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <p>Nama Pegawai: <?= $namapegawai ?></p>
                            <p>Agama: <?= $agama ?></p>
                            <p>Jabatan: <?= $jabatan ?></p>
                            <p>Status: <?= $status ?></p>
                            <p>Jumlah Anak: <?= $jumlahanak ?></p>
                            <p>Gaji Pokok: <?= "Rp." . number_format($gapok) ?></p>
                            <p>Tunjangan Jabatan: <?= "Rp." . number_format($tunjanganjabatan) ?></p>
                            <p>Tunjangan keluarga: <?= "Rp." . number_format($tunjangankeluarga) ?></p>
                            <p>Zakat Profesi: <?= "Rp." . number_format($zakatprofesi) ?></p>
                            <p>Gaji Kotor: <?= "Rp." . number_format($gajikotor) ?></p>
                            <p>Take Home Pay: <?= "Rp." . number_format($takehomepay) ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">ok</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }

        ?>







        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
            const modal = new bootstrap.Modal("#exampleModal")
            modal.show()
        </script>


</body>

</html>