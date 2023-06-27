<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="card">
        <form action="<?= base_url('data_kandidat/submit_changes_sikap_kerja') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Kandidat:</label>
                    <select class="form-control select2" name="nama_pendaftar" id="nama_pendaftar">
                        <option disabled selected hidden>Pilih Nama Kandidat</option>
                        <?php foreach($nama_kandidat as $k){?>
                        <option value="<?php echo $k->id; ?>"><?php echo $k->nama_pendaftar; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[10]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s1" id="s1">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[11]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s2" id="s2">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[12]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s3" id="s3">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[13]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s4" id="s4">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[14]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s5" id="s5">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[15]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s6" id="s6">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn text-light"
                        style="background-color: #55596b;"><?= $faktor_penilaian[0]->nama_kriteria ?>bmit</button>
                </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>