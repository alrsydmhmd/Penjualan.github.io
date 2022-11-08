<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<caption>
    <div class="container">

        <h1 class="h1 text-center">Tambah Data Petugas</h1>
</caption>
<form class="justify-content-center align-items-center" action="<?= $base_url ?>petugas/save" method="post">
    <label class="form-label" for="">Nama Petugas</label>
    <input class="form-control mb-3" type="text" name="nmpetugas" id="" placeholder="Nama Petugas" required>
    <div>
        <label for="" class="form-label">Tgl Lahir</label>
        <input type="date" name="tgllahir" id="" class="form-select mb-3">
    </div>
    <div class="form-floating">
        <textarea class="form-control mb-3" placeholder="Alamat Petugas" id="floatingTextarea" name="alamat"></textarea>
        <label for="floatingTextarea">Alamat</label>
    </div>
    <label class="form-label" for="">No telpon</label>
    <input class="form-control mb-3" type="text" name="notelp" id="" placeholder="No Telepon" required>
    <label class="form-label" for="">Nama User</label>
    <input class="form-control mb-3" type="text" name="iduser" id="" readonly>
    <button type="submit" class="btn btn-success rounded-pill  mb-1">Simpan</button>
    <button type="reset" class="btn btn-danger rounded-pill  mb-1">Batal</button>
</form>
</div>

<!-- 
idpetugas 	nmpetugas 	tgllahir 	alamat 	notelp 	iduser -->