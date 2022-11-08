<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<div class="container">
    <h1 class="text-center">Daftar Jenis</h1>
    <table class="table table-bordered table-responsive">
        <thead class="bg-info">
            <th>Nomor</th>
            <th>Jenis Barang</th>
            <th>Keterangan</th>
            <th colspan=2>Tools</th>
        </thead>
        <?php
        $no = 1;
        foreach ($data['jenis'] as $jenis) {
        ?>
            <tbody>
                <td><?= $no ?></td>
                <td><?= $jenis['jenisbarang'] ?></td>
                <td><?= $jenis['ket'] ?></td>
                <td><a href="<?= $base_url . 'jenis/edit/' . $jenis['idjenis'] ?>"> Ubah </a></td>
                <td><a href="<?= $base_url . 'jenis/delete/' . $jenis['idjenis'] ?>" onclick="return confirm('yakin?')"> Hapus </a></td>
            </tbody>
        <?php
            $no++;
        }
        ?>
    </table>
</div>