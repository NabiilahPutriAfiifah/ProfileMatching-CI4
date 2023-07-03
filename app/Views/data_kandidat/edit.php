<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <form action="<?= base_url('data_kandidat/submit_changes_data_kandidat') ?>" method="post">
                <input type="hidden" name="id"
                    value="<?= isset($data['id_nama_kandidat']) ? $data['id_nama_kandidat'] : '' ?>">
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
                        <label for="nama"><?= $faktor_penilaian[0]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i1" id="i1">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['i1']) && $data['i1'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['i1']) && $data['i1'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['i1']) && $data['i1'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['i1']) && $data['i1'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['i1']) && $data['i1'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[1]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i2" id="i2">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['i2']) && $data['i2'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['i2']) && $data['i2'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['i2']) && $data['i2'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['i2']) && $data['i2'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['i2']) && $data['i2'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[2]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i3" id="i3">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['i3']) && $data['i3'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['i3']) && $data['i3'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['i3']) && $data['i3'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['i3']) && $data['i3'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['i3']) && $data['i3'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[3]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i4" id="i4">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['i4']) && $data['i4'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['i4']) && $data['i4'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['i4']) && $data['i4'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['i4']) && $data['i4'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['i4']) && $data['i4'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[4]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i5" id="i5">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['i5']) && $data['i5'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['i5']) && $data['i5'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['i5']) && $data['i5'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['i5']) && $data['i5'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['i5']) && $data['i5'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[5]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i6" id="i6">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['i6']) && $data['i6'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['i6']) && $data['i6'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['i6']) && $data['i6'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['i6']) && $data['i6'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['i6']) && $data['i6'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[6]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i7" id="i7">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['i7']) && $data['i7'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['i7']) && $data['i7'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['i7']) && $data['i7'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['i7']) && $data['i7'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['i7']) && $data['i7'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[7]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i8" id="i8">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['i8']) && $data['i8'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['i8']) && $data['i8'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['i8']) && $data['i8'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['i8']) && $data['i8'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['i8']) && $data['i8'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[8]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i9" id="i9">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['i9']) && $data['i9'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['i9']) && $data['i9'] == "2" ? 'selected' : ''?>>2 - Buruk
                            </option>
                            <option value="3" <?= isset($data['i9']) && $data['i9'] == "3" ? 'selected' : ''?>>3 - Cukup
                            </option>
                            <option value="4" <?= isset($data['i9']) && $data['i9'] == "4" ? 'selected' : ''?>>4 - Baik
                            </option>
                            <option value="5" <?= isset($data['i9']) && $data['i9'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama"><?= $faktor_penilaian[9]->nama_kriteria ?> :</label>
                        <select class="form-control select2" name="i10" id="i10">
                            <option disabled selected hidden>Pilih Data</option>
                            <option value="1" <?= isset($data['i10']) && $data['i10'] == "1" ? 'selected' : ''?>>1 -
                                Sangat Buruk</option>
                            <option value="2" <?= isset($data['i10']) && $data['i10'] == "2" ? 'selected' : ''?>>2 -
                                Buruk
                            </option>
                            <option value="3" <?= isset($data['i10']) && $data['i10'] == "3" ? 'selected' : ''?>>3 -
                                Cukup
                            </option>
                            <option value="4" <?= isset($data['i10']) && $data['i10'] == "4" ? 'selected' : ''?>>4 -
                                Baik
                            </option>
                            <option value="5" <?= isset($data['i10']) && $data['i10'] == "5" ? 'selected' : ''?>>5 -
                                Sangat Baik</option>
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