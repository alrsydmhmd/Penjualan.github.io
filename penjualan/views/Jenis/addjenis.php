<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<div class="container">

    <caption>
        <h1 class="text-center">Data jenis</h1>
    </caption>
    <form class="justify-content-center align-items-center" action="<?= $base_url ?>jenis/save" method="post">
        <label class="form-label" for="">Jenis Barang</label>
        <input class="form-control" type="text" name="jenisbarang" id="" placeholder="Jenis Barang" required>
        <label class="form-label" for="">Keterangan</label>
        <input class="form-control mb-3" type="text" name="ket" id="" placeholder="Keterangan" required>
        <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
        <button type="reset" class="btn btn-warning  rounded-pill">Batal</button>
    </form>
</div>