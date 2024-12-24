<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM artikel WHERE id = $id";
mysqli_query($conn, $query);


echo "<script>
            alert('Hapus Data Sukses!');
            document.location='index.php';
        </script>";
?>
