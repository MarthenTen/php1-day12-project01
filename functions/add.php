

<?php

//Koneksi
require_once('../config/conection.php');

//karena form menggunakan method post kita gunakan $_POST
$kategori = $_POST['kategori']; //index didalamnya sesuai dengan input name yang ada di form
$judul = $_POST['judul'];
$harga = $_POST['harga'];

$row = mysqli_query($conn,"INSERT INTO produk SET kategori='$kategori', judul='$judul', harga='$harga' "); 

if($row) 
    header('Location:../index.php'); //Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; //jika gagal akan keluar pesan tersebut
?>