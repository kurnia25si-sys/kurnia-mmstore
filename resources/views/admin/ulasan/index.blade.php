@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h2>Data Ulasan Produk</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<a href="{{ route('ulasan-produk.create') }}" class="btn btn-primary mb-3">        Tambah Ulasan
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Produk</th>
                <th>Nama Pengulas</th>
                <th>Rating</th>
                <th>Komentar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ulasan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->produk->nama_produk ?? '-' }}</td>
                    <td>{{ $item->nama_pengulas }}</td>
                    <td>{{ $item->rating }}/5</td>
                    <td>{{ $item->komentar }}</td>
                    <td>
                        <a href="{{ route('ulasan-produk.edit', $item->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('ulasan-produk.destroy', $item->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus ulasan ini?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">
                        Belum ada ulasan produk.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
