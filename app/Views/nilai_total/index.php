<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Total Kecerdasan</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama Kandidat</th>
                        <th>Core Factor</th>
                        <th>Secondary Factor</th>
                        <th>Nilai Total</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($nilai_total)) > 0): 
                                $i = 1;
                                $j = 0;
                        ?>
                        <?php foreach(esc($nilai_total) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->nama_pendaftar) ?></td>
                            <td><?= $pr->core_factor_i  ?></td>
                            <td><?= $pr->secondary_factor_i  ?></td>
                            <td><?= $pr->nilai_total_i  ?></td>
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


<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Total Sikap Kerja</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama Kandidat</th>
                        <th>Core Factor</th>
                        <th>Secondary Factor</th>
                        <th>Nilai Total</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($nilai_total)) > 0): 
                                $i = 1;
                                $j = 0;
                        ?>
                        <?php foreach(esc($nilai_total) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->nama_pendaftar) ?></td>
                            <td><?= $pr->core_factor_s  ?></td>
                            <td><?= $pr->secondary_factor_s  ?></td>
                            <td><?= $pr->nilai_total_s  ?></td>
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

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Total Perilaku</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama Kandidat</th>
                        <th>Core Factor</th>
                        <th>Secondary Factor</th>
                        <th>Nilai Total</th>
                    </thead>
                    <tbody>
                        <?php   if(count(esc($nilai_total)) > 0): 
                                $i = 1;
                                $j = 0;
                        ?>
                        <?php foreach(esc($nilai_total) as $pr) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($pr->nama_pendaftar) ?></td>
                            <td><?= $pr->core_factor_p  ?></td>
                            <td><?= $pr->secondary_factor_p  ?></td>
                            <td><?= $pr->nilai_total_p  ?></td>
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