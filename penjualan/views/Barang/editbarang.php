<?php


foreach ($data['barang'] as $edit) {
}

?>

<link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css">
<div class="container">
    <caption>
        <h1 class="h1 text-center">Edit Barang</h1>
    </caption>
    <form class="justify-content-center align-items-center" action="<?= $base_url . 'barang/update/' . $edit['idbarang'] ?>" method="post">
        <div>
            <label class="form-label" for="">Id Barang</label>
            <input class="form-control mb-3" type="text" name="idbarang" id="" value="<?= $edit['idbarang'] ?>" readonly>
        </div>
        <div>
            <label class="form-label" for="">Nama Barang</label>
            <input class="form-control mb-3" type="text" name="nmbarang" id="" placeholder="Nama Barang" value="<?= $edit['nmbarang'] ?>">
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
            <input class="form-control" name="stok" type="text" placeholder="Stok Barang" value="<?= $edit['stok'] ?>">
        </div>
        <div>
            <label class="form-label" for="">Harga Barang</label>
            <input class="form-control" type="text" name="harga" id="" placeholder="Harga Barang" value="<?= $edit['harga'] ?>">
        </div>
        <div>
            <label class="form-label" for="">Pengirim</label>
            <select class="form-select mb-3" name="iddist" id="">
                <?php
                foreach ($data['barang'] as $barang) {
                ?>
                    <option value="<?= $barang['iddist'] ?>"><?= $barang['nmdist'] ?></option>
                <?php }  ?>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-success rounded-pill  mb-1">Simpan</button>
            <button type="reset" class="btn btn-danger rounded-pill  mb-1">Batal</button>
        </div>
    </form>
</div>