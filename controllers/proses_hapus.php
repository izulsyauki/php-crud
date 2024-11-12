<?php
include ('koneksi.php');

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM data WHERE id='$id'");

if ($hapus) {
    header('location:../views/data.php');
} else {
    header('location:../views/data.php');
}
?>