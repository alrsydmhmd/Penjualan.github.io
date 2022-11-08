<?php

foreach ($data['distri'] as $edit) {
    # code...
}

?>



<link rel="stylesheet" href="<?= $base_url; ?>/assets/css/bootstrap.min.css">
<div class="container">

    <caption>
        <h1 class="text-center">Ubah Data Distributor</h1>
    </caption>
    <div class="justify-content-center align-items-center">

        <form action="<?= $base_url . 'distributor/update/' . $edit['iddist'] ?>" method="post">
            <label class="form-label" for="" class="">Nama Distributor</label>
            <input class="form-control mb-3" type="text" name="nmdist" id="" value="<?= $edit['nmdist'] ?>">
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="alamat"><?= $edit['alamat'] ?></textarea>
                <label for="floatingTextarea">Alamat</label>
            </div>
            <label class="form-label" for="">No telpon</label>
            <input class="form-control mb-3" type="text" name="notelp" id="" value="<?= $edit['notelp'] ?>">
            <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
            <button type="reset" class="btn btn-danger rounded-pill">Batal</button>
        </form>
    </div>
</div>