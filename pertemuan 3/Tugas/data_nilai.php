<?php
session_start();
require_once 'libfungsi.php';

// Proses penambahan data mahasiswa
if (isset($_POST['submit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    $rerata = hitungRerata($nilai_uts, $nilai_uas, $nilai_tugas);
    $grade = tentukanGrade($rerata);
    $predikat = tentukanPredikat($grade);
    $keterangan = tentukanKeterangan($grade);

    // Inisialisasi $_SESSION['data_mahasiswa'] jika belum ada
    if (!isset($_SESSION['data_mahasiswa'])) {
        $_SESSION['data_mahasiswa'] = array();
    }

    // Menambahkan data mahasiswa ke dalam session
    $_SESSION['data_mahasiswa'][] = array(
        'nama_lengkap' => $nama_lengkap,
        'matkul' => $matkul,
        'nilai_uts' => $nilai_uts,
        'nilai_uas' => $nilai_uas,
        'nilai_tugas' => $nilai_tugas,
        'rerata' => $rerata,
        'grade' => $grade,
        'predikat' => $predikat,
        'keterangan' => $keterangan,
    );
}

// Proses penghapusan data mahasiswa
if (isset($_POST['hapus'])) {
    $index = $_POST['hapus'];
    // Memastikan indeks yang akan dihapus ada dalam session
    if (isset($_SESSION['data_mahasiswa'][$index])) {
        unset($_SESSION['data_mahasiswa'][$index]);
        $_SESSION['data_mahasiswa'] = array_values($_SESSION['data_mahasiswa']); // Mengatur ulang indeks array
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Mahasiswa</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #FFE6E6;
        margin: 0;
        padding: 20px;
    }
    .container {
        max-width: 1000px;
        margin: 0 auto;
        background-color: #FFE6E6;
        padding: 20px;
        border: 1px solid #C6DCBA; 
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        color: #333;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
    }
    .table th, .table td {
        text-align: center;
        padding: 8px;
        border: 1px solid #ddd;
    }
    .table th {
        background-color: #F4538A;
        color: white;
    }
    .table tr:nth-child(even) {
        background-color: #FFE6E6;
    }
    .center {
        display: flex;
        justify-content: center;
    }
    .btn {
        padding: 6px 12px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        color: white;
        background-color: #000;
        color: white;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .btn-black:hover {
        background-color: #333; /* Warna hitam lebih gelap saat dihover */
    }
</style>
</head>
<body>

<div class="container">
    <h2>Data Mahasiswa</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Rerata</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Keterangan</th>
                <th>Action</th> <!-- Tambah kolom Action -->
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        // Menampilkan data mahasiswa dari session
        if (isset($_SESSION['data_mahasiswa'])) {
            foreach ($_SESSION['data_mahasiswa'] as $index => $data) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['nama_lengkap'] . "</td>";
                echo "<td>" . $data['matkul'] . "</td>";
                echo "<td>" . $data['nilai_uts'] . "</td>";
                echo "<td>" . $data['nilai_uas'] . "</td>";
                echo "<td>" . $data['nilai_tugas'] . "</td>";
                echo "<td>" . $data['rerata'] . "</td>";
                echo "<td>" . $data['grade'] . "</td>";
                echo "<td>" . $data['predikat'] . "</td>";
                echo "<td>" . $data['keterangan'] . "</td>";
                echo "<td class='center'><form method='post'><button class='btn' name='hapus' value='$index'>Hapus</button></form></td>";
                echo "</tr>";
                $no++;
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
