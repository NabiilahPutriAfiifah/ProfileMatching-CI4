<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6 col-6">
                <div class="small-box" style="background-color:#209cd8;">
                    <div class="inner">
                        <h3><?= $aspek ?> Aspek</h3>
                        <p>Aspek</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-spell-check"></i>
                    </div>

                    <a <?php if(session()->get('role_id') == 1 ) { ?> href="<?=base_url('aspek')?>" <?php } ?>
                        class="small-box-footer">Selengkapnya... <i class="fas fa-arrow-circle-right"></i></a>

                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="small-box" style="background-color:#d79ee8;">
                    <div class="inner">
                        <h3><?= $faktor_penilaian ?> Faktor Penilaian</h3>
                        <p>Faktor Penilaian</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-marker"></i>
                    </div>

                    <a <?php if(session()->get('role_id') == 1 ) { ?> href="<?=base_url('faktor_penilaian')?>"
                        <?php } ?> class="small-box-footer">Selengkapnya... <i
                            class="fas fa-arrow-circle-right"></i></a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-6 text-center">
                        <h1>Profile Matching | CI4</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <img src="/asset/image/Kantor.jpeg" alt="Gambar" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Sales</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="chart tab-pane active" id="revenue-chart"
                                style="position: relative; height: 300px;">
                                <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                            </div>
                            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                            </div>
                        </div>
                    </div>
            </section> -->
        </div>
    </div>
</section>

<?= $this->endSection() ?>