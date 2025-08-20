<?php
$host     = "db"; // Nama host database, dalam hal ini "db" biasanya digunakan saat memakai Docker
$user     = "root"; // Nama pengguna (username) untuk koneksi database
$password = "root";// Password untuk pengguna database
$database = "stok_barang"; // Password untuk pengguna database

// Membuat koneksi ke database menggunakan mysqli
$koneksi = mysqli_connect($host, $user, $password, $database);
//echo"PHP terkoneksi"; // mengetes apakah php terkoneksi atau tidak, klo ada tulisan terkonesi hapus

// Mengecek apakah koneksi berhasil atau tidak
// Jika gagal, tampilkan pesan error dan hentikan eksekusi script
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
