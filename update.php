<?php
include 'koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data berdasarkan ID
$query = "SELECT * FROM artikel WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $artikel = $_POST['artikel'];
    $tanggal = $_POST['tanggal'];
    $sumber = $_POST['sumber'];
    $penerbit = $_POST['penerbit'];

    // Update data di database
    $query = "UPDATE artikel SET 
                judul = '$judul', 
                artikel = '$artikel', 
                tanggal = '$tanggal', 
                sumber = '$sumber', 
                penerbit = '$penerbit' 
              WHERE id = $id";
    mysqli_query($conn, $query);

    // Redirect ke index.php
    echo "<script>
            alert('Edit Data Sukses!');
            document.location='index.php';
        </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('sekolah.jpg');
            background-size: cover;
            background-attachment: fixed;
        }
        .kotak {
            border: 2px solid black; 
            padding: 20px; 
            margin: 10px auto; 
            text-align: center; 
            background-color: white; 
            width: fit-content; 
            border-radius: 10px;
        }
    </style>

</head>
<body>
    <div class="container mt-5">
        <div class="kotak">
            <h1 class="text-center">Edit Mata Pelajaran</h1>
        </div>
        <form method="POST">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="artikel" class="form-label">Artikel</label>
                <textarea class="form-control" id="artikel" name="artikel" rows="4" required><?= $data['artikel'] ?></textarea>
            </div>
        
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data['tanggal'] ?>" required>
            </div>


            <div class="mb-3">
                <label for="sumber" class="form-label">Sumber</label>
                <input type="text" class="form-control" id="sumber" name="sumber" value="<?= $data['sumber'] ?>" required>
            </div>

            
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $data['penerbit'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
