<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script "text/javascript" src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

</head>

<body>

    <div class="container">

        <?php
        include 'navbar.php';
        ?>

        <div class="slider">
            <div><img src="walpaper/1.jpg"></div>
            <div><img src="walpaper/2.jpg"></div>
            <div><img src="walpaper/3.jpg"></div>
            <div><img src="walpaper/4.jpg"></div>
            <div><img src="walpaper/5.jpg"></div>
            <div><img src="walpaper/6.jpg"></div>

        </div>

        <div class="row align-items-left mt-3">
            <?php

            require 'setting.php';
            $query = "SELECT * FROM tbl_paket";
            $sql = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_object($sql)) {
            ?>

                <div class="col mb-4">
                    <div class="card md-6" style="width: 18rem;">

                        <img src="gambar/<?= $data->foto; ?>" class="card-img-top" style="height: 18rem;">
                        <div class="card-body">
                            <h5 style="text-align: center;"><?= $data->no_gedung; ?></h5>
                            <hr>
                            <p class="card-text" style="text-align: center;"><?= $data->keterangan; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <?php
        include 'footer.php';
        ?>

    </div>

    <script>
        $('.slider').bxSlider({
            autoControls: true,
            auto: true,
            pager: true,
            slideWidth: 1600,
            mode: 'fade',
            captions: true,
            speed: 1000
        });
    </script>
</body>

</html>