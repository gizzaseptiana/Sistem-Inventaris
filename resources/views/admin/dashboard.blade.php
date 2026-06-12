@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-glass">
        <div class="card-header-custom">
            <h4><i class="fas fa-chart-line me-2"></i> Dashboard Admin</h4>
        </div>
        <div class="p-4">
            <div class="alert alert-success">
                <i class="fas fa-check-circle me-2"></i> Selamat datang, Admin! Anda memiliki akses penuh ke sistem.
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card text-center p-3">
                        <i class="fas fa-boxes fa-3x text-primary"></i>
                        <h3>{{ App\Models\Item::count() }}</h3>
                        <p>Total Item</p>
                        <a href="/items" class="btn btn-primary">Kelola Item</a>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center p-3">
                        <i class="fas fa-users fa-3x text-success"></i>
                        <h3>{{ App\Models\User::count() }}</h3>
                        <p>Total User</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center p-3">
                        <i class="fas fa-money-bill fa-3x text-warning"></i>
                        <h3>Rp {{ number_format(App\Models\Item::sum('harga'), 0, ',', '.') }}</h3>
                        <p>Total Nilai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection