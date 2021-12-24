
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">WEB UAS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('C_first/welcome'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Administrator
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar Tugas</h6>

                        <a class="collapse-item" href="<?php echo base_url('C_first/home'); ?>">List Tugas</a>
                    </div>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Absensi</h6>

                        <a class="collapse-item" href="<?php echo base_url('C_absensi/home'); ?>">Absen pekerja</a>
                    </div>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar pekerja</h6>

                        <a class="collapse-item" href="<?php echo base_url('C_pekerja/home'); ?>">List Pekerja</a>
                    </div>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gaji</h6>

                        <a class="collapse-item" href="<?php echo base_url('C_gaji/home'); ?>">Gaji</a>
                    </div>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pendapatan</h6>

                        <a class="collapse-item" href="<?php echo base_url('C_pendapatan/home'); ?>">Pendapatan</a>
                    </div>

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Perbaikan</h6>

                        <a class="collapse-item" href="<?php echo base_url('C_pembaruan/home'); ?>">Perbaikan WEB</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">

            </div>

            <!-- Nav Item - Charts -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('C_grafik/grafik'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Chart Pendapatan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
