<!-- Header -->
<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <!-- Top Right -->
                    @auth
                    <div class="right-content">
                        <ul class="list-main d-none d-md-block">
                            <li>
                                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout.user')}}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                    </form>
                            </li>
                        </ul>
                        <ul class="list-main d-block d-md-none">
                            <li><p>Hi!, {{ Auth::User()->name}}</p></li>
                        </ul>
                    </div>
                    @else
                    <div class="right-content">
                        <ul class="list-main">
                            <li><a href="{{ route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a></li>
                        </ul>
                    </div>
                    @endauth
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ route('/')}}"><h3>TOKO UD.RIZKI</h3></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form" action="{{ route('produk') }}" method="get">
                                <input type="text" placeholder="Cari disini..." name="search" value="{{ request('search')}}">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option selected="selected">All Category</option>
                                <option>Listrik</option>
                                <option>Bahan Bangunan</option>
                                <option>Alat Bangunan</option>
                            </select>
                            <form action="{{ route('produk')}}" method="GET">
                                <input name="search" placeholder="Search Products Here....." type="search">
                                <button class="btnn "><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        @auth
                        <div class="sinlge-bar">
                            <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i><small>Hi!, {{ Auth::user()->name}}</small></a>
                        </div>
                        <div class="sinlge-bar shopping">
                            {{-- <a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a> --}}
                            <!-- Shopping Item -->
                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>2 Items</span>
                                    <a href="#">View Cart</a>
                                </div>
                                <ul class="shopping-list">
                                    <li>
                                        <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                        <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                        <h4><a href="#">Woman Ring</a></h4>
                                        <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                    </li>
                                    <li>
                                        <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                        <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                        <h4><a href="#">Woman Necklace</a></h4>
                                        <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                    </li>
                                </ul>
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span class="total-amount">$134.00</span>
                                    </div>
                                    <a href="checkout.html" class="btn animate">Checkout</a>
                                </div>
                            </div>
                            <!--/ End Shopping Item -->
                        </div>
                        @else
                        <P>Selamat datang di toko Ud.rizki</P>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li><a href="{{ route('/')}}">Beranda</a></li>
                                            <li class="{{ request()->is('produk')? 'active':''}}"><a href="{{ route('produk')}}">Produk</a></li>												
                                            @auth
                                            <li class="{{ request()->is('keranjang')? 'active':''}}"><a href="{{ route('keranjang')}}">Keranjang</a></li>
                                            <li class="{{ request()->is('history')? 'active':''}}"><a href="{{ route('history')}}">Histori Belanja</a></li>
                                            @endauth									
                                            <li class="{{ request()->is('kontak')? 'active':''}}"><a href="{{ route('kontak')}}">Kontak Kami</a></li>
                                            @auth
                                            <li>
                                                <a class="nav-link d-block d-md-none" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
                                                <form id="logout-form" action="{{ route('logout.user')}}" method="POST">
                                                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                                </form>
                                            </li>
                                            @endauth
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header -->