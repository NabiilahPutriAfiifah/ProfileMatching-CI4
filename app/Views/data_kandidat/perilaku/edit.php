<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <form action="<?= base_url('data_kandidat/submit_changes_perilaku') ?>" method="post">
                <input type="hidden" name="id" value="<?= isset($data['id']) ? $data['id'] : '' ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Kandidat:</label>
                        <select class="form-control select2" name="nama_pendaftar" id="nama_pendaftar">
                            <option disabled selected hidden>Pilih Nama Kandidat</option>
                            <?php foreach($nama_kandidat as $k){?>
                            <option value="<?php echo $k->id; ?>"
                                <?= isset($data['id_nama_kandidat']) && $data['id_nama_kandidat'] == $k->id ? 'selected' : ''?>>
                                <?php echo $k->nama_pendaftar; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[16]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="p1" id="p1">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['p1']) && $data['p1'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['p1']) && $data['p1'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['p1']) && $data['p1'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['p1']) && $data['p1'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['p1']) && $data['p1'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[17]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="p2" id="p2">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['p2']) && $data['p2'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['p2']) && $data['p2'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['p2']) && $data['p2'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['p2']) && $data['p2'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['p2']) && $data['p2'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[18]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="p3" id="p3">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['p3']) && $data['p3'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['p3']) && $data['p3'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['p3']) && $data['p3'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['p3']) && $data['p3'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['p3']) && $data['p3'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[19]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="p4" id="p4">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['p4']) && $data['p4'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['p4']) && $data['p4'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['p4']) && $data['p4'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['p4']) && $data['p4'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['p4']) && $data['p4'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn text-light" style="background-color: #55596b;">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>