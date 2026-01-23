<?php
// Baris ini menghubungkan file dengan database 
include 'koneksi.php';

// Mengambil ID barang yang akan dihapus dari URL 
$id = $_GET['id'];

// Menjalankan perintah SQL untuk menghapus data berdasarkan ID [cite: 8, 92]
mysqli_query($conn, "DELETE FROM barangg WHERE id_barang='$id'");

// Mengalihkan kembali halaman ke daftar produk setelah berhasil menghapus [cite: 58, 89]
header("Location: dashboard.php?page=listproducts");
?>