<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - InventarisKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #0c1445 0%, #1a237e 100%);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 450px;
            margin: 100px auto;
        }

        .login-header {
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            padding: 30px;
            text-align: center;
            color: white;
        }

        .login-header i {
            font-size: 60px;
            margin-bottom: 15px;
        }

        .login-header h3 {
            font-weight: bold;
        }

        .login-body {
            padding: 30px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
            border: 2px solid #e0e0e0;
        }

        .form-control:focus {
            border-color: #00b4d8;
            box-shadow: 0 0 0 0.2rem rgba(0, 180, 216, 0.25);
        }

        .btn-login {
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            border: none;
            padding: 12px;
            border-radius: 12px;
            font-weight: bold;
            width: 100%;
            color: white;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 180, 216, 0.4);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-card">
            <div class="login-header">
                <i class="fas fa-water"></i>
                <h3>InventarisKu</h3>
                <p>Silakan login untuk melanjutkan</p>
                <h1>Dari Ammar</h1>
            </div>
            <div class="login-body">
                @if (session('error'))
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                    </div>
                @endif

                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label><i class="fas fa-envelope me-2"></i> Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label><i class="fas fa-lock me-2"></i> Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn-login">
                        <i class="fas fa-sign-in-alt me-2"></i> Login
                    </button>
                </form>
                <hr>
                <div class="text-center">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
