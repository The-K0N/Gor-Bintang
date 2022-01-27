<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <?php
        include 'navbar.php';
        ?>

        <br>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>N0 Hp</th>t
                    <th>Alamat</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-info">
                <?php
                require 'setting.php';
                $query = "SELECT * FROM tbl_pelanggan";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>
                    <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <a href="gambar/<?= $data->foto; ?>"><?= $data->foto; ?></a></td>
                        <td> <?php echo $data->nama; ?> </td>
                        <td> <?php echo $data->no_hp; ?> </td>
                        <td> <?php echo $data->alamat; ?> </td>
                        <td> <?php echo $data->keterangan; ?> </td>
                        <td>

                            <?php
                            if ($_SESSION['role'] == 'admin') {
                            ?>
                                <a href="edit.php?url-id=<?= $data->id; ?>">
                                    <input type="submit" value="Edit" class="btn btn-warning">
                                </a>
                            <?php
                            }
                            ?>

                            <?php
                            if ($_SESSION['role'] == 'admin') {
                            ?>
                                <a href="hapus_pelanggan.php?id=<?= $data->id; ?>">
                                    <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
                                </a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
        <a href="data_pelanggan.php" class="btn btn-success"> Tambah Data Diri </a>
        <a href="index.php" class="btn btn-secondary"> Kembali </a>
        <p></p>

        <?php
        include 'footer.php';
        ?>
    </div>

</body>

</html>