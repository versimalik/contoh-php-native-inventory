<?php

require_once "../koneksi.php";

// susun query delete untuk barang terpilih
$delete_query = "DELETE FROM tb_inventory WHERE id_barang=$_GET[id_barang]";

// jalankan proses delete
$result_delete = $conn->query($delete_query);

// kembali ke homepage
header(header: "location:/index.php");
?>