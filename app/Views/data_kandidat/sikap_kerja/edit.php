<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <form action="<?= base_url('data_kandidat/submit_changes_sikap_kerja') ?>" method="post">
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
                        <label for="nama"><?= $faktor_penilaian[10]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="s1" id="s1">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['s1']) && $data['s1'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['s1']) && $data['s1'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['s1']) && $data['s1'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['s1']) && $data['s1'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['s1']) && $data['s1'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[11]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="s2" id="s2">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['s2']) && $data['s2'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['s2']) && $data['s2'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['s2']) && $data['s2'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['s2']) && $data['s2'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['s2']) && $data['s2'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[12]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="s3" id="s3">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['s3']) && $data['s3'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['s3']) && $data['s3'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['s3']) && $data['s3'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['s3']) && $data['s3'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['s3']) && $data['s3'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[13]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="s4" id="s4">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['s4']) && $data['s4'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['s4']) && $data['s4'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['s4']) && $data['s4'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['s4']) && $data['s4'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['s4']) && $data['s4'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[14]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="s5" id="s5">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['s5']) && $data['s5'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['s5']) && $data['s5'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['s5']) && $data['s5'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['s5']) && $data['s5'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['s5']) && $data['s5'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[15]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="s6" id="s6">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['s6']) && $data['s6'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['s6']) && $data['s6'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['s6']) && $data['s6'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['s6']) && $data['s6'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['s6']) && $data['s6'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn text-light"
                            style="background-color: #55596b;"><?= $faktor_penilaian[0]->nama_kriteria ?>bmit</button>
                    </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>