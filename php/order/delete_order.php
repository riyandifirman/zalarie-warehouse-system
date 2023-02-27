<?php
include "../koneksi.php";

$id_order = $_GET['id_order'];

$query_delete = mysqli_query($koneksi, "DELETE FROM orders WHERE id_order='$id_order'");
$query_delete2 = mysqli_query($koneksi, "DELETE FROM detail_order WHERE id_order='$id_order'");

if ($query_delete) {
    echo "<script>alert('Data berhasil dihapus!');window.location='order.php'</script>";
} else {
    echo "Error";
}
?>