<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include('../views/navbar.php'); ?>

    <div class="d-flex flex-column w-100 justify-content-center align-items-center p-2 p-md-5 mt-4">
        <h2>Data Pendaftar</h2>
        <p>Berikut adalah data yang sudah terdaftar</p>

        <table class="table table-bordered w-75 text-center">
            <tr class="text-center">
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>No Handphone</th>
                <th>Opsi</th>
            </tr>
            <?php
            include('../controllers/koneksi.php');
            $data = mysqli_query($koneksi, "SELECT * FROM data ORDER BY id DESC");
            $no = 1;
            while ($kolom = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $kolom['nama']; ?></td>
                    <td><?php echo $kolom['nim']; ?></td>
                    <td><?php echo $kolom['handphone']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $kolom['id']; ?>">Edit</a>
                        <a href="../controllers/hapus.php?id=<?php echo $kolom['id']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <?php include('../views/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>