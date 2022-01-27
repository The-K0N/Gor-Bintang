<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
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
            $query = "SELECT * FROM tbl_pelanggan WHERE id ='$input_id'";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_object($result);
        }
        //simpan data yang telah dirubah dalam table
        if (isset($_POST['simpan'])) {
            $txtfoto = $_POST['txtfoto'];
            $txtnama = $_POST['txtnama'];
            $txtno_hp = $_POST['txtno_hp'];
            $txtalamat = $_POST['txtalamat'];
            $txtketerangan = $_POST['txtketerangan'];
            //update syntax dalam mysql
            $sql = "UPDATE tbl_pelanggan SET 
                         foto='$txtfoto', nama='$txtnama', no_hp='$txtno_hp', alamat='$txtalamat',keterangan='$txtketerangan' WHERE id = $input_id";
            $result = mysqli_query($koneksi, $sql);
            //perulangan jika dia berhasil maka ke index dan data diperbarui
            if ($result) {
                header('location:pelanggan.php');
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
                <label for="">Nama</label>
                <input type="text" name="txtnama" class="form-control" value="<?= $data->nama; ?>">
            </div>

            <div class="mb-3">
                <label for="">No HP</label>
                <input type="text" name="txtno_hp" class="form-control" value="<?= $data->no_hp; ?>">
            </div>

            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="txtalamat" class="form-control" value="<?= $data->alamat; ?>">
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