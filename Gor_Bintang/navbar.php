<?php
require 'setting.php';
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="font-weight: bold; color: orange; font-size: xx-large; font-family: magneto;">GOR Bintang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php" style="font-weight: bold;">Beranda</a>
                </li>

                <?php
                if ($_SESSION['role'] == 'admin') {
                ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php" style="font-weight: bold;">Katalog</a>
                    </li>
                <?php
                }
                ?>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pelanggan.php" style="font-weight: bold;">Daftar Pelanggan</a>
                </li>

            </ul>

            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="logout.php" style="color: red; font-weight: bold; font-size: 25px;">Logout</a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>