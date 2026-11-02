<!-- Reviews Section Begin -->
<section class="reviews spad">
    <div class="container">
        <div class="section-title">
            <span>WHAT THEY SAY ABOUT US</span>
            <h2>Customer Experiences</h2>
                <p>
                Lihat pengalaman pelanggan setelah berbelanja
                dan menemukan koleksi favorit mereka di Navelle.
                </p>
        </div>

        <div class="row">
            @forelse ($ulasan as $item)
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="p-4 border rounded">
                        <h5>{{ $item->nama_produk }}</h5>

                        <p class="mb-1">
                            <strong>{{ $item->nama_pengulas }}</strong>
                        </p>

                        <div class="text-warning mb-2">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa {{ $i <= $item->rating ? 'fa-star' : 'fa-star-o' }}"></i>
                            @endfor
                        </div>

                        <p>{{ $item->komentar }}</p>

                        @if ($item->balasan)
                            <div class="mt-3 p-3 bg-light rounded">
                                <strong>
                                    Balasan Admin
                                    ({{ $item->nama_admin ?? 'Admin' }})
                                </strong>
                                <p class="mb-0 mt-2">{{ $item->balasan }}</p>
                            </div>
                        @else
                            <small class="text-muted">
                                Belum ada balasan dari admin.
                            </small>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Belum ada ulasan pelanggan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
<!-- Reviews Section End -->
