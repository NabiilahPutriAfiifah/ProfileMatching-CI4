<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="card">
        <form action="<?= base_url('data_kandidat/submit_changes_perilaku') ?>" method="post">
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
                    <label for="nama"><?= $faktor_penilaian[16]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="p1" id="p1">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[17]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="p2" id="p2">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[18]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="p3" id="p3">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[19]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="p4" id="p4">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn text-light" style="background-color: #55596b;">Submit</button>
                </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>