<?php

include ('koneksi.php');

$id = $_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$handphone=$_POST['handphone'];

$update = mysqli_query($koneksi, "UPDATE data SET nama='$nama', nim='$nim', handphone='$handphone' WHERE id='$id'");

if ($update) {
    echo "<script>alert('Data berhasil diupdate'); window.location.href='../views/data.php';</script>";
} else {
    echo "<script>alert('Data gagal diupdate'); window.location.href='../views/data.php';</script>";
}

?>