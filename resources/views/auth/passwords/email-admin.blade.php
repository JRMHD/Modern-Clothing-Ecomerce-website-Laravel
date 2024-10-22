<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Reset Password</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            background-color: #ECF5F4;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 420px;
        }

        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .logo-container {
            text-align: center;
            padding: 40px 20px 20px;
        }

        .logo-container img {
            max-width: 180px;
            height: auto;
        }

        .card-header {
            text-align: center;
            padding: 0 30px 30px;
            font-size: 24px;
            color: #333;
            font-weight: 600;
        }

        .card-body {
            padding: 0 30px 40px;
        }

        .alert {
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 24px;
            font-size: 14px;
            line-height: 1.5;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-size: 14px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .form-control:focus {
            border-color: #333;
            outline: none;
            background: white;
        }

        .form-control.is-invalid {
            border-color: #dc3545;
            background-color: #fff8f8;
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            width: 100%;
        }

        .btn-primary {
            background: #333;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background: #222;
            transform: translateY(-1px);
        }

        .description {
            text-align: center;
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 24px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .card-body {
                padding: 0 20px 30px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>

            <div class="card-header">
                {{ __('Reset Password') }}
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="description">
                    Enter your email address and we'll send you a link to reset your password.
                </p>

                <form method="POST" action="{{ route('admin.password.email') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>