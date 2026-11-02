@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h2>Edit Ulasan Produk</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ulasan-produk.update', $ulasan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="produk_id" class="form-label">Pilih Produk</label>
            <select name="produk_id" id="produk_id" class="form-control" required>
                @foreach ($produk as $item)
                    <option value="{{ $item->id }}"
                        {{ old('produk_id', $ulasan->produk_id) == $item->id ? 'selected' : '' }}>
                        {{ $item->nama_produk }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nama_pengulas" class="form-label">Nama Pengulas</label>
            <input
                type="text"
                name="nama_pengulas"
                id="nama_pengulas"
                class="form-control"
                value="{{ old('nama_pengulas', $ulasan->nama_pengulas) }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select name="rating" id="rating" class="form-control" required>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}"
                        {{ old('rating', $ulasan->rating) == $i ? 'selected' : '' }}>
                        {{ $i }} Bintang
                    </option>
                @endfor
            </select>
        </div>

        <div class="mb-3">
            <label for="komentar" class="form-label">Komentar</label>
            <textarea
                name="komentar"
                id="komentar"
                class="form-control"
                rows="4"
                required
            >{{ old('komentar', $ulasan->komentar) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>

        <a href="{{ route('ulasan-produk.index') }}" class="btn btn-secondary">
    Kembali
</a>
    </form>
</div>
@endsection
