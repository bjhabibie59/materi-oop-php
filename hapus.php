<?php
include 'config/Database.php';
include 'class/Siswa.php';

$db = new Database;
$siswa = new Siswa($db->koneksi);

$id = $_GET['id'];
$siswa->delete($id);

header('Location: index.php');