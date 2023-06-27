<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Sikap Kerja</h3>
            </div>
            <div class="card-body">
                <a href="<?= base_url('data_kandidat/create_sikap_kerja') ?>" class="btn btn-success mb-3"><i
                        class="fas fa-plus"></i>
                    Tambah Data</a>
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
                        <?php   if(count(esc($sikap_kerja)) > 0): 
                                $i = 1;
                        ?>
                        <?php foreach(esc($sikap_kerja) as $pr) : ?>
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
                                    <a href="<?= base_url('data_kandidat/update_sikap_kerja/'.$pr->id) ?>"
                                        class="btn text-light rounded mx-1" title="Edit Data"
                                        style="background-color: #445199;">
                                        <i class="fa fa-edit"></i> Edit Data
                                    </a>
                                    <a href="<?= base_url('data_kandidat/delete_sikap_kerja/'.$pr->id) ?>"
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
</section>

<?= $this->endSection() ?>