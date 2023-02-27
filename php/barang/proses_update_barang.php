<?php
include '../koneksi.php';

$kode_barang = $_POST['kode_barang'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$id_kategori = $_POST['id_kategori'];

if($id_kategori == ""){
    echo "<script>alert('Pilihan Kategori harus diisi!');</script>";
    echo "<script>location='../barang/barang.php';</script>";
} else {
    $query_update = mysqli_query($koneksi, "UPDATE barang SET nama='$nama', stok='$stok', harga='$harga', id_kategori='$id_kategori' WHERE kode_barang='$kode_barang'");
}

if ($query_update) {
    echo "<script>alert('Data berhasil diubah!'); window.location = 'barang.php'</script>";
} else {
    echo "<script>alert('Gagal!'); window.location = 'barang.php'</script>";
}

?>