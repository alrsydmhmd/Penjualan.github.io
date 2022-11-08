<!--  	idcust 	nmcust 	jenkel 	tgllahir 	alamat 	notelp 	status 	 -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<caption>
    <div class="container">

        <h1 class="h1 text-center">Tambah Data Customer</h1>
</caption>
<form class="justify-content-center align-items-center" action="<?= $base_url ?>customer/save" method="post">
    <div>
        <label class="form-label" for="">Nama customer</label>
        <input class="form-control mb-3" type="text" name="nmcust" id="" placeholder="Nama customer" required>
    </div>

    <div>
        <label for="" class="form-label">jenis Kelamin</label>
        <select name="jenkel" id="" class="form-select mb-3" required>
            <option>Pilih</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div>
        <label class="form-label" for="">Tgl Lahir</label>
        <input class="form-control mb-3" type="date" name="tgllahir" id="" required>
    </div>

    <div class="form-floating">
        <textarea class="form-control mb-3" placeholder="Alamat customer" id="floatingTextarea" name="alamat"></textarea>
        <label for="floatingTextarea">Alamat</label>
    </div>

    <div>
        <label class="form-label" for="">No telpon</label>
        <input class="form-control mb-3" type="text" name="notelp" id="" placeholder="No Telepon" required>
    </div>

    <div>
        <button type="submit" class="btn btn-success rounded-pill  mb-1">Simpan</button>
        <button type="reset" class="btn btn-danger rounded-pill  mb-1">Batal</button>

    </div>
</form>
</div>