<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<div class="container">

    <h1 class="text-center">Daftar Petugas</h1>
    <table class="table table-bordered table-responsive">
        <thead class="bg-danger">
            <th>No Petugas</th>
            <th>Nama Petugas</th>
            <th>Tgl lahir Petugas</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Username</th>
            <th colspan=2>Tools</th>
        </thead>
        <?php
        $no = 1;
        foreach ($data['petugas'] as $petugas) {
        ?>
            <tbody>
                <td><?= $no ?></td>
                <td><?= $petugas['nmpetugas'] ?></td>
                <td><?= $petugas['tgllahir'] ?></td>
                <td><?= $petugas['alamat'] ?></td>
                <td><?= $petugas['notelp'] ?></td>
                <td><?= $petugas['iduser'] ?></td>
                <td><a href="<?= $base_url . 'petugas/edit/' . $petugas['idpetugas'] ?>"> Ubah</a></td>
                <td><a href="<?= $base_url . 'petugas/delete/' . $petugas['idpetugas'] ?>">Hapus</a></td>
            </tbody>
        <?php
            $no++;
        }
        ?>
    </table>

</div>

<!-- 
idpetugas 	nmpetugas 	tgllahir 	alamat 	notelp 	iduser -->