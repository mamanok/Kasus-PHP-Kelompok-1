<?php

include "function/functions.php";

if (isset($_POST["submit"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $nis = htmlspecialchars($_POST["nis"]);
    $email = htmlspecialchars($_POST["email"]);
    $jurusan = htmlspecialchars($_POST["jurusan"]);

    $query = "INSERT INTO siswa
                                VALUES
                                ('','$nama','$nis','$email','$jurusan')
                                ";
    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <h1>Tambah Data Pembelian</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nis">Barang :</label><br>
                <input type="text" name="nis" id="nis" value="Dress grey strict" required>
            </li>
            <li>
                <label for="nama">Harga :</label><br>
                <input type="text" name="nama" id="nama" value="Rp 80.000" required>
            </li>
            <li>
                <label for="email">Deskripsi :</label><br>
                <input type="text" name="email" id="email" value="Sedang trend" required>
            </li>
            <li>
                <label for="jurusan">Pembayaran :</label><br>
                <input type="text" name="jurusan" id="jurusan" value="Transfer/COD" required>
            </li>
            <button type="submit" name="submit" id="submit">Simpan</button>
        </ul>
    </form>

</body>

</html>