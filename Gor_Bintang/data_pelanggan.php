<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data Pelanggan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <?php
    require 'setting.php';
    if (isset($_POST['simpan'])) {
        $txtfoto = $_POST['txtfoto'];
        $txtnama = $_POST['txtnama'];
        $txtno_hp = $_POST['txtno_hp'];
        $txtalamat = $_POST['txtalamat'];
        $txtketerangan = $_POST['txtketerangan'];

        $sql = "INSERT INTO tbl_pelanggan VALUES (NULL, '$txtfoto', '$txtnama', '$txtno_hp', '$txtalamat','$txtketerangan')";
        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: pelanggan.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }

    ?>
    <div class="container">

        <?php
        include 'navbar.php';
        ?>

        <br>
        <form action="#" method="POST">
            <div class="mb-3">
                <label style="font-weight: bold;">Foto</label>
                <input type="file" name="txtfoto" class="form-control">
            </div>

            <div class="mb-3">
                <label style="font-weight: bold;">Nama</label>
                <input type="text" name="txtnama" class="form-control">
            </div>

            <div class="mb-3">
                <label style="font-weight: bold;">No HP</label>
                <input type="text" name="txtno_hp" class="form-control">
            </div>

            <div class="mb-3">
                <label style="font-weight: bold;">Alamat</label>
                <input type="text" name="txtalamat" class="form-control">
            </div>

            <div class="mb-3">
                <label style="font-weight: bold;">Keterangan</label>
                <input type="text" name="txtketerangan" class="form-control">
            </div>

            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            <a href="pelanggan.php" class="btn btn-secondary">Kembali</a>
        </form>
        <br>

        <?php
        include 'footer.php';
        ?>

    </div>

</body>