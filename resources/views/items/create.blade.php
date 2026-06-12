@extends('layouts.app')

@section('content')
<div class="card-glass animate">
    <div class="card-header-custom">
        <h4 class="mb-0">
            <i class="fas fa-plus-circle me-2"></i> Tambah Item Baru
        </h4>
    </div>
    <div class="p-4">
        <form action="/items" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label><i class="fas fa-barcode me-1"></i> Kode Item</label>
                    <input type="text" name="kode" class="form-control" placeholder="Contoh: BK-001" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label><i class="fas fa-box me-1"></i> Nama Item</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama item" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label><i class="fas fa-cubes me-1"></i> Stok</label>
                    <input type="number" name="stok" class="form-control" placeholder="Jumlah stok" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label><i class="fas fa-money-bill me-1"></i> Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" placeholder="Harga item" required>
                </div>
                <div class="col-12 mb-3">
                    <label><i class="fas fa-align-left me-1"></i> Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi item (opsional)"></textarea>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <a href="/items" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
                <button type="submit" class="btn btn-ocean">
                    <i class="fas fa-save me-1"></i> Simpan Item
                </button>
            </div>
        </form>
    </div>
</div>
@endsection