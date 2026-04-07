<?php
/**
 * Konfigurasi Koneksi Database
 * Pastikan MySQL di XAMPP/Laragon sudah dalam status 'Start'
 */

$host = "localhost";    // Biasanya 'localhost'
$user = "root";         // Username default MySQL adalah 'root'
$pass = "";             // Password default MySQL kosong
$db   = "user_db";      // Nama database yang Anda buat di SQL tadi

// Melakukan koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek apakah koneksi berhasil
if (!$conn) {
    // Jika gagal, tampilkan pesan error dan hentikan script
    die("<div style='color:red; font-family:sans-serif;'>
            <h3>Koneksi Database Gagal!</h3>
            <p>Pesan Error: " . mysqli_connect_error() . "</p>
         </div>");
}

/** * Catatan Keamanan: 
 * File ini akan di-include di login.php dan dashboard.php 
 * agar Anda tidak perlu menulis ulang kode koneksi di setiap file.
 */
?>