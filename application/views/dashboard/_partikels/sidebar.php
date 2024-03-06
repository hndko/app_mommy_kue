<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>app/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UDO Admin</div>
    </a>

    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>app/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Fitur
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <a class="collapse-item" href="">Akun</a> -->
                <a class="collapse-item" href="<?= base_url() ?>app/acara">Acara</a>
                <a class="collapse-item" href="<?= base_url() ?>app/sosial_media">Sosial Media</a>
                <a class="collapse-item" href="<?= base_url() ?>app/landing_pages">Landing Pages</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>app/portofolio">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Portofolio</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>app/galeri">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Galeri</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>app/ucapan">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Ucapan</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">