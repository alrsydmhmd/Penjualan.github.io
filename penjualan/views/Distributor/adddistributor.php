<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<caption>
    <div class="container">

        <h1 class="h1 text-center">Tambah Data Distributor</h1>
</caption>
<form class="justify-content-center align-items-center" action="<?= $base_url ?>distributor/save" method="post">
    <label class="form-label" for="">Nama Distributor</label>
    <input class="form-control mb-3" type="text" name="nmdist" id="" placeholder="Nama Distributor" required>
    <div class="form-floating">
        <label for="floatingTextarea">Alamat</label>
        <textarea class="form-control mb-3" placeholder="Alamat Distributor" id="floatingTextarea" name="alamat"></textarea>
    </div>
    <label class="form-label" for="">No telpon</label>
    <input class="form-control mb-3" type="text" name="notelp" id="" placeholder="No Telepon" required>
    <button type="submit" class="btn btn-success rounded-pill  mb-1">Simpan</button>
    <button type="reset" class="btn btn-danger rounded-pill  mb-1">Batal</button>
</form>
</div>