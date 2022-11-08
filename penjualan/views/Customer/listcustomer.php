<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<caption>
    <h1 class="text-center">Data Customer</h1>
</caption>

<div class="container">
    <table class="table table-bordered">
        <thead class=" bg-warning">
            <th>No</th>
            <th>Nama Customer</th>
            <th>Jenis Kelamin</th>
            <th>Tgl Lahir</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Tools</th>
        </thead>
        <?php
        $no = 1;
        foreach ($data['customer'] as $customer) {
        ?>
            <tbody>
                <td><?= $no ?></td>
                <td><?= $customer['nmcust']; ?></td>
                <td><?= $customer['jenkel']; ?></td>
                <td><?= $customer['tgllahir']; ?></td>
                <td><?= $customer['alamat']; ?></td>
                <td><?= $customer['notelp']; ?></td>
                <td>
                    <a class="btn btn-info rounded-pill" href="<?= $base_url . 'customer/edit/' . $customer['idcust']; ?>">Ubah</a>
                    <a class="btn btn-danger rounded-pill" href="<?= $base_url . 'customer/delete/' . $customer['idcust']; ?>">Hapus</a>
                </td>
            </tbody>
        <?php
            $no++;
        } ?>
    </table>
</div>

<!-- nmcust 	jenkel 	tgllahir 	alamat 	notelp -->