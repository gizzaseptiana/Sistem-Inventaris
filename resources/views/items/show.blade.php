@extends('layouts.app')

@section('content')
<div class="card-glass animate">
    <div class="card-header-custom">
        <h4 class="mb-0">
            <i class="fas fa-info-circle me-2"></i> Detail Item
        </h4>
    </div>
    <div class="p-4">
        <table class="table table-bordered">
            <tr>
                <th width="30%">Kode Item</th>
                <td>{{ $item->kode }}</td>
            </tr>
            <tr>
                <th>Nama Item</th>
                <td><strong>{{ $item->nama }}</strong></td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>
                    @if($item->stok <= 10)
                        <span class="badge bg-danger">{{ $item->stok }} unit (Stok Menipis)</span>
                    @elseif($item->stok <= 30)
                        <span class="badge bg-warning">{{ $item->stok }} unit</span>
                    @else
                        <span class="badge bg-success">{{ $item->stok }} unit</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <td><strong class="text-success">{{ $item->harga_rupiah }}</strong></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $item->deskripsi ?? '-' }}</td>
            </tr>
            <tr>
                <th>Dibuat pada</th>
                <td>{{ $item->created_at->format('d/m/Y H:i:s') }}</td>
            </tr>
            <tr>
                <th>Terakhir diupdate</th>
                <td>{{ $item->updated_at->format('d/m/Y H:i:s') }}</td>
            </tr>
        </table>
        <hr>
        <div class="d-flex justify-content-between">
            <a href="/items" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Kembali
            </a>
            <div>
                <a href="/items/{{ $item->id }}/edit" class="btn btn-warning">
                    <i class="fas fa-edit me-1"></i> Edit
                </a>
                <form action="/items/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <i class="fas fa-trash me-1"></i> Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection