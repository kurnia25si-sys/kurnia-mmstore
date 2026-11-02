@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h2>Edit Balasan Ulasan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('balasan-ulasan.update', $balasan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="ulasan_id" class="form-label">Pilih Ulasan</label>
            <select name="ulasan_id" id="ulasan_id" class="form-control" required>
                @foreach ($ulasan as $item)
                    <option value="{{ $item->id }}"
                        {{ old('ulasan_id', $balasan->ulasan_id) == $item->id ? 'selected' : '' }}>
                        {{ $item->nama_produk }} - {{ $item->nama_pengulas }}
                        ({{ $item->komentar }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="balasan" class="form-label">Balasan Admin</label>
            <textarea
                name="balasan"
                id="balasan"
                class="form-control"
                rows="4"
                required
            >{{ old('balasan', $balasan->balasan) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>

        <a href="{{ route('balasan-ulasan.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection
