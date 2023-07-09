<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<!-- Main content -->
<section class="content"
    style="background-image: url('/asset/image/bg.jpg'); background-repeat:no-repeat; background-size:cover">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box" style="background-color:#ce92cf;">
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
            <div class="col-lg-3 col-6">
                <div class="small-box" style="background-color:#ffb0ab;">
                    <div class="inner">
                        <h3><?= $faktor_penilaian ?> Faktor</h3>
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
            <div class="col-lg-3 col-6">
                <div class="small-box" style="background-color:#f8e4b5;">
                    <div class="inner">
                        <h3><?= $nama_kandidat ?> Nama</h3>
                        <p>Nama Kandidat</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-marker"></i>
                    </div>
                    <a class="small-box-footer" href="<?=base_url('nama_kandidat')?>">Selengkapnya... <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box" style="background-color:#d8ffe3;">
                    <div class="inner">
                        <h3><?= $data_kandidat ?> Data</h3>
                        <p>Data Kandidat</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-marker"></i>
                    </div>
                    <a class="small-box-footer" href="<?=base_url('data_kandidat')?>">Selengkapnya... <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row justify-content-center mt-2">
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
        </div>
    </div>
</section>

<?= $this->endSection() ?>