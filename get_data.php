<?php
function waktu_terbaca($waktu_submit)
{
    // Check if $waktu_submit is in a valid format
    if (strtotime($waktu_submit) !== false) {
        $waktu_sekarang = time();
        $waktu_submit_unix = strtotime($waktu_submit);
        $perbedaan_waktu = $waktu_sekarang - $waktu_submit_unix;

        if ($perbedaan_waktu < 3600) {
            $menit = ceil($perbedaan_waktu / 60);
            return "$menit menit lalu";
        } elseif ($perbedaan_waktu < 86400) {
            $jam = floor($perbedaan_waktu / 3600);
            return "$jam jam yang lalu";
        } else {
            return date("d M Y", $waktu_submit_unix);
        }
    } else {
        return "Format waktu tidak valid";
    }
}

$koneksi = new mysqli("localhost", "root", "", "db_belajar");

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Dapatkan total jumlah data tamu
$sql_jumlah_data = "SELECT COUNT(id) as jumlah_data FROM tamu";
$result_jumlah_data = $koneksi->query($sql_jumlah_data);
if (!$result_jumlah_data) {
    die("Query error: " . $koneksi->connect_error);
}
$row_jumlah_data = $result_jumlah_data->fetch_assoc();
$jumlah_data = $row_jumlah_data['jumlah_data'];

// Hitung total halaman
$jumlah_halaman = ceil($jumlah_data / 5);

// Dapatkan halaman saat ini
$halaman_saat_ini = (isset($_GET['halaman'])) ? (int) $_GET['halaman'] : 1;

// Batasi halaman saat ini agar tidak melebihi batas
$halaman_saat_ini = max(1, min($halaman_saat_ini, $jumlah_halaman));

// Halaman aktif
$halaman_aktif = $halaman_saat_ini;

// Query untuk mengambil data tamu berdasarkan halaman
$sql = "SELECT * FROM tamu ORDER BY id DESC LIMIT " . (($halaman_saat_ini - 1) * 5) . ", 5";
$result = $koneksi->query($sql);

if (!$result) {
    die("Query error: " . $koneksi->connect_error);
}

// Output HTML content
if ($result->num_rows > 0) {
    echo '<div class="container-fluid mt-3">';
    echo '<div class="card">';
    echo '<div class="card-body">';

    while ($row = $result->fetch_assoc()) {
        $waktu_tampil = waktu_terbaca($row["waktu_submit"]);
        $huruf_awal = strtoupper(substr($row["nama"], 0, 1));

        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<div class="d-flex align-items-center">';
        echo '<div class="avatar me-3 border rounded-circle" style="width: 80px; height: 80px">';
        echo '<div class="d-flex justify-content-center align-items-center" style="height: 100%;">';
        echo '<h1 class="m-0 p-0" style="font-size: 36px; font-weight: bold;">' . $huruf_awal . '</h1>';
        echo '</div>';
        echo '</div>';
        echo '<div>';
        echo '<h5 class="card-title">' . $row["nama"] . '</h5>';
        echo "<hr class='my-1'>";
        echo '<p class="card-text">' . $row["ucapan"] . '</p>';

        // Display time with right alignment
        echo '<p class="card-text text-muted small" style="position: absolute; bottom: 5px; right: 10px; text-align: right;">';
        echo '<i class="bi bi-clock-history"></i> ' . $waktu_tampil . '</p>';

        // Display konfirmasi_kehadiran in top right corner
        echo '<span style="position: absolute; top: 5px; right: 10px; font-size: 12px;">' . $row["konfirmasi_kehadiran"] . '</span>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    // Tampilkan pagination
    echo '<ul class="pagination justify-content-center">';

    // Tombol "Sebelumnya"
    if ($halaman_saat_ini > 1) {
        echo '<button class="btn btn-outline-primary me-2" onclick="loadPage(' . ($halaman_saat_ini - 1) . ')"><i class="bi bi-chevron-left"></i></button>';
    }

    // Tampilkan nomor halaman
    $start_page = max(1, $halaman_saat_ini - 2);
    $end_page = min($jumlah_halaman, $halaman_saat_ini + 2);
    for ($i = $start_page; $i <= $end_page; $i++) {
        if ($i == $halaman_aktif) {
            echo '<button class="btn btn-primary me-2 active" onclick="loadPage(' . $i . ')">' . $i . '</button>';
        } else {
            echo '<button class="btn btn-outline-primary me-2" onclick="loadPage(' . $i . ')">' . $i . '</button>';
        }
    }

    // Tombol "Selanjutnya"
    if ($halaman_saat_ini < $jumlah_halaman) {
        echo '<button class="btn btn-outline-primary" onclick="loadPage(' . ($halaman_saat_ini + 1) . ')"><i class="bi bi-chevron-right"></i></button>';
    }

    echo '</ul>';
    echo '</div>';
    echo '</div>';
} else {
    echo "Belum ada data tamu";
}

$koneksi->close();
