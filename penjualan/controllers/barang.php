<?php

if ($aksi == 'index') {
    # code...
    $data['barang'] = $db->query($connect, "SELECT * FROM vbarang");
    $helpers->load_view('Barang/listbarang.php', $data);
}

if ($aksi == 'create') {
    # code...
    $data['kdbarang'] = $db->query($connect, "SELECT max(idbarang) AS kodebarang FROM tbarang");
    $data['jenis'] = $db->query($connect, "SELECT * FROM tjenis");
    $data['distri'] = $db->query($connect, "SELECT * FROM tdistributor");
    $helpers->load_view('Barang/addbarang.php', $data);
}
if ($aksi == 'save') {
    $idbarang = $_POST['idbarang'];
    $nmbarang = $_POST['nmbarang'];
    $idjenis = $_POST['idjenis'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $iddist = $_POST['iddist'];
    $status = 1;
    $simpan = $db->qry($connect, "INSERT INTO tbarang VALUES('$idbarang','$nmbarang','$idjenis','$stok','$harga','$iddist','$status')");
    if ($simpan)
        header('location:' . $base_url . 'barang');
    else {
        header('location:' . $base_url . 'barang/create');
    }
}

if ($aksi == 'edit') {
    $idbarang = $uri[4];
    $data['barang'] = $db->query($connect, "SELECT * FROM tbarang WHERE idbarang=$idbarang");
    $helpers->load_view('Barang/editbarang.php', $data);
}
if ($aksi == 'update') {
    # code...
    $idbarang = $uri[4];
    $nmbarang = $_POST['nmbarang'];
    $idjenis = $_POST['idjenis'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $iddist = $_POST['iddist'];
    $update = $db->qry($connect, "UPDATE tbarang SET nmbarang='$nmbarang', idjenis='$idjenis', stok='$stok', harga='$harga', iddist='$iddist' WHERE idbarang='$idbarang'");
    if ($update) {
        # code...
        header('location:' . $base_url . 'barang');
    } else {
        header('location:' . $base_url . 'barang/edit');
    }
}
if ($aksi == 'delete') {
    # code...
    $idbarang = $uri[4];
    $delete = $db->qry($connect, "DELETE FROM tbarang WHERE idbarang='$idbarang'");
    if ($delete) {
        # code...
        header('location:' . $base_url . 'barang');
    } else {
        header('location:' . $base_url . 'barang/delete');
    }
}
