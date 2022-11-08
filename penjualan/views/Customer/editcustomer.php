<!--  	idcust 	nmcust 	jenkel 	tgllahir 	alamat 	notelp 	status 	 -->

<?php foreach ($data['customer'] as $edit) {
} ?>

<link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css">
<caption>
    <div class="container">

        <h1 class="h1 text-center">Ubah Data Customer</h1>
</caption>
<form class="justify-content-center align-items-center" action="<?= $base_url . 'customer/update/' . $edit['idcust'] ?>" method="post">
    <div>
        <label class="form-label" for="">Nama customer</label>
        <input class="form-control mb-3" type="text" name="nmcust" id="" placeholder="Nama customer" value="<?= $edit['nmcust'] ?>">
    </div>

    <div>
        <label for="" class="form-label">jenis Kelamin</label>
        <select name="jenkel" id="" class="form-select mb-3" value="<?= $edit['jenkel'] ?>">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div>
        <label class="form-label" for="">Tgl Lahir</label>
        <input class="form-control mb-3" type="date" name="tgllahir" id="" value="<?= $edit['tgllahir'] ?>">
    </div>

    <div class="form-floating">
        <textarea class="form-control mb-3" placeholder="Alamat customer" id="floatingTextarea" name="alamat"><?= $edit['alamat'] ?></textarea>
        <label for="floatingTextarea">Alamat</label>
    </div>

    <div>
        <label class="form-label" for="">No telpon</label>
        <input class="form-control mb-3" type="text" name="notelp" id="" placeholder="No Telepon" value="<?= $edit['notelp'] ?>">
    </div>

    <div>
        <button type="submit" class="btn btn-success rounded-pill  mb-1">Simpan</button>
        <button type="reset" class="btn btn-danger rounded-pill  mb-1">Batal</button>

    </div>
</form>
</div>