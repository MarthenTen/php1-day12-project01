<?php

require_once('../config/conection.php');


$id=$_GET['id'];

$sql="DELETE FROM produk  WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: ../views/dasbor.php");
    }
?>
