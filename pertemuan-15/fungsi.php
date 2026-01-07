<?php
require_once '/koneksi.php';
if (isset($_POST['submit'])) {
    $nim = $_POST['txtNim'];
    $nama = $_POST['txtnamalengkap'];
    $email = $_POST['txttempatlahir'];
    $pesan = $_POST['txttglahir'];
    $hobi = $_POST['txthobi'];
    $pasangan = $_POST['txtpasangan'];
    $pekerjaan = $_POST['txtpekerjaan'];
    $ortu = $_POST['txtnamaortu'];
    $kakak = $_POST['txtnamakakak'];
    $adik = $_POST['txtnamaadik'];

    $query = "INSERT INTO kontak (txtnim, txtnamalengkap, txttempatlahir, txttglahir, txthobi, txtpasangan, txtpekerjaan, txtnamaortu, txtnamakakak, txtnamaadik) VALUES ('$nim', '$nama', '$email', '$pesan', '$hobi', '$pasangan', '$pekerjaan', '$ortu', '$kakak', '$adik')";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

