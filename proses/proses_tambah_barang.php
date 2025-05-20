<?php

require_once "../koneksi.php";

// kumpulkan data dari form
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$satuan_barang=$_POST['satuan_barang'];
$harga_beli=$_POST['harga_beli'];
// if pendek untuk cek jumlah barang
// jika jumlah barang yang baru = 0, maka status menjadi falsae
// dan sebaliknya
$status_barang = $jumlah_barang < 1 ? false : true;

// buat query tambah barang baru
$insert_query = "INSERT INTO tb_inventory("
                ."kode_barang, nama_barang, jumlah_barang, satuan_barang, harga_beli, status_barang)"
                ."VALUES("
                ."'$kode_barang', '$nama_barang', $jumlah_barang, '$satuan_barang', $harga_beli, $status_barang"
                .");";

// jalankan proses delete
$result_insert = $conn->query($insert_query);

// kembali ke homepage
header(header: "location:/index.php");
?>