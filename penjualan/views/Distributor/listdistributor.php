<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<div class="container">

    <table class="table table-bordered table-responsive">
        <h1 class="text-center">Daftar Distributor</h1>
        <thead class="bg-danger">
            <th>Nomor</th>
            <th>Nama Distributor</th>
            <th>Alamat</th>
            <th>No telepon</th>
            <th colspan=2>Tools</th>
        </thead>
        <?php
        $no = 1;
        foreach ($data['distri'] as $distri) {
        ?>
            <tbody>
                <td><?= $no ?></td>
                <td><?= $distri['nmdist'] ?></td>
                <td><?= $distri['alamat'] ?></td>
                <td><?= $distri['notelp'] ?></td>
                <td><a href="<?= $base_url . 'distributor/edit/' . $distri['iddist'] ?>"> Ubah</a></td>
                <td><a href="<?= $base_url . 'distributor/delete/' . $distri['iddist'] ?>">Hapus</a></td>
            </tbody>
        <?php
            $no++;
        }
        ?>
    </table>

</div>