<?php
include "../koneksi.php";

$kode_barang = $_GET['kode_barang'];

$query_delete = mysqli_query($koneksi, "DELETE FROM barang WHERE kode_barang='$kode_barang'");

if ($query_delete) {
    echo "<script>alert('Data berhasil dihapus!');window.location='barang.php'</script>";
} else {
    echo "Error";
}
?>