@extends('layouts.app')

@section('content')
<div class="card-glass animate">
    <div class="card-header-custom">
        <h4 class="mb-0">
            <i class="fas fa-list me-2"></i> Daftar Item Inventaris
        </h4>
    </div>
    <div class="p-4">
        @if($items->isEmpty())
            <div class="text-center py-5">
                <i class="fas fa-fish fa-4x" style="color: #00b4d8;"></i>
                <h4 class="mt-3" style="color: #0d1b5e;">Belum Ada Data Inventaris</h4>
                <p class="text-muted">Yuk tambah data inventaris dulu!</p>
                <a href="/items/create" class="btn btn-ocean">
                    <i class="fas fa-plus me-1"></i> Tambah Item Baru
                </a>
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-ocean">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Kode</th>
                            <th>Nama Item</th>
                            <th class="text-center">Stok</th>
                            <th>Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $index => $item)
                        <tr>
                            <td class="text-center"><strong>{{ $index + 1 }}</strong></td>
                            <td><span class="badge badge-ocean">{{ $item->kode }}</span></td>
                            <td><i class="fas fa-box-open me-2" style="color: #0077b6;"></i> <strong>{{ $item->nama }}</strong></td>
                            <td class="text-center">
                                @if($item->stok <= 10)
                                    <span class="badge bg-danger">{{ $item->stok }}</span>
                                @elseif($item->stok <= 30)
                                    <span class="badge bg-warning text-dark">{{ $item->stok }}</span>
                                @else
                                    <span class="badge bg-success">{{ $item->stok }}</span>
                                @endif
                            </td>
                            <td><i class="fas fa-tag me-1" style="color: #0077b6;"></i> <strong>{{ $item->harga_rupiah }}</strong></td>
                            <td class="text-center">
                                <a href="/items/{{ $item->id }}" class="btn btn-info btn-action" title="Lihat">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/items/{{ $item->id }}/edit" class="btn btn-warning btn-action" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="/items/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus item ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-action" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection