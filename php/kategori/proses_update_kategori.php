<?php
include '../koneksi.php';

$id_kategori = $_POST['id_kategori'];
$nama = $_POST['nama'];

$query_update = mysqli_query($koneksi, "UPDATE kategori SET nama='$nama' WHERE id_kategori='$id_kategori'");

if ($query_update) {
    echo "<script>alert('Data berhasil diubah!'); window.location = 'kategori.php'</script>";
} else {
    echo "<script>alert('Gagal!'); window.location = 'kategori.php'</script>";
}

?>