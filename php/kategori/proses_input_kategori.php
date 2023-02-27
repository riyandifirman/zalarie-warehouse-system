<?php
include '../koneksi.php';

$id_kategori = $_POST['id_kategori'];
$nama = $_POST['nama'];

$query_insert = mysqli_query($koneksi, "INSERT INTO kategori VALUES ('$id_kategori', '$nama')");

if ($query_insert) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location = 'kategori.php'</script>";
} else {
    echo "<script>alert('Gagal!'); window.location = 'kategori.php'</script>";
}

?>