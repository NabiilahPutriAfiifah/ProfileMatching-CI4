<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="card">
        <form action="<?= base_url('aspek/submit_changes_aspek') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Kode Aspek : </label>
                    <input type="text" class="form-control" name="kode_aspek" id="kode_aspek"
                        placeholder="Masukan Kode Aspek" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Aspek : </label>
                    <input type="text" class="form-control" name="nama_aspek" id="nama_aspek"
                        placeholder="Masukan Nama Aspek" required>
                </div>
                <div class="form-group">
                    <label for="persentase">Persentase : </label>
                    <input type="number" class="form-control" name="persentase" id="persentase"
                        placeholder="Masukan Persentase" required>
                </div>
                <div class="form-group">
                    <label for="bobotcore">Bobot Core : </label>
                    <input type="number" class="form-control" name="bobot_core" id="bobot_core"
                        placeholder="Masukan Bobot Core" required>
                </div>
                <div class="form-group">
                    <label for="bobotsecondary">Bobot Secondary : </label>
                    <input type="number" class="form-control" name="bobot_secondary" id="bobot_secondary"
                        placeholder="Masukan Bobot Secondary" required>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn text-light" style="background-color: #55596b;">Submit</button>
                </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>