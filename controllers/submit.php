<?php

include ('koneksi.php');

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$handphone=$_POST['handphone'];

// echo "Nama: $nama<br>";
// echo "NIM: $nim<br>";
// echo "No Handphone: $handphone<br>";

$submit = mysqli_query($koneksi, "INSERT INTO data (nama, nim, handphone) VALUES ('$nama', '$nim', '$handphone')");

if ($submit) {
    echo "<script>alert('Data berhasil disimpan'); window.location.href='../index.php';</script>";
} else {
    echo "<script>alert('Data gagal disimpan'); window.location.href='../index.php';</script>";
}

?>