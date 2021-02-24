<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <h1>Data Mahasiswa</h1>
        <form action="proses_dataproduk.php" method="POST">
            <fieldset>
                <p>
                    <label for="id_produk">id Produk : </label>
                    <input type="text" name="id_produk" />
                </p>

                <p>
                    <label for="nama_produk">Nama Produk : </label>
                    <input type="text" name="nama_produk" />
                </p>

                <p>
                    <label for="keterangan">Keterangan : </label>
                    <input type="text" name="keterangan" />
                </p>

                <p>
                    <label for="harga">Harga : </label>
                    <input type="text" name="harga" />
                </p>

                <p>
                    <label for="jumlah">Jumlah : </label>
                    <input type="text" name="jumlah" />
                </p>

                <p>
                    <input type="submit" value="INPUT" name="input" />
                </p>
            </fieldset>
        </form>

        <h2>Menu</h2>
        <ul>
            <li><a href="index.php">Menu awal</a></li>
            <li><a href="dosen.php">Data Dosen</a></li>
            <li><a href="list_datadosen.php">List Data Dosen</a></li>
        </ul>
    </body>
</html>