<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .login-header {
            height: 150px;
            background-image: url('https://cdn.pixabay.com/photo/2017/08/30/17/26/please-2697951_1280.jpg');
            background-size: cover;
            background-position: center;
        }
        .login-body {
            padding: 20px;
        }
        .form-control {
            border-radius: 25px;
        }
        .btn-primary {
            border-radius: 25px;
        }
        .login-footer {
            text-align: center;
            margin-top: 15px;
        }
        .login-footer a {
            text-decoration: none;
            color: #007bff;
        }
        .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">

        </div>
        <div class="login-body">
            <h5 class="text-center mb-4">Sign In</h5>
            <form method="POST" action="{{ route('login') }}">
               @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                    </div>
                    <a href="#" class="text-decoration-none">Forgot Password?</a>
                </div>
                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </form>
            <div class="login-footer mt-3">
                <p>Not a member? <a href="#">Sign Up</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
