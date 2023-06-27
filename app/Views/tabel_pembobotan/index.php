<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Pembobotan</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Selisih</th>
                        <th>Bobot</th>
                        <th>Keterangan</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($tabel_pembobotan)) > 0): 
                                $i = 1;
                        ?>
                        <?php foreach(esc($tabel_pembobotan) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->selisih) ?></td>
                            <td><?= esc($pr->bobot) ?></td>
                            <td><?= esc($pr->keterangan) ?></td>

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