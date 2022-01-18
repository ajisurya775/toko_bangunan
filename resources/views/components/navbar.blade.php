<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('dashboard')}}"><h3>App UD.rizki</h3></a>
            <a class="navbar-brand hidden" href="{{ route('dashboard')}}"><h3>R</h3></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ request()->is('dashboard')? 'active':''}}">
                    <a href="{{ route('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                <li class="{{ request()->is('pesanan')? 'active':''}}">
                    <a href="{{ route('pesanan')}}"> <i class="menu-icon fa fa-paper-plane" aria-hidden="true"></i>Pesanan Masuk </a>
                </li>
                <li class="{{ request()->is('data-barang')? 'active':''}}">
                    <a href="{{ route('data.barang')}}"> <i class="menu-icon fa fa-server" aria-hidden="true"></i>Data Barang </a>
                </li>
                <li class="{{ request()->is('kategori')? 'active':''}}">
                  <a href="{{ route('kategori')}}"> <i class="menu-icon fa fa-share-alt" aria-hidden="true"></i>Kategori </a>
              </li>
              <li class="{{ request()->is('jangkauan')? 'active':''}}">
                <a href="{{ route('jangkauan')}}"> <i class="menu-icon fa fa-map-marker" aria-hidden="true"></i>Jangkauan </a>
            </li>
                <li class="{{ request()->is('laporan')? 'active':''}}">
                    <a href="{{ route('laporan')}}"> <i class="menu-icon fa fa-address-book" aria-hidden="true"></i></i>Laporan Penjualan </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{ asset('template_admin/images/admin.jpg')}}" alt="User Avatar">
                    </a>
                    <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Ganti Sandi</a>
                            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout')}}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </header><!-- /header -->