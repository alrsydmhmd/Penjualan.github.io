<?php

foreach ($data['kdbarang'] as $kdbarang) {
    # code...
    $kodebarang = $kdbarang['kodebarang'];
    $urutan = (int)substr($kodebarang, 4, 4);
    $urutan++;
    $kode = "2022";
    $kodebarang = $kode . sprintf("%04s", $urutan);
}




// function rupiah($angka)
// {
//     $hasil_rupiah = "Rp. " . number_format($angka, 2, ',', '.');
//     return $hasil_rupiah;
// }

?>

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<div class="container">
    <caption>
        <h1 class="text-center">Tambah Barang</h1>
    </caption>
    <form class="justify-content-center align-items-center" action="<?= $base_url ?>barang/save" method="post">
        <div>
            <label class="form-label" for="">Id Barang</label>
            <input class="form-control mb-3" type="text" name="idbarang" id="" value="<?= $kodebarang ?>" readonly>
        </div>
        <div>
            <label class="form-label" for="">Nama Barang</label>
            <input class="form-control mb-3" type="text" name="nmbarang" id="" placeholder="Nama Barang" required>
        </div>
        <div>
            <label class="form-label" for="">Jenis Barang</label>
            <select class="form-select" name="idjenis" id="">
                <option value="">Pilih</option>
                <?php
                foreach ($data['jenis'] as $jenis) {
                ?>
                    <option value="<?= $jenis['idjenis'] ?>"><?= $jenis['jenisbarang'] ?></option>
                <?php }  ?>
            </select>
        </div>
        <div>
            <label class="form-label" for="">Stok Barang</label>
            <input class="form-control" name="stok" type="text" placeholder="Stok Barang" required>
        </div>
        <div>
            <label class="form-label" for="">Harga Barang</label>
            <input class="form-control" type="text" name="harga" id="" placeholder="Harga Barang" value="" required>
        </div>
        <div>
            <label class="form-label" for="">Pengirim</label>
            <select class="form-select mb-3" name="iddist" id="">
                <option value="">Pilih</option>
                <?php
                foreach ($data['distri'] as $distri) {
                ?>
                    <option value="<?= $distri['iddist'] ?>"><?= $distri['nmdist'] ?></option>
                <?php }  ?>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-success rounded-pill  mb-1">Simpan</button>
            <button type="reset" class="btn btn-danger rounded-pill  mb-1">Batal</button>
        </div>
    </form>
</div>