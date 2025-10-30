@extends('dashboard')
@section('title', 'Edit Buku')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Edit Data Buku</h2>

    @if (@session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (@session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('buku.update', $buku->id )}}" method="POST" class="card p-4 shadow-sm border-0">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}" required>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="{{old('penulis')}}" required>
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{old('penerbit')}}" required>
        </div>

        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{old('tahun_terbit')}}" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{old('jumlah')}}" required>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update Buku</button>
            </div>
    </form>
</div>
