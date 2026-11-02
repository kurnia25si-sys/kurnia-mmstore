@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h2>Data Balasan Ulasan</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('balasan-ulasan.create') }}" class="btn btn-primary mb-3">
        Tambah Balasan
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Produk</th>
                <th>Nama Pengulas</th>
                <th>Komentar</th>
                <th>Balasan Admin</th>
                <th>Nama Admin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($balasan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->nama_pengulas }}</td>
                    <td>{{ $item->komentar }}</td>
                    <td>{{ $item->balasan }}</td>
                    <td>{{ $item->nama_admin }}</td>
                    <td>
                        <a href="{{ route('balasan-ulasan.edit', $item->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('balasan-ulasan.destroy', $item->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus balasan ini?')">
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
                    <td colspan="7" class="text-center">
                        Belum ada balasan ulasan.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
