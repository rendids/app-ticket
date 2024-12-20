<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand"><a href="/" class="brand-link">
            <span class=" fw-light">Travela</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.destination') }}" class="nav-link">
                        <i class="nav-icon bi bi-geo-alt-fill"></i>
                        <p>Destinasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.package.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>Paket Tour</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.order') }}" class="nav-link">
                        <i class="nav-icon bi bi-basket"></i>
                        <p>Pesanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.history') }}" class="nav-link">
                        <i class="nav-icon bi bi-clock-history"></i>
                        <p>History Pemesanan</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
