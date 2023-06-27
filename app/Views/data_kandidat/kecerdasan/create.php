<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="card">
        <form action="<?= base_url('data_kandidat/submit_changes_kecerdasan') ?>" method="post">
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
                    <label for="nama"><?= $faktor_penilaian[0]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i1" id="i1">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[1]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i2" id="i2">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[2]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i3" id="i3">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[3]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i4" id="i4">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[4]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i5" id="i5">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[5]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i6" id="i6">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[6]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i7" id="i7">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[7]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i8" id="i8">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[8]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i9" id="i9">
                        <option disabled selected hidden>Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[9]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i10" id="i10">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1">1 - Sangat Buruk</option>
                            <option value="2">2 - Buruk</option>
                            <option value="3">3 - Cukup</option>
                            <option value="4">4 - Baik</option>
                            <option value="5">5 - Sangat Baik</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn text-light" style="background-color: #55596b;">Submit</button>
                </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>