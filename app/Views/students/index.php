<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-10">
        <h1 class="mb-4">Daftar Mahasiswa</h1>
    </div>
    <div class="col-2">
        <a href="<?= base_url('/students/create') ?>" class="btn btn-info btn-lg">Tambah Data</a>
    </div>
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student) : ?>
                    <tr>
                        <td><?= $student['id'] ?></td>
                        <td><?= $student['nim'] ?></td>
                        <td><?= $student['name'] ?></td>
                        <td><?= $student['pob'] ?></td>
                        <td><?= $student['dob'] ?></td>
                        <td><?= $student['address'] ?></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>