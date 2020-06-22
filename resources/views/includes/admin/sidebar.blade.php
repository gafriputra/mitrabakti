<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="index.html" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Product</li>
                <li  >
                    <a href="{{route('product-categories.index')}}">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Kategori
                    </a>
                </li>
                <li  >
                    <a href="{{route('products.index')}}">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Produk
                    </a>
                </li>
                <li








                >
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Transaksi
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('transaction.index')}}">
                                <i class="metismenu-icon"></i>
                                Semua Transaksi
                            </a>
                        </li>
                        <li>
                            <a href="{{route('transaction.index')}}?status=pending">
                                <i class="metismenu-icon">
                                </i>Transaksi Baru
                            </a>
                        </li>
                        <li>
                            <a href="{{route('transaction.index')}}?status=ongoing">
                                <i class="metismenu-icon">
                                </i>Transaksi Diproses
                            </a>
                        </li>
                        <li>
                            <a href="{{route('transaction.index')}}?status=shipping">
                                <i class="metismenu-icon">
                                </i>Transaksi Dikirim
                            </a>
                        </li>
                        <li>
                            <a href="{{route('transaction.index')}}?status=success">
                                <i class="metismenu-icon">
                                </i>Transaksi Selesai
                            </a>
                        </li>
                        <li>
                            <a href="{{route('transaction.index')}}?status=failed">
                                <i class="metismenu-icon">
                                </i>Transaksi Dibatalkan
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="app-sidebar__heading">Company Profile</li>
                <li>
                    <a href="{{route('banners.index')}}">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Banners
                    </a>
                </li>
                <li>
                    <a href="{{route('setting.edit',1)}}">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Web Setting
                    </a>
                </li>
                <li>
                    <a href="{{route('services.index')}}">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Services
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
