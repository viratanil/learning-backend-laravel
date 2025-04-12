<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | JWT Auth</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom right, #f3f4f6, #d1d5db);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        h1 {
            font-size: 32px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 10px;
        }

        p {
            color: #4b5563;
            margin-bottom: 30px;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        a.button {
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 9999px;
            font-weight: 600;
            color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease;
        }

        .signup {
            background-color: #10b981;
        }

        .signup:hover {
            background-color: #059669;
        }

        .login {
            background-color: #3b82f6;
        }

        .login:hover {
            background-color: #2563eb;
        }

        .dashboard {
            background-color: #8b5cf6;
        }

        .dashboard:hover {
            background-color: #7c3aed;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>🚀 Welcome to JWT Auth App</h1>
        <p>Experience secure, modern authentication using <strong>Laravel + JWT</strong></p>

        <div class="btn-group">
            <a href="{{ route('contact.form') }}">Go to Contact</a>
            <a href="/signup" class="button signup">Signup</a>
            <a href="/login" class="button login">Login</a>
            <a href="/dashboard" class="button dashboard">Dashboard</a>
        </div>
    </div>

</body>
</html>
