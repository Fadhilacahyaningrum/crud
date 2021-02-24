<?php 
include ("koneksi.php");

if(isset($_POST['input'])) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO produk(id_produk, nama_produk, keterangan, harga, jumlah) VALUE ('$id_produk', '$nama_produk', '$keterangan', '$harga', '$jumlah')";
    $query = mysqli_query($koneksi,$sql);

    if ($query) {
        header('Location: list_dataproduk.php?status=sukses');
    } else {
        header('Location: list_dataproduk.php?status=gagal');
    }
} else {
    die ("Akses Dilarang.....");
}
?>