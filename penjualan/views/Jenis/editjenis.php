<?php

foreach ($data['jenis'] as $edit) {
    # code...
}

?>
<link rel="stylesheet" href="<?= $base_url; ?>/assets/css/bootstrap.min.css">
<div class="container">
    <caption>
        <h1 class="text-center">Ubah Data jenis</h1>
    </caption>
    <form action="<?= $base_url . 'jenis/update/' . $edit['idjenis']  ?>" method="POST">
        <label class="form-label" for="">Jenis Barang</label>
        <input class="form-control" type="text" name="jenisbarang" id="" value="<?= $edit['jenisbarang'] ?>">
        <label class="form-label" for="">Keterangan</label>
        <input class="form-control mb-3" type="text" name="ket" id="" value="<?= $edit['ket'] ?>">
        <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
        <button type="reset" class="btn btn-danger  rounded-pill">Batal</button>
    </form>
</div>