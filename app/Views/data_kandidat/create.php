<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="card">
        <form action="<?= base_url('data_kandidat/submit_changes_data_kandidat') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Kandidat:</label>
                    <select class="form-control select2" name="nama_pendaftar" id="nama_pendaftar" required>
                        <option disabled selected hidden value="">Pilih Nama Kandidat</option>
                        <?php foreach($nama_kandidat as $k){?>
                        <option value="<?php echo $k->id; ?>"><?php echo $k->nama_pendaftar; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[0]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i1" id="i1" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[1]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i2" id="i2" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[2]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i3" id="i3" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[3]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i4" id="i4" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[4]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i5" id="i5" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[5]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i6" id="i6" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[6]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i7" id="i7" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[7]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i8" id="i8" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[8]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i9" id="i9" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[9]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="i10" id="i10required">
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[10]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s1" id="s1" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[11]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s2" id="s2" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[12]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s3" id="s3" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[13]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s4" id="s4" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[14]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s5" id="s5" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[15]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="s6" id="s6" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[16]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="p1" id="p1" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[17]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="p2" id="p2" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[18]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="p3" id="p3" required>
                        <option disabled selected hidden value="">Pilih Data</option>
                        <option value="1">1 - Sangat Buruk</option>
                        <option value="2">2 - Buruk</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4 - Baik</option>
                        <option value="5">5 - Sangat Baik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><?= $faktor_penilaian[19]->nama_kriteria ?> :</label>
                    <select class="form-control select2" name="p4" id="p4" required>
                        <option disabled selected hidden value="">Pilih Data</option>
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