<?php

include "function/functions.php";

$id = $_GET["id"];

$siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id= $id");
$row = mysqli_fetch_assoc($siswa);

if (isset($_POST["submit"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $nis = htmlspecialchars($_POST["nis"]);
    $email = htmlspecialchars($_POST["email"]);
    $jurusan = htmlspecialchars($_POST["jurusan"]); 

    $query = "UPDATE siswa SET
                            nama = '$nama',
                            nis = '$nis',
                            email = '$email',
                            jurusan = '$jurusan',

                            WHERE id = $id
                            ";
    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
        <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Tidak Berhasil Diubah!');
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
    <title>Ubah</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <h1>Ubah Data Oredan</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nis">No Resi :</label><br>
                <input type="text" name="nis" id="nis" value="<?= $row['nis']; ?>" required>
            </li>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>" required>
            </li>
            <li>
                <label for="email">Alamat :</label><br>
                <input type="text" name="email" id="email" value="<?= $row['email']; ?>" required>
            </li>
            <li>
                <label for="jurusan">Kode Resi :</label><br>
                <input type="text" name="jurusan" id="jurusan" value="<?= $row['jurusan']; ?>" required>
            </li>

            <button type="submit" name="submit" id="submit">Ubah data</button>
        </ul>
    </form>

</body>

</html>