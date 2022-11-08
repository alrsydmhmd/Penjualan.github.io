<?php

foreach ($data['petugas'] as $edit) {
    # code...
}

?>



<link rel="stylesheet" href="<?= $base_url; ?>/assets/css/bootstrap.min.css">
<div class="container">

    <caption>
        <h1 class="text-center">Ubah Data petugas</h1>
    </caption>
    <div class="justify-content-center align-items-center">

        <form action="<?= $base_url . 'petugas/update/' . $edit['idpetugas'] ?>" method="POST">
            <div>
                <label class="form-label" for="" class="">Nama petugas</label>
                <input class="form-control mb-3" type="text" name="nmpetugas" id="" value="<?= $edit['nmpetugas'] ?>">
            </div>
            <div>
                <label class="form-label" for="" class="">Tgl lahir</label>
                <input class="form-control mb-3" type="date" name="tgllahir" id="" value="<?= $edit['tgllahir'] ?>">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="alamat"><?= $edit['alamat'] ?></textarea>
                <label for="floatingTextarea">Alamat</label>
            </div>
            <div>
                <label class="form-label" for="">No telpon</label>
                <input class="form-control mb-3" type="text" name="notelp" id="" value="<?= $edit['notelp'] ?>">
            </div>
            <div>
                <label class="form-label" for="">Username</label>
                <input class="form-control mb-3" type="text" name="iduser" id="" value="<?= $edit['iduser'] ?>" readonly>
            </div>
            <div>
                <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
                <button type="reset" class="btn btn-danger rounded-pill">Batal</button>
            </div>
        </form>
    </div>
</div>