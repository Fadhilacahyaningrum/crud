<?php

include ("koneksi.php");

if(isset($_GET['id_produk'])){
    $id_produk = $_GET['id_produk'];

    $sql = "DELETE FROM produk WHERE id_produk=$id_produk";
    $query = mysqli_query($koneksi,$sql);

    if($query){
        header('Location:list_dataproduk.php');
    } else {
        die("gagal menghapus");
    }
}else{
    die("Akses dilarang");
}
?>
