<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <form action="<?= base_url('faktor_penilaian/submit_changes_faktor_penilaian') ?>" method="post">
                <input type="hidden" name="id" value="<?= isset($data['id']) ? $data['id'] : '' ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Aspek:</label>
                        <select class="form-control select2" name="nama_aspek" id="nama_aspek">
                            <option disabled selected hidden>Pilih Nama Aspek</option>
                            <?php foreach($aspek as $k){?>
                            <option value="<?php echo $k->id; ?>"
                                <?= isset($data['id_aspek']) && $data['id_aspek'] == $k->id ? 'selected' : ''?>>
                                <?php echo $k->nama_aspek; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Kriteria : </label>
                        <input type="text" class="form-control" name="nama_kriteria" id="nama_kriteria"
                            placeholder="Masukan Nama Kriteria" required
                            value="<?= isset($data['nama_kriteria']) ? $data['nama_kriteria'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Factor :</label>
                        <select class="form-control select2" name="faktor" id="faktor">
                            <option disabled selected hidden>Pilih Factor</option>
                            <option value="Core Factor"
                                <?= isset($data['faktor']) && $data['faktor'] == "Core Factor" ? 'selected' : ''?>>Core
                                Factor</option>
                            <option value="Secondary Factor"
                                <?= isset($data['faktor']) && $data['faktor'] == "Secondary Factor" ? 'selected' : ''?>>
                                Secondary Factor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bobotcore">Nilai : </label>
                        <input type="number" class="form-control" name="nilai" id="nilai" placeholder="Masukan Nilai"
                            required value="<?= isset($data['nilai']) ? $data['nilai'] : '' ?>">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn text-light" style="background-color: #55596b;">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>