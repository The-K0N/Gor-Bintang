<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3 class="alert alert-info"> Edit Data Artikel</h3>
        <?php
        require 'setting.php';
        //menampilan data dalam table
        if (isset($_GET['url-id'])) {
            $input_id = $_GET['url-id'];
            $query = "SELECT * FROM tbl_paket WHERE id ='$input_id'";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_object($result);
        }
        //simpan data yang telah dirubah dalam table
        if (isset($_POST['simpan'])) {
            $txtfoto = $_POST['txtfoto'];
            $txtno_gedung = $_POST['txtno_gedung'];
            $txtketerangan = $_POST['txtketerangan'];
            //update syntax dalam mysql
            $sql = "UPDATE tbl_paket SET 
                         foto='$txtfoto', no_gedung='$txtno_gedung', keterangan='$txtketerangan' WHERE id = $input_id";
            $result = mysqli_query($koneksi, $sql);
            //perulangan jika dia berhasil maka ke index dan data diperbarui
            if ($result) {
                header('location:home.php');
                //jika salah data tidak berhasil diperbarui dan menghasilkan error
            } else {
                echo 'Query Error' . mysqli_error($koneksi);
            }
        }
        ?>

        <form action="#" method="Post">
            <div class="mb-3">
                <label for="">Foto</label>
                <input type="hidden" name="txtid" class="form-control" value="<?= $data->id; ?>">
                <input type="file" name="txtfoto" class="form-control" value="<?= $data->foto; ?>">
            </div>
            <div class="mb-3">
                <label for="">No Gedung</label>
                <input type="text" name="txtno_gedung" class="form-control" value="<?= $data->no_gedung; ?>">
            </div>

            <div class="mb-3">
                <label for="">Keterangan</label>
                <input type="text" name="txtketerangan" class="form-control" value="<?= $data->keterangan; ?>">
            </div>

            <input type="submit" name="simpan" value="Simpan Perubahan Data" class="btn btn-primary">
            <a href="home.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</body>

</html>