<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Perilaku</h3>
            </div>
            <div class="card-body">
                <a href="<?= base_url('data_kandidat/create_perilaku') ?>" class="btn btn-success mb-3"><i
                        class="fas fa-plus"></i>
                    Tambah Data</a>
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
                        <?php   if(count(esc($perilaku)) > 0): 
                                $i = 1;
                        ?>
                        <?php foreach(esc($perilaku) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->nama_pendaftar) ?></td>
                            <td><?= esc($pr->p1) ?></td>
                            <td><?= esc($pr->p2) ?></td>
                            <td><?= esc($pr->p3) ?></td>
                            <td><?= esc($pr->p4) ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="<?= base_url('data_kandidat/update_perilaku/'.$pr->id) ?>"
                                        class="btn text-light rounded mx-1" title="Edit Data"
                                        style="background-color: #445199;">
                                        <i class="fa fa-edit"></i> Edit Data
                                    </a>
                                    <a href="<?= base_url('data_kandidat/delete_perilaku/'.$pr->id) ?>"
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