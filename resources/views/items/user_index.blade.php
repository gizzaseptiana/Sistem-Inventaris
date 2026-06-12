@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header bg-white py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Item Inventaris</h5>
                <span class="badge bg-info">Mode Baca (User)</span>
            </div>
        </div>
        <div class="card-body">
            @if($items->isEmpty())
                <div class="text-center py-5">
                    <h4>Belum Ada Data</h4>
                </div>
            @else
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th><th>Kode</th><th>Nama</th><th>Stok</th><th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $i => $item)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->harga_rupiah }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection