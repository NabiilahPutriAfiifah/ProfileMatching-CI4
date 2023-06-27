<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <form action="<?= base_url('nama_kandidat/submit_changes_nama_kandidat') ?>" method="post">
                <input type="hidden" name="id" value="<?= isset($data['id']) ? $data['id'] : '' ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Kode Kandidat : </label>
                        <input type="text" class="form-control" name="kode_pendaftar" id="kode_pendaftar"
                            placeholder="Masukan Kode Kandidat" required
                            value="<?= isset($data['kode_pendaftar']) ? $data['kode_pendaftar'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Kandidat : </label>
                        <input type="text" class="form-control" name="nama_pendaftar" id="nama_pendaftar"
                            placeholder="Masukan Nama Kandidat" required
                            value="<?= isset($data['nama_pendaftar']) ? $data['nama_pendaftar'] : '' ?>">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn text-light" style="background-color: #55596b;">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>