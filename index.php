<?php

include 'config/Database.php';
include 'class/Siswa.php';

$db = new Database();
$siswa = new Siswa($db->koneksi);

$data = $siswa->tampil();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <a href="tambah.php">Tambah Data</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        <?php 
            $no = 1;
            while ($row = mysqli_fetch_assoc($data)) :
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['kelas'] ?></td>
            <td><?= $row['jurusan'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>