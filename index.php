<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR</title>
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
                        LAPORAN RONDA MALAM
                    </h4>
                    <hr>
                    <form action="status.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama :</label>
                            <input type="text" class="form-control border-primary" id="nama" name="nama"
                                placeholder="Masukkan Nama Petugas">
                        </div>
                        <div class="mb-3">
                            <label for="wilayah" class="form-label">Wilayah :</label>
                            <input type="text" class="form-control border-primary" id="wilayah" name="wilayah"
                                placeholder="Masukkan Wilayah Dijaga">
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan :</label>
                            <textarea type="text" class="form-control border-primary" id="catatan" name="catatan"
                                placeholder="Masukkan Catatan Kejadian"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Tanggal & Waktu :</label>
                            <input type="datetime-local" class="form-control border-primary" id="waktu" name="waktu"
                                placeholder="Pilih Waktu Ronda">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" name="kirim"
                                class="btn btn-primary bg-gradient d-flex align-items-center justify-content-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-send me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z">
                                    </path>
                                </svg>KIRIM</button>
                            <button type="reset" name="reset"
                                class="btn btn-outline-light bg-gradient d-flex align-items-center justify-content-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-repeat me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z">
                                    </path>
                                </svg>RESET</button>
                        </div>
                        <div class="d-grid mt-3 gap-2">

                            <a href="data.php"
                                class="btn btn-primary bg-gradient d-flex align-items-center justify-content-center"
                                role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-card-list me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z">
                                    </path>
                                    <path
                                        d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0">
                                    </path>
                                </svg>
                                LIHAT DATA
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>