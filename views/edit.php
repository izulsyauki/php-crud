<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include('../views/navbar.php'); ?>

    <div class="d-flex flex-column w-100 h-100 justify-content-center align-items-center p-2 p-md-5 mt-4">

        <h2>Edit Data</h2>
        <p>Silahkan edit data dengan benar</p>

        <?php
        include('../controllers/koneksi.php');
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM data WHERE id = '$id'");
        $kolom = mysqli_fetch_array($data);
        ?>

        <form class="col-11 col-md-6 d-flex flex-column" method="post" action="../controllers/update.php">
            <input type="hidden" name="id" value="<?php echo $kolom['id']; ?>">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input class="form-control" id="nama" type="text" name="nama" value="<?php echo $kolom['nama']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input class="form-control" id="nim" type="text" name="nim" value="<?php echo $kolom['nim']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="handphone" class="form-label">No Handphone</label>
                <input class="form-control" id="handphone" type="text" name="handphone" value="<?php echo $kolom['handphone']; ?>" required>
            </div>

            <input class="btn btn-primary ms-auto" type="submit" value="Simpan">
        </form>
    </div>

    <?php include('../views/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>