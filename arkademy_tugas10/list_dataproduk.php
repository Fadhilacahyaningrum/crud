<html>
    <head>
        <title>List Data Produk</title>
    </head>
    <body>
        <?php include("koneksi.php"); ?>
        <header
        <h3>Data Produk</h3>
        </header>
        <nav>
            <a href="produk.php">[+] Tambah Data Baru </a> 
        </nav>
        <br/>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Produk</th>
                    <th>Nama Produk</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                $sql = "SELECT * FROM produk";
                $query = mysqli_query($koneksi,$sql);

                while($pr = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$no++."</td>";
                    echo "<td>".$pr['id_produk']."</td>";
                    echo "<td>".$pr['nama_produk']."</td>";
                    echo "<td>".$pr['keterangan']."</td>";
                    echo "<td>".$pr['harga']."</td>";
                    echo "<td>".$pr['jumlah']."</td>";

                    echo "<td>";
                    echo "<a href='form-edit-dataproduk.php?id_produk=".$pr['id_produk']."'>Edit</a> | ";
                    echo "<a href='hapus-dataproduk.php?id_produk=".$pr['id_produk']."'>Hapus</a>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?> </p>

        <h2>Menu</h2>
        <ul>
            <li><a href="index.php">Menu Utama</a></li>
            <li><a href="produk.php">Data produk</a></li>
            <li><a href="list_dataproduk.php">List Data Dosen</a></li>
        </ul>
    </body>
</html>