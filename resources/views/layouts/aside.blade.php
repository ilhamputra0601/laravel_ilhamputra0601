<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="/dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">CRUD</div>
                    <a class="nav-link" href="/hospital">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Data Rumah Sakit
                    </a>
                    <a class="nav-link" href="/patient">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Data pasien
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ Auth::user()->name }}
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            {{ $slot }}
        </main>
    </div>
</div>
