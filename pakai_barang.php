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
    <title>Pakai Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

    <?php while($row = $result_select->fetch_assoc()):?>

    <main class="container mt-5">
        <h1>Pakai Barang</h1>
        <hr>
        <h2><?= $row['nama_barang']; ?></h2>
        <table class="table">
            <tr>
                <td>ID Barang</td>
                <td><?=$row['id_barang'];?></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td><?=$row['kode_barang'];?></td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td><?php echo "$row[jumlah_barang] $row[satuan_barang]";?></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><?php echo "$row[harga_beli]";?></td>
            </tr>
            <tr>
                <td>Status Barang</td>
                <td>
                    <?php if($row['status_barang']==1):?>
                        <span>Available</span>
                    <?php else: ?>
                        <span>Not Available</span>
                    <?php endif;?>            
                </td>
            </tr>
            <tr>
                <td>Gunakan Barang</td>
                <td>
                    <?php if($row['status_barang']==1):?>
                    <form action="proses/proses_pakai_barang.php" method="post">
                        <input name="id_barang" type="hidden" value="<?= $row['id_barang']; ?>">
                        <input required name="jumlah_pakai" type="number" min="1" max="<?=$row['jumlah_barang'];?>" class="form-control w-25 d-inline-block">
                        <input type="submit" class="btn btn-primary" value="Gunakan">
                    </form>
                    <?php else: ?>
                        <p class="alert alert-danger">Barang tidak tersedia</p>
                    <?php endif;?>    
                </td>
            </tr>
        </table>

    </main>

    <?php endwhile;?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>