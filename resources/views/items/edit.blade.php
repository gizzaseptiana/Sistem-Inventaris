@extends('layouts.app')

@section('content')
<div class="card-glass animate">
    <div class="card-header-custom">
        <h4 class="mb-0">
            <i class="fas fa-edit me-2"></i> Edit Item
        </h4>
    </div>
    <div class="p-4">
        <form action="/items/{{ $item->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label><i class="fas fa-barcode me-1"></i> Kode Item</label>
                    <input type="text" name="kode" class="form-control" value="{{ $item->kode }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label><i class="fas fa-box me-1"></i> Nama Item</label>
                    <input type="text" name="nama" class="form-control" value="{{ $item->nama }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label><i class="fas fa-cubes me-1"></i> Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{ $item->stok }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label><i class="fas fa-money-bill me-1"></i> Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" value="{{ $item->harga }}" required>
                </div>
                <div class="col-12 mb-3">
                    <label><i class="fas fa-align-left me-1"></i> Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3">{{ $item->deskripsi }}</textarea>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <a href="/items" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
                <button type="submit" class="btn btn-ocean">
                    <i class="fas fa-save me-1"></i> Update Item
                </button>
            </div>
        </form>
    </div>
</div>
@endsection