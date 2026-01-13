<?php
include 'config/Database.php';
include 'class/Siswa.php';

$db = new Database;
$siswa = new Siswa($db->koneksi);

$id = $_GET['id'];
$data = $siswa->getById($id);
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $siswa->update(
        $id,
        $_POST['nama'],
        $_POST['kelas'],
        $_POST['jurusan']
    );
    header('Location: index.php');
}
?>

<h2>Edit Data Siswa</h2>

<form action="" method="post">
    Nama <br>
    <input type="text" name="nama" id="" value="<?= $row['nama']; ?>">

    Kelas <br>
    <input type="text" name="kelas" id="" value="<?= $row['kelas']; ?>">
    
    Jurusan <br>
    <input type="text" name="jurusan" id="" value="<?= $row['jurusan']; ?>">

    <button type="submit" name="update">Update</button>
</form>