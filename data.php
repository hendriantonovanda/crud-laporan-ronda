<?php
include "koneksi.php";
if (isset($_GET["op"])) {
    $op = $_GET["op"];
} else {
    $op = "";
}
if ($op == "delete") {
    $id = $_GET['id'];
    $query = "DELETE FROM piket WHERE id = '$id'";
    $hasil = mysqli_query($koneksi, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
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

<body class="p-3 flex-grow-1">
    <div class="container">
        <a href="index.php" class="btn btn-primary d-inline-flex align-items-center" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-people-fill me-2" viewBox="0 0 16 16">
                <path
                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5">
                </path>
            </svg>ISI DATA</a>
        <div class="table-container">
            <table class="table table-bordered border-light table-dark bg-gradient mt-3">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">Wilayah Dijaga</th>
                        <th scope="col">Catatan Kejadian</th>
                        <th scope="col">Tanggal & Waktu</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM piket order by id asc";
                    $hasil = mysqli_query($koneksi, $query);
                    $no = 1;
                    while ($row = mysqli_fetch_array($hasil)) {
                        $id = $row["id"];
                        $nama = $row["nama_petugas"];
                        $wilayah = $row["wilayah_dijaga"];
                        $catatan = $row["catatan_kejadian"];
                        $waktu = $row["waktu_ronda"];
                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo $no++ ?>
                            </th>
                            <td scope="row">
                                <?php echo $nama ?>
                            </td>
                            <td scope="row">
                                <?php echo $wilayah ?>
                            </td>
                            <td scope="row">
                                <?php echo $catatan ?>
                            </td>
                            <td scope="row">
                                <?php echo $waktu ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $id ?>" style="text-decoration: none;"><button type="button"
                                        class="btn btn-outline-success d-inline-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-pencil-square me-2" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z">
                                            </path>
                                        </svg>
                                        Ubah
                                    </button></a>

                                <a href="data.php?op=delete&id=<?php echo $id ?>" style="text-decoration: none;"
                                    onclick="return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA?')"><button
                                        type="button" class="btn btn-outline-danger d-inline-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-trash me-2" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z">
                                            </path>
                                            <path
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z">
                                            </path>
                                        </svg>
                                        Hapus
                                    </button></a>

                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>