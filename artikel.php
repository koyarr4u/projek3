<?php

require_once('koneksi.php');

$id = $_GET['id'];
$sql = "SELECT * FROM artikel WHERE id =$id";
$result = $conn->query(query: $sql);

$artikel = $result->fetch_all(mode: MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: url('sekolah.jpg');
            background-size: cover;
        }

        header {
            margin-top: 100px;
            text-align: center;
            padding: 20px;
            font-size: 50px;
            color: greenyellow;
            background-color: white !important;
            height: 100px;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 100px;
            border-radius: 5px;
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
    <div class="kotak mt-5">
        <h1>Artikel <span> DATA</span></h1>
    </div>
    <div class="container mt-5">
        <?php $i = 1; ?>
        <?php foreach ($artikel as $row): ?>

            <div class="card">
                <h5 class="card-header"><?= $row['judul']; ?></h5>

                <div class="car-body">
                    <?php
                    echo $row['artikel'];
                    ?>
                    <br><br>
                </div>
            </div>
            <a href="index.php">
                <button type="button" class="close" class="btn btn-primary" data-bs-toggle="modal">
                    <- kembali </button>
            </a>
        <?php endforeach; ?>
    </div>

    
</body>
</html>