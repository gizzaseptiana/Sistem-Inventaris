<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #0c1445 0%, #1a237e 100%);
            min-height: 100vh;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #0a0f2a 0%, #0d1b5e 100%);
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
            border-bottom: 2px solid #00b4d8;
            padding: 15px 0;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            background: linear-gradient(135deg, #00b4d8, #90e0ef);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent !important;
        }

        .menu-card {
            background: linear-gradient(135deg, #0d1b5e, #1a237e);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #00b4d8;
            text-decoration: none;
            display: block;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,180,216,0.3);
            border-color: #90e0ef;
        }

        .menu-card i {
            font-size: 50px;
            color: #00b4d8;
            margin-bottom: 15px;
        }

        .menu-card h3 {
            color: white;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .menu-card p {
            color: #90e0ef;
            margin-bottom: 0;
        }

        .card-glass {
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            border: none;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            overflow: hidden;
        }

        .card-header-custom {
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            padding: 15px 20px;
            color: white;
            font-weight: bold;
        }

        .table-ocean {
            border-radius: 15px;
            overflow: hidden;
            width: 100%;
        }

        .table-ocean thead {
            background: linear-gradient(135deg, #0d1b5e, #1a237e);
            color: white;
        }

        .table-ocean thead th {
            padding: 15px;
            font-weight: 600;
            border: none;
        }

        .table-ocean tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #dee2e6;
            background-color: white;
        }

        .table-ocean tbody tr:hover {
            background: #e3f2fd;
        }

        .table-ocean td {
            padding: 12px 15px;
            vertical-align: middle;
            color: #1a1a2e !important;
            font-weight: 500;
            background-color: white;
        }

        .table-ocean td strong,
        .table-ocean td span:not(.badge),
        .table-ocean td a:not(.btn) {
            color: #1a1a2e !important;
        }

        .table-ocean td .badge {
            color: white !important;
        }

        .badge-ocean {
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 500;
            color: white;
        }

        .btn-action {
            padding: 6px 12px;
            margin: 0 3px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-action:hover {
            transform: translateY(-2px);
        }

        .btn-ocean {
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            border: none;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-ocean:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,180,216,0.4);
            color: white;
        }

        .btn-outline-ocean {
            border: 1px solid #00b4d8;
            color: #00b4d8;
            background: transparent;
            transition: all 0.3s ease;
        }

        .btn-outline-ocean:hover {
            background: #00b4d8;
            color: white;
        }

        .footer {
            background: linear-gradient(135deg, #0a0f2a, #0d1b5e);
            color: #90e0ef;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
            border-top: 1px solid #00b4d8;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate {
            animation: fadeInUp 0.6s ease-out;
        }

        .form-control {
            border-radius: 12px;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #00b4d8;
            box-shadow: 0 0 0 0.2rem rgba(0,180,216,0.25);
        }

        label {
            font-weight: 600;
            color: #0d1b5e;
            margin-bottom: 8px;
        }

        .welcome-text {
            color: white;
            text-align: center;
            margin-bottom: 40px;
        }

        .welcome-text h1 {
            font-size: 2.5rem;
            font-weight: bold;
            background: linear-gradient(135deg, #00b4d8, #90e0ef);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .welcome-text p {
            color: #90e0ef;
            font-size: 1.1rem;
        }

        .alert-success {
            background: linear-gradient(135deg, #00b4d8, #0077b6);
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-custom navbar-dark">
    <div class="container">
        <span class="navbar-brand">
            <i class="fas fa-water me-2"></i> InventarisKu
        </span>
        <div class="d-flex gap-2">
            <a href="/" class="btn btn-outline-ocean btn-sm">
                <i class="fas fa-home me-1"></i> Home
            </a>
            <a href="/items" class="btn btn-outline-ocean btn-sm">
                <i class="fas fa-database me-1"></i> Semua Item
            </a>
            <a href="/items/create" class="btn btn-ocean btn-sm">
                <i class="fas fa-plus-circle me-1"></i> Tambah Item
            </a>
            <form action="/logout" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<div class="container mt-4 animate">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-pill">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    
    @yield('content')
</div>

<div class="footer">
    <p class="mb-0">
        <i class="fas fa-heart" style="color: #ff6b6b;"></i> 
        Sistem Inventaris - Tugas Praktikum 
        <i class="fas fa-water"></i>
    </p>
    <small>© 2026 | Ocean Blue Theme</small>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>