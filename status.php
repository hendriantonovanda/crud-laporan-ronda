<?php
include "koneksi.php";
$nama = "";
$wilayah = "";
$catatan = "";
$waktu = "";
$sukses = "";
$error = "";

if (isset($_POST['kirim'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $wilayah = htmlspecialchars($_POST['wilayah']);
    $catatan = htmlspecialchars($_POST['catatan']);
    $waktu = htmlspecialchars($_POST['waktu']);

    if ($nama && $wilayah && $catatan && $waktu) {

        $query = "insert into piket 
                  (nama_petugas, wilayah_dijaga, catatan_kejadian, waktu_ronda) 
                  values 
                  ('$nama','$wilayah','$catatan','$waktu')";
        $sql = mysqli_query($koneksi, $query);
        if (!$sql) {
            $error = "DATA GAGAL";
        } else {
            $sukses = "PENGISIAN DATA BERHASIL";
        }
    } else {
        $error = "SILAHKAN ISI SEMUA DATA";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATUS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: black;
            color: white;
        }

        tr {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="p-3 flex-grow-1">
        <div class="card bg-light mx-auto" style="max-width: 360px">
            <div class="card bg-dark text-white">
                <div class="card-body text-white bg-dark">
                    <h4 class="card-title text-center">
                        STATUS PENGIRIMAN
                    </h4>
                    <hr>
                    <?php
                    if ($sukses) {
                        ?>
                        <div class="alert alert-success text-center d-flex align-items-center justify-content-center"
                            role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle me-2" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                <path
                                    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05">
                                </path>
                            </svg>
                            <?php echo $sukses ?>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="alert alert-danger text-center d-flex align-items-center justify-content-center"
                            role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-exclamation-triangle me-2" viewBox="0 0 16 16">
                                <path
                                    d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z">
                                </path>
                                <path
                                    d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z">
                                </path>
                            </svg>
                            <?php echo $error ?>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="d-grid gap-2 mt-2">
                        <a href="index.php"
                            class="btn btn-outline-light bg-gradient d-flex align-items-center justify-content-center"
                            role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-in-left me-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z">
                                </path>
                            </svg>KEMBALI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>