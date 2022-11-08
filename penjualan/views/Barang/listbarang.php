<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<div class="container">

    <h1 class="text-center">Daftar Barang</h1>
    <a class="btn bg-success btn-dark rounded-pill" href="<?= $base_url; ?>barang/create">Tambah Barang</a>
    <table class="table table-bordered table-responsive">
        <thead class="bg-danger">
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Pengirim</th>
            <th>Status</th>
            <th colspan=2>Tools</th>
        </thead>
        <?php
        $no = 1;
        foreach ($data['barang'] as $barang) {
        ?>
            <tbody>
                <td><?= $barang['idbarang'] ?></td>
                <td><?= $barang['nmbarang'] ?></td>
                <td><?= $barang['jenisbarang'] ?></td>
                <td><?= $barang['stok'] ?></td>
                <td><?= 'Rp. ' . $barang['harga'] ?></td>
                <td><?= $barang['nmdist'] ?></td>
                <?php
                if ($barang['status'] == 1) {
                    if ($barang['stok'] >= 1) {
                        $status = 'Ready';
                    } else {
                        $status = 'Sold Out';
                    }
                } ?>
                <td><?= $status; ?></td>
                <td><a href="<?= $base_url . 'barang/edit/' . $barang['idbarang'] ?>"> Ubah</a></td>
                <td><a href="<?= $base_url . 'barang/delete/' . $barang['idbarang'] ?>">Hapus</a></td>
            </tbody>
        <?php
            $no++;
        }
        ?>
    </table>

</div>
<!-- nmbarang 	idjenis 	stok 	harga 	iddist 	status 	 -->