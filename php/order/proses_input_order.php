<?php
include '../koneksi.php';

if(isset($_POST['simpan_data_order'])) {
    $id_order = $_POST['id_order'];
    $id_barang = $_POST['id_barang'];
    $quantity = $_POST['quantity'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];
    $total = $_POST['total'];

    foreach($id_barang as $key => $value) {
        $s_id_barang = $value;
        $s_quantity = $quantity[$key];
        $query_insert = mysqli_query($koneksi, "INSERT INTO detail_order (quantity, id_order, id_barang) VALUES ('$s_quantity', '$id_order', '$s_id_barang')");
    }

    $query_insert2 = mysqli_query($koneksi, "INSERT INTO orders (id_order, tanggal, status, total) VALUES ('$id_order', '$tanggal', '$status', '$total')");
}

if ($query_insert && $query_insert2) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location = 'order.php'</script>";
} else {
    echo "<script>alert('Gagal!'); window.location = 'order.php'</script>";
}

?>