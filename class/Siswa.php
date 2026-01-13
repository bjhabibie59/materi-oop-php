<?php 

class Siswa
{
    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    // Read
    public function tampil()
    {
        return mysqli_query($this->db, "SELECT * FROM siswa");
    }
    // Create
    public function tambah($nama, $kelas, $jurusan)
    {
        return mysqli_query($this->db, "INSERT INTO siswa (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')");
    }
    // Ambil data berdasarkan id
    public function getById($id)
    {
        return mysqli_query($this->db, "SELECT * FROM siswa WHERE id='$id'");
    }
    // Update
    public function update($id, $nama, $kelas, $jurusan)
    {
        return mysqli_query($this->db, "UPDATE siswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'");
    }
    // Delete
    public function delete($id)
    {
        return mysqli_query($this->db, "DELETE FROM siswa WHERE id='$id'");
    }
}