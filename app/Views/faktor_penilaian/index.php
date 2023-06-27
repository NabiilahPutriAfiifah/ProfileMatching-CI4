<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Faktor Penilaian</h3>
            </div>
            <div class="card-body">
                <!-- <a href="<?= base_url('faktor_penilaian/create_faktor_penilaian') ?>" class="btn btn-success mb-3"><i
                        class="fas fa-plus"></i>
                    Tambah Data</a> -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama Aspek</th>
                        <th>Nama Kriteria</th>
                        <th>Factor</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($faktor_penilaian)) > 0): 
                                $i = 1;
                        ?>
                        <?php foreach(esc($faktor_penilaian) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->nama_aspek) ?></td>
                            <td><?= esc($pr->nama_kriteria) ?></td>
                            <td><?= esc($pr->faktor) ?></td>
                            <td><?= esc($pr->nilai) ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="<?= base_url('faktor_penilaian/update_faktor_penilaian/'.$pr->id) ?>"
                                        class="btn text-light rounded mx-1" title="Edit Data"
                                        style="background-color: #445199;">
                                        <i class="fa fa-edit"></i> Edit Data
                                    </a>
                                    <!-- <a href="<?= base_url('faktor_penilaian/delete_faktor_penilaian/'.$pr->id) ?>"
                                        onclick="if(confirm('Are you sure to delete this data?') === false) event.preventDefault()"
                                        class="btn text-light rounded mx-1" title="Delete Data"
                                        style="background-color: #8080ed;">
                                        <i class="fa fa-trash"></i> Delete Data
                                    </a> -->
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
</section>

<?= $this->endSection() ?>