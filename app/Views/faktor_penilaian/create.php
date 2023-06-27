<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="card">
        <form action="<?= base_url('faktor_penilaian/submit_changes_faktor_penilaian') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Aspek:</label>
                    <select class="form-control select2" name="nama_aspek" id="nama_aspek">
                        <option disabled selected hidden>Pilih Nama Aspek</option>
                        <?php foreach($aspek as $k){?>
                        <option value="<?php echo $k->id; ?>"><?php echo $k->nama_aspek; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Kriteria : </label>
                    <input type="text" class="form-control" name="nama_kriteria" id="nama_kriteria"
                        placeholder="Masukan Nama Kriteria" required>
                </div>
                <!-- <div class="form-group">
                    <label for="nama">Factor : </label>
                    <input type="text" class="form-control" name="faktor" id="faktor" placeholder="Masukan Factor"
                        required>
                </div> -->
                <div class="form-group">
                    <label for="nama">Factor :</label>
                    <select class="form-control select2" name="faktor" id="faktor">
                        <option disabled selected hidden>Pilih Factor</option>
                        <option value="Core Factor">Core Factor</option>
                        <option value="Secondary Factor">Secondary Factor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai : </label>
                    <input type="number" class="form-control" name="nilai" id="nilai" placeholder="Masukan Nilai"
                        required>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn text-light" style="background-color: #55596b;">Submit</button>
                </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>