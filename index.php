<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perpustakaan Kota</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <!-- start: Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand fs-2 text-dark me-5" href="#">Perpus Kota</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=daftar-buku">Daftar Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=daftar-anggota">Daftar Anggota</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end: Navbar -->

    <div class="container mt-5">
        <?php
        include 'routes/route.php';
        ?>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>