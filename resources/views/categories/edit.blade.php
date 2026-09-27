@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Kategori</h1>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.update', $category['id']) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input
                        type="text"
                        class="form-control @error('nama_kategori') is-invalid @enderror"
                        id="nama_kategori"
                        name="nama_kategori"
                        value="{{ old('nama_kategori', $category['nama_kategori']) }}"
                        required
                    >
                    @error('nama_kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea
                        class="form-control @error('deskripsi') is-invalid @enderror"
                        id="deskripsi"
                        name="deskripsi"
                        rows="4"
                    >{{ old('deskripsi', $category['deskripsi']) }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                    Batal
                </a>
            </form>
        </div>
    </div>
</div>
@endsection