<?php

include "function/functions.php";

$perpage = 3;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$start = ($page > 1) ? ($page * $perpage) - $perpage : 0;

$results = mysqli_query($koneksi, "SELECT * FROM siswa LIMIT $start, $perpage");

$hasil = mysqli_query($koneksi, "SELECT * FROM siswa");
$total = mysqli_num_rows($hasil);

$pages = ceil($total / $perpage);

//searching 

$keyword = "";
if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $results = mysqli_query($koneksi, "SELECT * FROM siswa
    WHERE nama LIKE '%$keyword%' ");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>ORDER</title>

</head>

<body>
    
        <div class="kanan">
            <div class="header1">
            <b>Silahkan Melakukan Pemesanan</b>
            <a style = "margin-left: 900px;" href="../home.php" hover="none" onMouseOver="this.style.color='yellow'"
            onMouseOut="this.style.color='#fff'">Kembali</a>
            </div>
            
            <h2 style="margin-left: 10px;">Pencarian:</h2>

            <form action="" method="post">
                <input type="text" name="keyword" id="keyword" class="myInput" size="40" autocomplete="off" placeholder="masukan keyword nama">
                <button type="submit" name="cari" class="cari">Cari ! </button>
            </form>

            <table id="myTable">
                <tr class="header">
                    <th style="width:5%;">No</th>
                    <th style="width:15%;">Aksi</th>
                    <th>Barang</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Pembayaran</th>
                </tr>
                <tr>
                    <?php $i = 1; ?>
                    <?php while ($row = mysqli_fetch_assoc($results)) : ?>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('anda yakin');">Hapus</a>
                        </td>
                        <td><?= $row["nis"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                        <td><?= $row["jurusan"]; ?></td>
                       
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>


            </table>
            <div class="paginate">
                <?php for ($i = 1; $i <= $pages; $i++) : ?>
                    <?php if ($i == $page) : ?>
                        <a href="?halaman=<?= $i ?>" style="font-weight : bold; color: red;"><?= $i ?></a>
                    <?php else : ?>
                        <a href="?halaman=<?= $i ?>"><?= $i ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>

        </div>

    </div>
</body>

</html>