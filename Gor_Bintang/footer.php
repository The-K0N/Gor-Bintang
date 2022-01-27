<footer>
    <div class="card-body bg-dark" style="color: white;">
        <div class="container">
            <div class="row">

                <div class="col" style="text-align: left;">
                    <h5 style="font-weight: bold;">About</h5>
                    <br>
                    <p>Contact &nbsp;: 087-782-884-284 &nbsp;<a href="https://api.whatsapp.com/send?phone=6287782884284&text=Halo ada yang bisa dibantu%20!!!%20" style="color: greenyellow;">WhatsApp</a></p>
                    <p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: suryakhoirrahman1@gmail.com</p>
                    <p>Jl. KH. Ahmad Dahlan No.41B, Pagesangan, Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83116</p>

                </div>

                <div class="col" style="text-align: center;">
                    <h5 style="font-weight: bold;">Pages</h5>
                    <br>
                    
                    <a href="index.php" style="color: white;">Beranda</a><br><br>

                    <?php
                    if ($_SESSION['role'] == 'admin') {
                    ?>
                        <a href="home.php" style="color: white;">Katalog</a><br><br>
                    <?php
                    }
                    ?>

                    <a href="pelanggan.php" style="color: white;">Daftar Pelanggan</a>

                </div>

                <div class="col" style="text-align: right;">
                    <h5 style="font-weight: bold;">Maps</h5>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7889.678994366924!2d116.09549657424488!3d-8.611403875244822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf6d41fdf9ed%3A0x39b283b8b08b2567!2sGOR%20Bulu%20Tangkis%20%22Bintang%22!5e0!3m2!1sid!2sid!4v1643225981721!5m2!1sid!2sid" width="300" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <p style="text-align: center; color: gray; font-size: 10px;">Copyright 2022 | Design by Surya Khoirrahman</p>
    </div>
</footer>