<?php
require_once "koneksi.php";

$select_sql = "SELECT * FROM tb_inventory WHERE id_barang=$_GET[id_barang]";
$result_select = $conn->query($select_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

    <?php while($row = $result_select->fetch_assoc()):?>
    <main class="container mt-5">
        <h1>Ubah Barang</h1>
        <hr>
        <form action="proses/proses_edit_barang.php" method="post">
            <input type="hidden" name="id_barang" value="<?=$row['id_barang']?>">
            <table class="table">
                <tr>
                    <td>Kode Barang</td>
                    <td>
                        <input value="<?= $row['kode_barang'];?>" name="kode_barang" class="form-control" required type="text">
                    </td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>
                        <input value="<?= $row['nama_barang'];?>" name="nama_barang" class="form-control" required type="text">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td><input value="<?= $row['jumlah_barang'];?>" name="jumlah_barang" class="form-control" required type="number"></td>
                </tr>
                <tr>
                    <td>Satuan Barang</td>
                    <td>
                        <select class="form-select" name="satuan_barang">
                            <option value="kg" <?= $row['satuan_barang']=='kg'? 'selected' : ''?> >kg</option>
                            <option value="pcs" <?= $row['satuan_barang']=='pcs'? 'selected' : ''?>>pcs</option>
                            <option value="liter" <?= $row['satuan_barang']=='liter'? 'selected' : ''?>>liter</option>
                            <option value="centimeter" <?= $row['satuan_barang']=='centimeter'? 'selected' : ''?>>centimeter</option>
                            <option value="meter" <?= $row['satuan_barang']=='meter'? 'selected' : ''?>>meter</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input value="<?= $row['harga_beli'];?>" name="harga_beli" class="form-control" required type="number" step="0.01"></td>
                </tr>
                <tr>
                    <td>Status Barang</td>
                    <td>
                        <?php if($row['status_barang'] < 1):?>
                            <p class="alert alert-danger">Not Available</p>
                        <?php else:?>
                            <p class="alert alert-info">Available</p>
                        <?php endif;?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="btn btn-warning" type="submit" value="Ubah">
                    </td>
                </tr>
            </table>
        </form>
    </main>

    <?php endwhile;?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>