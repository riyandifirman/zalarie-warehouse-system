<?php
include '../koneksi.php';

$kode_barang = $_POST['kode_barang'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$id_kategori = $_POST['id_kategori'];

if($id_kategori == ""){
    echo "<script>alert('Pilihan Kategori harus diisi!');</script>";
    echo "<script>location='../barang/input_barang.php';</script>";
} else {
    $query_insert = mysqli_query($koneksi, "INSERT INTO barang VALUES ('$kode_barang', '$nama', '$stok', '$harga', '$id_kategori')");
}

if ($query_insert) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location = 'barang.php'</script>";
} else {
    echo "<script>alert('Gagal!'); window.location = 'barang.php'</script>";
}

?>