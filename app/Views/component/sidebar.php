<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #23252e;">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard') ?>" class="brand-link">
        <!-- <i class="fab fa-cotton-bureau ml-3"></i> -->
        <i class="fas fa-laptop-code ml-3"></i>
        <span class="brand-text font-weight-semibold px-3">Profile Matching CI4</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/asset/image/avatar.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= session()->get('name') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Main Menu</li>
                <li class="nav-item">
                    <a href="<?= base_url('dashboard')?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php if(session()->get('role_id') == 1) { ?>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bullseye"></i>
                        <p> Nilai Target <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('aspek') ?>" class="nav-link">
                                <i class="nav-icon fas fa-spell-check"></i>
                                <p> Aspek </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('faktor_penilaian') ?>" class="nav-link">
                                <i class="nav-icon fas fa-marker"></i>
                                <p> Faktor Penilaian </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('tabel_pembobotan') ?>" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p> Tabel Pembobotan </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="<?= base_url('nama_kandidat') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>Nama Kandidat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('data_kandidat') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>Data Kandidat</p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p>Perhitungan</p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p> Perhitungan <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('nilai_gap') ?>" class="nav-link">
                                <i class="nav-icon fas fa-file-signature"></i>
                                <p> Menghitung GAP </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pembobotan_gap') ?>" class="nav-link">
                                <i class="nav-icon fas fa-square-root-alt"></i>
                                <p> Pembobotan GAP </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('nilai_total') ?>" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p> Menghitung Total </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('perhitungan') ?>" class="nav-link">
                                <i class="nav-icon fas fa-sort-numeric-down"></i>
                                <p> Perangkingan </p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-header">Administrator</li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <p><i class="nav-icon fas fa-user"></i> Profil</p>
                    </a>
                </li> -->


                <li class="nav-item">
                    <a href="<?php echo base_url('/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>