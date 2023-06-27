<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nama Kandidat Pendaftar</h3>
            </div>
            <div class="card-body">
                <a href="<?= base_url('nama_kandidat/create_nama_kandidat') ?>" class="btn btn-success mb-3"><i
                        class="fas fa-plus"></i>
                    Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Kode Kandidat</th>
                        <th>Nama Kandidat</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($nama_kandidat)) > 0): 
                                $i = 1;
                        ?>
                        <?php foreach(esc($nama_kandidat) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->kode_pendaftar) ?></td>
                            <td><?= esc($pr->nama_pendaftar) ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="<?= base_url('nama_kandidat/update_nama_kandidat/'.$pr->id) ?>"
                                        class="btn text-light rounded mx-1" title="Edit Data"
                                        style="background-color: #445199;">
                                        <i class="fa fa-edit"></i> Edit Data
                                    </a>
                                    <a href="<?= base_url('nama_kandidat/delete_nama_kandidat/'.$pr->id) ?>"
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
</section>

<?= $this->endSection() ?>