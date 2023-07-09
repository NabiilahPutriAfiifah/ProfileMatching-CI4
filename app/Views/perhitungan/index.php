<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Total</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama Kandidat</th>
                        <th>Nilai Total</th>
                        <th>Ranking</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($perhitungan)) > 0): 
                                $i = 1;
                                $j = 1;
                        ?>
                        <?php foreach(esc($perhitungan) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->nama_pendaftar) ?></td>
                            <td><?= $pr->nilai_total  ?></td>
                            <td><?= $j ?></td>
                        </tr>
                        <?php $j++ ?>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>