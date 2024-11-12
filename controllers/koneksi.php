<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "php_crud";

$koneksi = mysqli_connect($server, $username, $password, $database);

if ($koneksi) {
    // echo "Koneksi Berhasil";
} else {
    // echo "Koneksi Gagal";
}
