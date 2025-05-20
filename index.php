<?php
require_once "koneksi.php";

$select_sql = "SELECT * FROM tb_inventory ORDER BY id_barang ASC;";
$result_select = $conn->query($select_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Inventory - Fajrin Ziaul Haq</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

    <main class="container mt-5">
        <h1>Aplikasi Inventory</h1>

        <!-- tombol tambah barang -->
        <a href="tambah_barang.php" class="btn btn-primary">
            <i class="bi bi-plus"></i> Tambah Barang
        </a>

        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID Barang</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Satuan Barang</th>
                    <th>Harga Beli</th>
                    <th>Status Barang</th>
                    <th>Kelola</th>
                </tr>
            </thead>
            <tbody>

            <?php if($result_select->num_rows > 0):?>

                <?php while($row=$result_select->fetch_assoc()):?>
                    <tr>
                        <td><?= $row['id_barang']; ?></td>
                        <td><?= $row['kode_barang']; ?></td>
                        <td><?= $row['nama_barang']; ?></td>
                        <td><?= $row['jumlah_barang']; ?></td>
                        <td><?= $row['satuan_barang']; ?></td>
                        <td><?= $row['harga_beli']; ?></td>
                        <td>
                            <?php if($row['status_barang']==1):?>
                                Available
                            <?php else: ?>
                                Not Available
                            <?php endif;?>
                        </td>
                        <td>
                            <!-- tombol pakai barang -->
                            <a href="pakai_barang.php?id_barang=<?= $row['id_barang']?>" class="btn btn-success">
                                <i class="bi bi-arrow-down-square"></i>
                            </a>
                            
                            <!-- tombol edit data -->
                            <a href="edit_barang.php?id_barang=<?= $row['id_barang']?>" class="btn btn-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <!-- tombol hapus barang -->
                            <a onclick="confirmDelete(<?=$row['id_barang'] ?>)" class="btn btn-danger">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                            
                            <!-- tampilkan konfirmasi ketika tombol hapus diklik -->
                            <script>
                                function confirmDelete(id_barang){
                                    let confirmText = "Apakah Anda yakin ingin menghapus data ini?\n\n";
                                    confirmText += "<?php echo "$row[kode_barang] - $row[nama_barang]"; ?>";
                                    
                                    // jika tombol "yes/ya" diklik, maka jalankan proses delete
                                    if(confirm(confirmText)){
                                        // redirect ke halam hapus barang dengan id yang sesuai
                                        window.location.href = "proses/proses_hapus_barang.php?id_barang=" + id_barang;
                                    }
                                }
                            </script>
                        </td>
                    </tr>
                <?php endwhile;?>

            <?php endif;?>

            </tbody>
        </table>
    </main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>