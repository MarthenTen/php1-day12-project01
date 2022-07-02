
<?php
require_once('../config/conection.php');





$id = $_POST['id'];

$kategori = $_POST['kategori']; 
$judul = $_POST['judul'];
$harga = $_POST['harga'];

$row = mysqli_query($conn,"UPDATE produk SET kategori='$kategori', judul='$judul', harga='$harga' WHERE id='$id' "); //menggunakan kondisi where untuk menyimpan dengan data spesifik

if($row) 
    header('Location:../index.php'); // Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; // Jika gagal akan keluar pesan tersebut
?>

	

