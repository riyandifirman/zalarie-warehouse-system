<?php
include "../koneksi.php";

$id_kategori = $_GET['id_kategori'];

$query_delete = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id_kategori'");

if ($query_delete) {
    echo "<script>alert('Data berhasil dihapus!');window.location='kategori.php'</script>";
} else {
    echo "Error";
}
?>