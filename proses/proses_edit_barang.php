<?php

require_once "../koneksi.php";

// kumpulkan data dari form
$kode_barang=$_POST['kode_barang'];
$nama_barang=mysqli_real_escape_string($conn, $_POST['nama_barang']);
$jumlah_barang=$_POST['jumlah_barang'];
$satuan_barang=$_POST['satuan_barang'];
$harga_beli=$_POST['harga_beli'];

// if pendek untuk cek jumlah barang
// jika jumlah barang yang baru = 0, maka status menjadi false
// dan sebaliknya
$status_barang = $jumlah_barang < 1 ? 0 : 1;

// buat query tambah barang baru
$update_query = "UPDATE tb_inventory "
                . "SET kode_barang = '$kode_barang',"
                . "nama_barang = '$nama_barang',"
                . "jumlah_barang = $jumlah_barang,"
                . "satuan_barang = '$satuan_barang',"
                . "harga_beli = $harga_beli,"
                . "status_barang = $status_barang "
                . "WHERE id_barang = $_POST[id_barang]";

// var_dump($update_query);
// die();

// jalankan proses update
$result_update = $conn->query($update_query);

// kembali ke homepage
header(header: "location:/index.php");
?>