<?php

include 'koneksi.php';

$id_produk = $_GET['id_produk'];

$sql = "DELETE FROM produk WHERE id_produk=$id_produk";

if ($conn->query($sql) === TRUE) {

    header("Location: index.php");

} else {

    echo "Error";
}

?> 