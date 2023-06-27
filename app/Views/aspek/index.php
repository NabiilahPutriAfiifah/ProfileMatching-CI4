<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Aspek</h3>
            </div>
            <div class="card-body">
                <!-- <a href="<?= base_url('aspek/create_aspek') ?>" class="btn btn-success mb-3"><i class="fas fa-plus"></i>
                    Tambah Data</a> -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama Aspek</th>
                        <th>Persentase</th>
                        <th>Bobot Core</th>
                        <th>Bobot Secondary</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($aspek)) > 0): 
                                $i = 1;
                        ?>
                        <?php foreach(esc($aspek) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->kode_aspek) ?></td>
                            <td><?= esc($pr->nama_aspek) ?></td>
                            <td><?= esc($pr->persentase) ?></td>
                            <td><?= esc($pr->bobot_core) ?></td>
                            <td><?= esc($pr->bobot_secondary) ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="<?= base_url('aspek/update_aspek/'.$pr->id) ?>"
                                        class="btn text-light rounded mx-1" title="Edit Data"
                                        style="background-color: #445199;">
                                        <i class="fa fa-edit"></i> Edit Data
                                    </a>
                                    <!-- <a href="<?= base_url('aspek/delete_aspek/'.$pr->id) ?>"
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