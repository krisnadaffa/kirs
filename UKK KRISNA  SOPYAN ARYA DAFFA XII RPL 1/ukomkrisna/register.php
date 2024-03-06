<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Form | REKAYASA PERANGKAT LUNAK</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="#">
</head>

<body>
    <div class="logreg">
        <form action="" method="post">
            <fieldset>
                <h1>Daftar Akun SMKN 5</h1>
                <input type="text" name="Nama lengkap" placeholder="NAMA LENGKAP" required>
                <input type="text" name="Username" placeholder="USERNAME" required>
                <input type="text" name="Password" placeholder="PASSWORD" required>
                <input type="text" name="Tempat lahir" placeholder="TEMPAT LAHIR" required>
                <input type="text" name="Tanggal lahir" placeholder="TANGGAL LAHIR" required>
                <input type="aaa" name="NIP/NIS" placeholder="NIP/NIS" required>
                <input type="text" name="Agama" placeholder="AGAMA" required>
                <input type="text" name="Jenis Kelamin" placeholder="JENIS KELAMIN" requird>
                <input type="text" name="Alamat" placeholder="ALAMAT" required>
                <input type="text" name="Nama ayah" placeholder="NAMA AYAH" required>
                <input type="text" name="Nama ibu" placeholder="" required>
                <input type="text" name="Pekerjaan ayah" placeholder="PEKERJAAN AYAH" required>
                <input type="text" name="Pekerjaan ibu" placeholder="PEKERJAAN IBU" required>
                <input type="text" name="Martial" placeholder="MARTIAL" required>
                <input type="text" name="Nama PT" placeholder="NAMA PT" required>
                <input type="text" name="Ijazah" placeholder="IJAZAH" required>
                <input type="text" name="Lulus" placeholder="LULUS" requird>
                <input type="text" name="Golongan" placeholder="GOLONGAN" requird>
                <input type="text" name="Keterangan" placeholder="KETERANGAN" requird
                <span class="level-txt">Select Level</span>

                <select name="level">
                    <option>Administrator</option>
                    <option>Guru</option>
                    <option>Siswa</option>
                    <option>Staff Admin</option>
                    <option>Admin Sekolah</option>
                    <option>Orang Tua</option>
                </select>

                <input type="submit" name="register" value="Daftar">
                <span>Sudah Punya Akun?<a href="index.php"> Masuk</a></span>
            </fieldset>
        </form>
    </div>
</body>

</html>

<?php

include "koneksi.php";
if (isset($_POST['register'])) {
    mysqli_query($koneksi, "INSERT INTO ukom SET
		nama = '$_POST[nama]',
        username = '$_POST[nama]',
		level = '$_POST[level]'");
}

?>