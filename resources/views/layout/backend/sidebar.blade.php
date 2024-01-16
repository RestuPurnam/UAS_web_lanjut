<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ url('/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{route('kategori.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Kategori
                </a>
                <a class="nav-link" href="{{route('produk.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Produk
                </a>
                <a class="nav-link" href="{{route('customer.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-person"></i></div>
                    Customer
                </a>
                <a class="nav-link" href="{{route('transaksi.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-shop"></i></div>
                    Transaksi
                </a>




    </nav>
</div>
