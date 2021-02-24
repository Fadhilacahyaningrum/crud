<?php 

include("koneksi.php");

if(isset($_POST['simpan'])){
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE produk SET id_produk='$id_produk',nama_produk='$nama_produk',keterangan='$keterangan',harga='$harga',jumlah='$jumlah' WHERE id_produk=$id_produk";
    $query = mysqli_query($koneksi,$sql);

    if($query){
        header('Location:list_dataproduk.php');
    } else {
        die("gagal menyimpan perubahan....");
    }
}else{
    die("Akses Dilarang");
}
?>