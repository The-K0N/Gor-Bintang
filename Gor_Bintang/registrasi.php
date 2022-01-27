<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
        .container {
            color: whitesmoke;
        }
    </style>
</head>

<body background="walpaper/badminton.png">

    <!-- Start Registrasi Member -->
    <?php
    // ambil koneksi
    require 'setting.php';

    //tampilkan sql

    if (isset($_POST['simpan'])) {
        $id;
        $txtfullname = $_POST['txtfullname'];
        $txtusername = $_POST['txtusername'];
        $txtpassword = $_POST['txtpassword'];
        $txtrole = $_POST['txtrole'];

        // masukan ke database
        $sql = "INSERT INTO tbl_user VALUES 
					(NULL,'$txtfullname','$txtusername','$txtpassword','$txtrole')";

        $query = mysqli_query($koneksi, $sql);
        //jika berhasil arahkan ke Login	
        if ($query) {
            header('location:login.php');
        } else {
            echo 'Query Error' . mysqli_error($koneksi);
        }
    }
    ?>

    <div class="container">
        <div class="row mt-8">
            <div class="col-12">
                <div style="box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);border-radius: 15px; height: 485px;margin: 17rem auto 5rem auto;width: 360px; background-color: darkturquoise;" class="card card-body">
                    <h3 style="text-align: center; color: white; font-weight: bold; ">Form Registrasi</h3>
                    <br />
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="txtfullname" id="fullname" class="form-control" placeholder="Masukan Nama Lengkap" required autofocus>
                            <p style="color: whitesmoke; font-size: 12px;">Contoh : Ahmad Rojali</p>
                        </div>

                        <div class="form-group">
                            <input type="text" name="txtusername" id="username" class="form-control" placeholder="Masukan Username" required autofocus>
                            <p style="color: whitesmoke; font-size: 12px;">Gunakan huruf kecil, gunakan ( _ ) sebagai pengganti spasi Contoh : rojali_1</p>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" name="txtpassword" id="password" class="form-control" placeholder="Masukan Password" required>
                            <p style="color: whitesmoke; font-size: 12px;">Gunakan huruf kapital dan angka, password minimal 8 karakter Contoh : Rojali12</p>
                        </div>
                        
                        <div class="form-group">
                            <input type="role" name="$txtrole" id="role" class="form-control" placeholder="Masukan Role" readonly value="pelanggan" required>
                        </div>

                        <br>
                        <div class="form-group pull-right">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                            <a type="button" class="btn btn-secondary" href="login.php">Kembali</a>
                        </div>
                        <p> </p>
                        <p style="color: whitesmoke; font-size: 12px;">Isi form sesuai Petunjuk</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Contact -->
</body>

</html>