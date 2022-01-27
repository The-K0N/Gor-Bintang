<?php
session_start();
require 'setting.php';
if (isset($_POST['login'])) {
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];

    $query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' and password = '$password'");

    if (mysqli_num_rows($query) === 1) {
        $data = mysqli_fetch_object($query);

        $_SESSION['login'] = true;
        $_SESSION['fullname'] = $data->fullname;
        $_SESSION['role'] = $data->role;
        header('location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gor Bintang - Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body background="walpaper/badminton.png">

    <div class="container">
        <div class="row mt-8">
            <div class="col-12">
                <div style="box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);border-radius: 15px; height: 280px;margin: 20rem auto 8.1rem auto;width: 329px; background-color: darkturquoise;" class="card card-body">
                    <h3 style="text-align: center; color: white; font-weight: bold; ">Login</h3>
                    <br />
                    <Form action="" method="POST">

                        <div class="form-group">
                            <input type="text" name="txtusername" class="form-control mb-3" placeholder="Masukan Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="txtpassword" class="form-control mb-3" placeholder="Masukan Password" required>
                        </div>
                        <p> </p>
                        <button type="submit" value="login" name="login" class="btn btn-primary">Login</button>
                        <a type="submit" value="register" name="registrasi" href="registrasi.php" class="btn btn-secondary">Registrasi</a>
                        <p> </p>
                        <p style="color: whitesmoke; font-size: 12px;">Belum memiliki akun ?
                            Silahkan Registrasi</p>
                    </form>

                </div>

            </div>

        </div>

    </div>
</body>

</html>