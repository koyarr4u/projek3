<?php
include 'koneksi.php';

$query = "SELECT * FROM artikel";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    .kotak {
      border: 2px solid black; 
      padding: 20px; 
      margin: 10px auto; 
      text-align: center;  
      width: fit-content; 
      border-radius: 50px;
    }
    
    body {
        background-image: url('sekolah.jpg');
        background-size: cover;
        background-attachment: fixed;
    }
  </style>
</head>
<body>

    <div class="body">
        <div class="container mt-5">
            <div class="kotak">
                <h1 class="text-center">Selamat Datang  Di Situs Artikel Saya</h1>
            </div>
            <div class="kotak">
                <h2 class="text-center">MATA PELAJARAN</h2>
            </div>
            <a href="tambah.php" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modaltambah">Tambah</a>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['judul'] ?></h5>
                    <div class="artikel">
                        
                            <?= substr(string: $row['artikel'],offset: 0 ,length: 200); ?>...<a href="artikel.php?id= <?=$row['id']?>">Baca Selengkapnya</a>    
                        
                    </div>
                        <p class="card-text"><?= $row['tanggal'] ?></p>
                        <p class="card-text"><?= $row['sumber'] ?></p>
                        <p class="card-text"><?= $row['penerbit'] ?></p>
                        
                        <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a>
                        

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
