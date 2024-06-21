<?php
// Pastikan ada validasi form sebelum menyimpan data ke database

// Periksa apakah request merupakan POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi data form disini
    // Misalnya, pastikan semua field telah diisi dengan benar

    // Buat koneksi ke database
    $koneksi = new mysqli("localhost", "root", "", "db_belajar");

    // Periksa koneksi
    if ($koneksi->connect_error) {
        die("Koneksi ke database gagal: " . $koneksi->connect_error);
    }

    // Ambil data dari form
    $nama = $_POST["nama"];
    $konfirmasi_kehadiran = $_POST["konfirmasi_kehadiran"];
    $ucapan = $_POST["ucapan"];
    $waktu_submit = date("Y-m-d H:i:s"); // Waktu submit saat ini

    // Buat dan jalankan query untuk menyimpan data
    $sql = "INSERT INTO tamu (nama, konfirmasi_kehadiran, ucapan, waktu_submit) VALUES ('$nama', '$konfirmasi_kehadiran', '$ucapan', '$waktu_submit')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data tamu berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi database
    $koneksi->close();
} else {
    // Jika bukan POST request, tampilkan pesan kesalahan
    echo "Metode request tidak valid!";
}
