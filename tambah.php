<?php
include "koneksi.php";

if (isset($_POST['bsimpan'])) {
    // Validasi data POST
    $judul =  $_POST['judul'];
    $artikel =  $_POST['artikel'];
    $tanggal = isset($_POST['ttanggal']) ? $_POST['ttanggal'] : null;
    $sumber =  $_POST['sumber'];
    $penerbit =  $_POST['penerbit'];

    // Query menggunakan data yang sudah divalidasi
    $simpan = mysqli_query($conn, "INSERT INTO artikel (judul, artikel, tanggal, sumber, penerbit)
        VALUES ('$judul', '$artikel', '$tanggal', '$sumber', '$penerbit')");

    if ($simpan) {
        echo "<script>
            alert('Simpan Data Sukses!');
            document.location='index.php';
        </script>";
    } else {
        echo "<script>
            alert('Simpan Data Gagal!');
            document.location='index.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('sekolah.jpg');
            background-size: cover;
        }
    </style>
</head>
<body>
        
    <div class="container mt-5">        
        <form action="create.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Buku">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Artikel</label>
                        <input type="text" class="form-control" name="artikel" placeholder="Masukkan artikel Buku">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Masukkan tanggal">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sumber</label>
                        <input type="text" class="form-control" name="sumber" placeholder="Masukkan sumber Buku">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" placeholder="Masukkan penerbit Buku">
                    </div>
                    </div>
                        <div class="modal-footer">
                            <a href="index.php" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                        </div>
                </div>
        </form>
    </div>
                  





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>