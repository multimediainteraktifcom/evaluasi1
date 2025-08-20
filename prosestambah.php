<?php
// Memanggil file koneksi
require 'koneksi.php';

// Memeriksa apakah request datang dari method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form dan melindunginya dari SQL Injection
    $kode_barang = mysqli_real_escape_string($koneksi, $_POST['kode_barang']);
    $nama_barang = mysqli_real_escape_string($koneksi, $_POST['nama_barang']);
    $jumlah_barang = mysqli_real_escape_string($koneksi, $_POST['jumlah_barang']);
    $harga_barang = mysqli_real_escape_string($koneksi, $_POST['harga_barang']);

    // Query untuk memasukkan data ke dalam database
    $query = "INSERT INTO tb_barang (kode_barang, nama_barang, jumlah_barang, harga_barang) 
              VALUES ('$kode_barang', '$nama_barang', '$jumlah_barang', '$harga_barang')";

    // Menjalankan query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman index.php
        header("Location: index.php");
        exit(); // Penting untuk menghentikan eksekusi skrip setelah redirect
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

// Menutup koneksi
mysqli_close($koneksi);
?>