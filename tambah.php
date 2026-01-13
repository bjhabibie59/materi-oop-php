<?php
include 'config/Database.php';
include 'class/Siswa.php';

$db = new Database;
$siswa = new Siswa($db->koneksi);

if (isset($_POST['simpan'])) {
    $siswa->tambah(
        $_POST['nama'],
        $_POST['kelas'],
        $_POST['jurusan'],
    );
    header('Location: index.php');
}
?>

<h2>Tambah Siswa</h2>

<form action="" method="post">
    Nama <br>
    <input type="text" name="nama" id="" required><br><br>
    
    Kelas <br>
    <input type="text" name="kelas" id="" required><br><br>

    Jurusan <br>
    <input type="text" name="jurusan" id="" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>