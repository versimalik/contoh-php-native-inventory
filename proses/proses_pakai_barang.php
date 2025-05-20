<?php

require_once "../koneksi.php";

// cek jumlah barang yang sesuai
$select_query = "SELECT jumlah_barang FROM tb_inventory WHERE id_barang=$_POST[id_barang]";
$select_result = $conn->query($select_query);
$jumlah_barang = $select_result->fetch_array()[0];

// jika jumlah pakai sama dengan jumlah barang saat ini
// maka ubah staus barang menjadi 0
// selain dari itu, hanya kurangi jumlah barang saja

$update_query = "";
if($_POST['jumlah_pakai'] == $jumlah_barang){
    $update_query = "UPDATE tb_inventory SET jumlah_barang = 0, status_barang = false WHERE id_barang=$_POST[id_barang];";
} else {
    $update_query = "UPDATE tb_inventory SET jumlah_barang = jumlah_barang - $_POST[jumlah_pakai] WHERE id_barang=$_POST[id_barang];";
}

// jalankan proses update
$result_update = $conn->query($update_query);

// kembali ke homepage
header(header: "location:/index.php");
?>