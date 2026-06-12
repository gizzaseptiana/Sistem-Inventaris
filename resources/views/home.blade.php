@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-glass">
        <div class="card-header-custom">
            <h4><i class="fas fa-home me-2"></i> Dashboard User</h4>
        </div>
        <div class="p-4">
            <div class="alert alert-info">
                <i class="fas fa-info-circle me-2"></i> Selamat datang, User! Anda hanya bisa melihat data inventaris.
            </div>
            
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <div class="card p-4">
                        <i class="fas fa-boxes fa-4x text-primary mb-3"></i>
                        <h3>{{ App\Models\Item::count() }}</h3>
                        <p>Total Item Tersedia</p>
                        <a href="/user/items" class="btn btn-primary">Lihat Inventaris</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection