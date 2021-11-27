<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="nav-link" href="<?= base_url('admin/home'); ?>">SPN Cisarua</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= base_url('admin/auth'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <div class="sidenav">
                        <img src="<?= base_url('assets/images/spn.png'); ?>" alt="Lambang SPN">
                        </div>            
                            <div class="sb-sidenav-menu-heading">Manajemen</div>
                            <a class="nav-link" href="<?= base_url('admin/home'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Personil 
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/struktur'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Struktur
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/struktur/upStruktur'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-upload"></i></div>
                                Upload
                            </a>
                        </div>
                    </div>
                </nav>
            </div>