<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart | Navelle</title>

    <link rel="stylesheet" href="{{ asset('assets-guest/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/elegant-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/style.css') }}">

    <style>
        .navelle-cart {
            padding: 60px 0;
        }

        .navelle-cart-heading {
            text-align: center;
            margin-bottom: 40px;
        }

        .navelle-cart-heading span {
            color: #d77f9e;
            font-size: 12px;
            letter-spacing: 2px;
        }

        .navelle-cart-heading h2 {
            color: #393036;
            font-weight: 700;
            margin: 10px 0;
        }

        .navelle-cart-table th {
            color: #d77f9e;
            font-size: 13px;
            border-top: 0;
        }

        .navelle-cart-table td {
            vertical-align: middle;
        }

        .navelle-cart-total {
            background: #fff9fb;
            padding: 25px;
            border-radius: 10px;
            margin-top: 25px;
        }

        .navelle-cart-total h4 {
            color: #d77f9e;
            margin-bottom: 20px;
        }

        .navelle-empty {
            text-align: center;
            padding: 50px 15px;
            background: #fff9fb;
            border-radius: 10px;
        }

        .navelle-empty h4 {
            margin-bottom: 12px;
        }

        .navelle-cart-btn {
            display: inline-block;
            background: #d77f9e;
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            font-weight: 600;
            border: none;
        }

        .navelle-cart-btn:hover {
            color: white;
            background: #c66d8d;
        }
    </style>
</head>

<body>

    @include('guest.partials.navbar')

    <section class="navelle-cart">
        <div class="container">

            <div class="navelle-cart-heading">
                <span>NAVELLE SHOPPING BAG</span>
                <h2>My Shopping Cart</h2>
                <p>Periksa kembali produk pilihanmu sebelum melanjutkan belanja.</p>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if (empty($keranjang))
                <div class="navelle-empty">
                    <h4>Keranjang kamu masih kosong</h4>
                    <p>Yuk, temukan produk favoritmu di Navelle.</p>

                    <a href="{{ url('/') }}#produk" class="navelle-cart-btn">
                        Belanja Sekarang
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table navelle-cart-table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($keranjang as $item)
                                <tr>
                                    <td>{{ $item['nama_produk'] }}</td>

                                    <td>
                                        Rp{{ number_format($item['harga'], 0, ',', '.') }}
                                    </td>

                                    <td>{{ $item['jumlah'] }}</td>

                                    <td>
                                        Rp{{ number_format($item['harga'] * $item['jumlah'], 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="navelle-cart-total text-right">
                    <h4>
                        Total:
                        Rp{{ number_format(collect($keranjang)->sum(fn ($item) => $item['harga'] * $item['jumlah']), 0, ',', '.') }}
                    </h4>

                    <a href="{{ url('/') }}#produk" class="navelle-cart-btn">
                        Lanjut Belanja
                    </a>
                </div>
            @endif

        </div>
    </section>

    @include('guest.partials.footer')

    <script src="{{ asset('assets-guest/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets-guest/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-guest/js/main.js') }}"></script>

</body>
</html>
