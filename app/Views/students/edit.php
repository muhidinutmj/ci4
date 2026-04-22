<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-10">
        <h1 class="mb-4">Edit Mahasiswa</h1>
    </div>
    <div class="col-2">
        <a href="<?=base_url()?>/students" class="btn btn-info btn-lg">Lihat Data</a>
    </div>
    <div class="col-12">
        <form action="<?=base_url()?>/students/update/<?= $student['id'] ?>" method="post">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" value="<?= $student['nim'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $student['name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="pob" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="pob" name="pob" value="<?= $student['pob'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="dob" name="dob" value="<?= $student['dob'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" id="address" name="address" rows="3" required><?= $student['address'] ?></textarea>
            </div>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>