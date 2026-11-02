<section class="navelle-category-section">
    <div class="container">

        <div class="navelle-category-heading">
            <span>FIND YOUR FAVORITE</span>
            <h2>Explore Our Categories</h2>
            <p>
                Pilih kategori favoritmu dan temukan koleksi
                yang sesuai dengan gaya dan kepribadianmu.
            </p>
        </div>

        <div class="row justify-content-center">
            @forelse ($kategori as $index => $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="navelle-category-card">
                        <div class="navelle-category-number">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        <div class="navelle-category-content">
                            <span>NAVELLE COLLECTION</span>
                            <h3>{{ $item->nama_kategori }}</h3>
                            <p>Discover your favorite look</p>
                        </div>

                        <div class="navelle-category-circle"></div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Belum ada kategori produk.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>

<style>
.navelle-category-section {
    background: #faf5f5;
    padding: 80px 0;
}

.navelle-category-heading {
    text-align: center;
    margin-bottom: 45px;
}

.navelle-category-heading span {
    color: #e9a3bd;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 3px;
}

.navelle-category-heading h2 {
    color: #222;
    font-size: 36px;
    font-weight: 700;
    margin: 12px 0;
}

.navelle-category-heading p {
    color: #777;
    font-size: 14px;
}

.navelle-category-card {
    position: relative;
    min-height: 210px;
    padding: 35px 28px;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.04);
    transition: all 0.3s ease;
}

.navelle-category-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(233,163,189,0.2);
}

.navelle-category-number {
    color: #f5c5d9;
    font-size: 42px;
    font-weight: 700;
    line-height: 1;
}

.navelle-category-content {
    position: relative;
    z-index: 2;
    margin-top: 25px;
}

.navelle-category-content span {
    color: #e9a3bd;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
}

.navelle-category-content h3 {
    color: #222;
    font-size: 25px;
    font-weight: 700;
    margin: 8px 0;
}

.navelle-category-content p {
    color: #888;
    font-size: 12px;
    margin-bottom: 0;
}

.navelle-category-circle {
    position: absolute;
    width: 150px;
    height: 150px;
    right: -45px;
    bottom: -65px;
    border-radius: 50%;
    background: #fff0f6;
}
</style>
