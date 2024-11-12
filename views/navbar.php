<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
    <div class="container-fluid d-flex w-100">
        <a class="navbar-brand" href="index.php">Form Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-25" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' || basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'data.php') ? 'active' : ''; ?>" href="data.php">Data Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>