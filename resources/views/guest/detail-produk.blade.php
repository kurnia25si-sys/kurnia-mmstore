<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $produk->nama_produk }} | Navelle</title>

    <link rel="stylesheet" href="{{ asset('assets-guest/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/style.css') }}">

    <style>
        body {
            background: #fff8fa;
            color: #444;
        }

        .detail-container {
            max-width: 1100px;
            margin: 60px auto;
            padding: 30px;
            background: white;
            border-radius: 15px;
        }

        .detail-image {
            width: 100%;
            height: 430px;
            object-fit: contain;
            background: #fff8fa;
            border-radius: 12px;
        }

        .detail-info h2 {
            color: #d66b91;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .detail-price {
            color: #d66b91;
            font-size: 25px;
            font-weight: bold;
            margin: 20px 0;
        }

        .detail-button {
            background: #d66b91;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 6px;
            cursor: pointer;
        }

        .detail-button:hover {
            background: #bd557c;
            color: white;
        }

        .back-button {
            color: #d66b91;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>

<body>

@include('guest.partials.navbar')

<div class="container detail-container">
    <div class="row align-items-center">

        <div class="col-md-6 mb-4">
            @if ($produk->gambar)
                <img
                    src="{{ asset('storage/' . $produk->gambar) }}"
                    alt="{{ $produk->nama_produk }}"
                    class="detail-image"
                >
            @else
                <div class="detail-image d-flex align-items-center justify-content-center">
                    Gambar produk belum tersedia
                </div>
            @endif
        </div>

        <div class="col-md-6 detail-info">
            <h2>{{ $produk->nama_produk }}</h2>

            <p>
                Kategori:
                {{ $produk->kategori_nama ?? $produk->kategori ?? '-' }}
            </p>

            <div class="detail-price">
                Rp {{ number_format($produk->harga, 0, ',', '.') }}
            </div>

            <p>{{ $produk->deskripsi ?? 'Belum ada deskripsi produk.' }}</p>

            <p>Stok: {{ $produk->stok }}</p>

            @if ($produk->stok > 0)
                <form action="{{ route('keranjang.tambah', $produk->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="detail-button">
                        <i class="fa fa-shopping-cart"></i>
                        Tambahkan ke Keranjang
                    </button>
                </form>
            @else
                <p class="text-danger">Stok produk sedang habis.</p>
            @endif

            <a href="{{ url('/') }}" class="back-button">
                &larr; Kembali ke halaman utama
            </a>
        </div>

    </div>
</div>

@include('guest.partials.footer')

<script src="{{ asset('assets-guest/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets-guest/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets-guest/js/main.js') }}"></script>

</body>
</html>
