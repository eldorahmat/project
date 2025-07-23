<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            background: linear-gradient(135deg, #0d4aab, #6ab7ff);
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        .login-box {
            background: #fff;
            padding: 32px;
            border-radius: 12px;
            width: 100%;
            max-width: 360px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #4285f4;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.3s ease;
        }

        .btn-login:hover {
            background-color: #3367d6;
        }

        .error {
            margin-top: 12px;
            text-align: center;
            color: red;
            font-size: 14px;
        }
        
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>

        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <div class="form-group">
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-login">Login</button>

            @error('username')
                <div class="error">{{ $message }}</div>
            @enderror
        </form>
    </div>
</body>
</html>