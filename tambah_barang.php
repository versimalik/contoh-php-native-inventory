<?php
require_once "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

    <main class="container mt-5">
        <h1>Tambah Barang Baru</h1>
        <hr>
        <form action="proses/proses_tambah_barang.php" method="post">
            <table class="table">
                <tr>
                    <td>Kode Barang</td>
                    <td>
                        <input name="kode_barang" class="form-control" required type="text" placeholder="e.g. ABCD-0123">
                    </td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>
                        <input name="nama_barang" class="form-control" required type="text" placeholder="e.g. Black Wood Table">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td><input name="jumlah_barang" class="form-control" required type="number" min="1"></td>
                </tr>
                <tr>
                    <td>Satuan Barang</td>
                    <td>
                        <select class="form-select" name="satuan_barang">
                            <option value="kg">kg</option>
                            <option value="pcs">pcs</option>
                            <option value="liter">liter</option>
                            <option value="centimeter">centimeter</option>
                            <option value="meter">meter</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input name="harga_beli" class="form-control" required type="number" step="0.01"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="btn btn-primary" type="submit" value="Tambahkan">
                    </td>
                </tr>
            </table>
        </form>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>