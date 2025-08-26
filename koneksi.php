<?php
$koneksi = mysqli_connect("localhost", "root", "", "kuesioner");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$pendidikan   = $_POST['pendidikan'];
$kelamin      = $_POST['kelamin'];
$jns_layanan  = $_POST['jns_layanan'];
$u1 = $_POST['u1'];
$u2 = $_POST['u2'];
$u3 = $_POST['u3'];
$u4 = $_POST['u4'];
$u5 = $_POST['u5'];
$u6 = $_POST['u6'];
$u7 = $_POST['u7'];
$u8 = $_POST['u8'];
$u9 = $_POST['u9'];
$pesan  = $_POST['pesan'];

$user_id = 0;
$tanggal = date("Y-m-d");

$query = "INSERT INTO mod_ikm 
(u1, u2, u3, u4, u5, u6, u7, u8, u9, pesan, kelamin, pendidikan, tgl_respon, jns_layanan, user)
VALUES 
('$u1', '$u2', '$u3', '$u4', '$u5', '$u6', '$u7', '$u8', '$u9', '$pesan', '$kelamin', '$pendidikan', '$tanggal', '$jns_layanan', '$user_id')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
