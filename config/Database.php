<?php

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "sekolah";

    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );

        if (!$this->koneksi) {
            echo "Koneksi Gagal!";
        }
    }
}