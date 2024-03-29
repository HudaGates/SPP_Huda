 <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png"  class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/dist/img/PP.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ahmad M Huda</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo base_url('dashboard')?>" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('siswa') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('petugas') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Petugas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('kelas') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('spp') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data SPP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('transaksi') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transaksi Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
