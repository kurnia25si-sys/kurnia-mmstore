<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Navelle Fashion Store">
    <meta name="keywords" content="Navelle, fashion, clothing, wanita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navelle</title>

    <!-- CSS Guest -->
    <link rel="stylesheet" href="{{ asset('assets-guest/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/elegant-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/style.css') }}">
</head>

<body>

    <!-- Offcanvas Menu -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch">
                <img src="{{ asset('assets-guest/img/icon/search.png') }}" alt="Search">
            </a>
            <a href="#">
                <img src="{{ asset('assets-guest/img/icon/heart.png') }}" alt="Wishlist">
            </a>
            <a href="#">
                <img src="{{ asset('assets-guest/img/icon/cart.png') }}" alt="Cart">
                <span>0</span>
            </a>
            <div class="price">Rp0</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>IDR <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>IDR</li>
                                    <li>EUR</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{ url('/') }}">
<img src="{{ asset('assets-guest/img/logo navelle.png') }}"
     alt="Navelle"
     style="width: 120px; height: auto;">                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#">Shop</a></li>
                            <li>
                                <a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Shop Details</a></li>
                                    <li><a href="#">Shopping Cart</a></li>
                                    <li><a href="#">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch">
                            <img src="{{ asset('assets-guest/img/icon/search.png') }}" alt="Search">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets-guest/img/icon/heart.png') }}" alt="Wishlist">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets-guest/img/icon/cart.png') }}" alt="Cart">
                            <span>0</span>
                        </a>
                        <div class="price">Rp0</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="hero__slider owl-carousel">

            <div class="hero__items set-bg"
                 data-setbg="{{ asset('assets-guest/img/hero/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Style That Feels Like You</h2>
                                <p>Temukan koleksi fashion wanita yang stylish, nyaman, dan cocok untuk setiap momen spesialmu.</p>
                                <a href="#produk" class="primary-btn">
                                     SHOP NOW <span class="arrow_right"></span>
                                </a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero__items set-bg"
                 data-setbg="{{ asset('assets-guest/img/hero/hero-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>New Collection</h6>
                                <h2>Style That Feels Like You</h2>
                                <p>
                                     Temukan berbagai pilihan fashion wanita yang stylish,
                                     nyaman, dan cocok untuk menemani aktivitasmu setiap hari.
                                </p>
                                <a href="#produk" class="primary-btn">
                                SHOP NOW <span class="arrow_right"></span>
                                </a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<!-- Categories -->
@include('guest.partials.kategori')

<section class="navelle-collection-section">
    <div class="container">
        <div class="navelle-collection-heading">
            <span>CHOOSE YOUR STYLE</span>
            <h2>Explore Our Collections</h2>
            <p>Temukan inspirasi gaya yang cocok untuk setiap aktivitas dan kesempatan.</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="navelle-collection-card">
                    <img src="{{ asset('assets-guest/img/collection/casual.jpg') }}" alt="Casual Look">
                    <div class="collection-info">
                        <h4>Casual Look</h4>
                        <p>Outfit santai yang nyaman dan stylish untuk aktivitas sehari-hari.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="navelle-collection-card">
                    <img src="{{ asset('assets-guest/img/collection/office.jpg') }}" alt="Office Wear">
                    <div class="collection-info">
                        <h4>Office Wear</h4>
                        <p>Pilihan outfit rapi dan elegan untuk bekerja maupun kuliah.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="navelle-collection-card">
                    <img src="{{ asset('assets-guest/img/collection/essentials.jpg') }}" alt="Everyday Essentials">
                    <div class="collection-info">
                        <h4>Everyday Essentials</h4>
                        <p>Koleksi simpel yang mudah dipadukan untuk berbagai kesempatan.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="navelle-collection-card">
                    <img src="{{ asset('assets-guest/img/collection/elegant.jpg') }}" alt="Elegant Style">
                    <div class="collection-info">
                        <h4>Elegant Style</h4>
                        <p>Tampilan feminin dan anggun untuk acara spesial.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products -->
<section class="product spad" id="produk">
    <div class="container">

        <!-- Judul Produk -->
        <div class="section-title">
            <span>HANDPICKED FOR YOU</span>
            <h2>Our Latest Collection</h2>
            <p>
                Temukan koleksi fashion pilihan untuk melengkapi penampilanmu.
            </p>
        </div>

        <!-- Daftar Produk -->
        <div class="row">
@forelse ($produk as $item)
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <div class="product__item">

            <div class="product__item__pic set-bg"
                @if (!empty($item->gambar))
                    data-setbg="{{ asset('storage/' . $item->gambar) }}"
                @else
                    data-setbg="{{ asset('assets-guest/img/product/product-1.jpg') }}"
                @endif
            >
                <ul class="product__hover">
                    <li>
                        <a href="#">
                            <img
                                src="{{ asset('assets-guest/img/icon/heart.png') }}"
                                alt="Wishlist">
                        </a>
                    </li>
                </ul>
            </div>

            <div class="product__item__text">
                <span>
                    {{ $item->kategori_nama ?? $item->kategori ?? 'Fashion' }}
                </span>

                <h6>{{ $item->nama_produk }}</h6>

                <h5>
                    Rp{{ number_format($item->harga, 0, ',', '.') }}
                </h5>

                <p>Stok: {{ $item->stok }}</p>

                <div class="navelle-product-actions">
                    <a href="{{ route('produk.detail', $item->id) }}"
                       class="navelle-btn-detail">
                        View Product
                    </a>

                    <form action="{{ route('keranjang.tambah', $item->id) }}"
                          method="POST">
                        @csrf
                        <button type="submit" class="navelle-btn-cart"
                            {{ $item->stok <= 0 ? 'disabled' : '' }}>
                            <i class="fa fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@empty
    <div class="col-12 text-center">
        <p>Belum ada produk yang tersedia.</p>
    </div>
@endforelse

        </div>

    </div>
</section>

    <!-- Instagram -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="instagram__pic__item set-bg"
                                 data-setbg="{{ asset('assets-guest/img/instagram/instagram-' . $i . '.jpg') }}">
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Follow Our Style</h2>
                        <p>
                           Dapatkan inspirasi outfit dan lihat berbagai koleksi
                            terbaru dari Navelle.
                        </p>
                        <h3>#NavelleStyle</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ulasan Pelanggan -->
    @include('guest.partials.ulasan')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets-guest/img/logo navelle.png') }}" alt="Navelle">
                            </a>
                        </div>
                        <p>Navelle menghadirkan pilihan fashion yang stylish dan nyaman untuk berbagai momen.</p>
                        <a href="#">
                            <img src="{{ asset('assets-guest/img/payment.png') }}" alt="Payment Methods">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Information</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivery</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Newsletter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals and promotions!</p>
                            <form action="#" method="get">
                                <input type="email" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <p>
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                            Navelle. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Search -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here...">
            </form>
        </div>
    </div>

    <!-- JavaScript Guest -->
    <script src="{{ asset('assets-guest/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets-guest/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-guest/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets-guest/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets-guest/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets-guest/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets-guest/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets-guest/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets-guest/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets-guest/js/main.js') }}"></script>

</body>
</html>
