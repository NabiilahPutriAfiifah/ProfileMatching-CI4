<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Kecerdasan</h3>
            </div>
            <div class="card-body">
                <a href="<?= base_url('data_kandidat/create_data_kandidat') ?>" class="btn btn-success mb-3"><i
                        class="fas fa-plus"></i>
                    Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama Kandidat</th>
                        <th>I1</th>
                        <th>I2</th>
                        <th>I3</th>
                        <th>I4</th>
                        <th>I5</th>
                        <th>I6</th>
                        <th>I7</th>
                        <th>I8</th>
                        <th>I9</th>
                        <th>I10</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($data_kandidat)) > 0): 
                                $i = 1;
                        ?>
                        <?php foreach(esc($data_kandidat) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->nama_pendaftar) ?></td>
                            <td><?= esc($pr->i1) ?></td>
                            <td><?= esc($pr->i2) ?></td>
                            <td><?= esc($pr->i3) ?></td>
                            <td><?= esc($pr->i4) ?></td>
                            <td><?= esc($pr->i5) ?></td>
                            <td><?= esc($pr->i6) ?></td>
                            <td><?= esc($pr->i7) ?></td>
                            <td><?= esc($pr->i8) ?></td>
                            <td><?= esc($pr->i9) ?></td>
                            <td><?= esc($pr->i10) ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="<?= base_url('data_kandidat/update_data_kandidat/'.$pr->id_nama_kandidat) ?>"
                                        class="btn text-light rounded mx-1" title="Edit Data"
                                        style="background-color: #445199;">
                                        <i class="fa fa-edit"></i> Edit Data
                                    </a>
                                    <a href="<?= base_url('data_kandidat/delete_data_kandidat/'.$pr->id_nama_kandidat) ?>"
                                        onclick="if(confirm('Are you sure to delete this data?') === false) event.preventDefault()"
                                        class="btn text-light rounded mx-1" title="Delete Data"
                                        style="background-color: #8080ed;">
                                        <i class="fa fa-trash"></i> Delete Data
                                    </a>
                                </div>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-header">
        <div>
            <b>
                <h3 class="card-title">Keterangan : </h3>
            </b>
        </div>
        <br>
        <div class="form-group">
            <p class="m-0">I1 : <?= $faktor_penilaian[0]->nama_kriteria ?></p>
            <p class="m-0">I2 : <?= $faktor_penilaian[1]->nama_kriteria ?></p>
            <p class="m-0">I3 : <?= $faktor_penilaian[2]->nama_kriteria ?></p>
            <p class="m-0">I4 : <?= $faktor_penilaian[3]->nama_kriteria ?></p>
            <p class="m-0">I5 : <?= $faktor_penilaian[4]->nama_kriteria ?></p>
            <p class="m-0">I6 : <?= $faktor_penilaian[5]->nama_kriteria ?></p>
            <p class="m-0">I7 : <?= $faktor_penilaian[6]->nama_kriteria ?></p>
            <p class="m-0">I8 : <?= $faktor_penilaian[7]->nama_kriteria ?></p>
            <p class="m-0">I9 : <?= $faktor_penilaian[8]->nama_kriteria ?></p>
            <p class="m-0">I10 : <?= $faktor_penilaian[9]->nama_kriteria ?></p>
        </div>

    </div>

    <!-- Sikap Kerja -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Sikap Kerja</h3>
            </div>
            <div class="card-body">
                <!-- <a href="#" class="btn btn-success mb-3"><i class="fas fa-plus"></i>
                    Tambah Data</a> -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama Kandidat</th>
                        <th>S1</th>
                        <th>S2</th>
                        <th>S3</th>
                        <th>S4</th>
                        <th>S5</th>
                        <th>S6</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($data_kandidat)) > 0): 
                                $i = 1;
                        ?>
                        <?php foreach(esc($data_kandidat) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->nama_pendaftar) ?></td>
                            <td><?= esc($pr->s1) ?></td>
                            <td><?= esc($pr->s2) ?></td>
                            <td><?= esc($pr->s3) ?></td>
                            <td><?= esc($pr->s4) ?></td>
                            <td><?= esc($pr->s5) ?></td>
                            <td><?= esc($pr->s6) ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="<?= base_url('data_kandidat/update_data_kandidat/'.$pr->id) ?>"
                                        class="btn text-light rounded mx-1" title="Edit Data"
                                        style="background-color: #445199;">
                                        <i class="fa fa-edit"></i> Edit Data
                                    </a>
                                    <a href="<?= base_url('data_kandidat/delete_data_kandidat/'.$pr->id) ?>"
                                        onclick="if(confirm('Are you sure to delete this data?') === false) event.preventDefault()"
                                        class="btn text-light rounded mx-1" title="Delete Data"
                                        style="background-color: #8080ed;">
                                        <i class="fa fa-trash"></i> Delete Data
                                    </a>
                                </div>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-header">
        <div>
            <b>
                <h3 class="card-title">Keterangan : </h3>
            </b>
        </div>
        <br>
        <div class="form-group">
            <p class="m-0">S1 : <?= $faktor_penilaian[10]->nama_kriteria ?></p>
            <p class="m-0">S2 : <?= $faktor_penilaian[11]->nama_kriteria ?></p>
            <p class="m-0">S3 : <?= $faktor_penilaian[12]->nama_kriteria ?></p>
            <p class="m-0">S4 : <?= $faktor_penilaian[13]->nama_kriteria ?></p>
            <p class="m-0">S5 : <?= $faktor_penilaian[14]->nama_kriteria ?></p>
            <p class="m-0">S6 : <?= $faktor_penilaian[15]->nama_kriteria ?></p>
        </div>

    </div>

    <!-- Perilaku -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Perilaku</h3>
            </div>
            <div class="card-body">
                <!-- <a href="#" class="btn btn-success mb-3"><i class="fas fa-plus"></i>
                    Tambah Data</a> -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama Kandidat</th>
                        <th>P1</th>
                        <th>P2</th>
                        <th>P3</th>
                        <th>P4</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($data_kandidat)) > 0): 
                                $i = 1;
                        ?>
                        <?php foreach(esc($data_kandidat) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->nama_pendaftar) ?></td>
                            <td><?= esc($pr->p1) ?></td>
                            <td><?= esc($pr->p2) ?></td>
                            <td><?= esc($pr->p3) ?></td>
                            <td><?= esc($pr->p4) ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="<?= base_url('data_kandidat/update_data_kandidat/'.$pr->id) ?>"
                                        class="btn text-light rounded mx-1" title="Edit Data"
                                        style="background-color: #445199;">
                                        <i class="fa fa-edit"></i> Edit Data
                                    </a>
                                    <a href="<?= base_url('data_kandidat/delete_data_kandidat/'.$pr->id) ?>"
                                        onclick="if(confirm('Are you sure to delete this data?') === false) event.preventDefault()"
                                        class="btn text-light rounded mx-1" title="Delete Data"
                                        style="background-color: #8080ed;">
                                        <i class="fa fa-trash"></i> Delete Data
                                    </a>
                                </div>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-header">
        <div>
            <b>
                <h3 class="card-title">Keterangan : </h3>
            </b>
        </div>
        <br>
        <div class="form-group">
            <p class="m-0">P1 : <?= $faktor_penilaian[16]->nama_kriteria ?></p>
            <p class="m-0">P2 : <?= $faktor_penilaian[17]->nama_kriteria ?></p>
            <p class="m-0">P3 : <?= $faktor_penilaian[18]->nama_kriteria ?></p>
            <p class="m-0">P4 : <?= $faktor_penilaian[19]->nama_kriteria ?></p>
        </div>

    </div>
</section>

<?= $this->endSection() ?>