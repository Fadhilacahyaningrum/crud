<?php

include("koneksi.php");

if(!isset($_GET['id_produk'])){
    header('Location:list_dataproduk.php');
}

$id_produk = $_GET['id_produk'];
$sql = "SELECT * FROM produk WHERE id_produk=$id_produk";
$query = mysqli_query($koneksi,$sql);
$pr = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan...");
}
?>

<html>
    <head>
        <title>Edit Data produk</title>
    </head>
    <body>
        <h1> Edit Data produk</h1>
        <br>
        <form action="proses-edit-dataproduk.php" method="POST">
            <fieldset>
                <input type="hidden" name="id_produk" value="<?php echo $pr['id_produk']?>"/>
				<p>
				<label for="nama_produk">Nama Produk :</label>
				<input type="text" name="nama_produk" value="<?php echo $pr['nama_produk']?>"/>
				</p>
				<p>
				<label for="keterangan">Keterangan :</label>
				<input type="text" name="keterangan" value="<?php echo $pr['keterangan']?>"/>
				</p>

				<p>
				<label for="harga">Harga :</label>
				<input type="text" name="harga" value="<?php echo $pr['harga']?>"/>
				</p>
				<p>
				<label for="jumlah">Jumlah :</label>
				<input type="text" name="jumlah" value="<?php echo $pr['jumlah']?>"/>
				</p>
				
				<p>
				<input type="submit" value="Simpan" name="simpan"/>
				</p>
            </fieldset> 
        </form>
        <h2>Menu</h2>
        <ul>
            <li><a href="index.php">Menu Utama</a></li>
            <li><a href="produk.php">produk</a></li>
            <li><a href="list_dataproduk.php">List Data produk</a></li>
        </ul>
    </body>
</html>