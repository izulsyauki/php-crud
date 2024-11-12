<?php
include ('koneksi.php');

$id = $_GET['id'];

echo "<script>
    if (confirm('Anda yakin ingin menghapus data ini?')) {
        window.location.href = '../controllers/proses_hapus.php?id=$id';
    } else {
        window.location.href = '../views/data.php';
    }
</script>";

?>