<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome - Laravel Auth</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #333;
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .buttons {
            display: flex;
            gap: 20px;
        }

        .btn {
            padding: 12px 25px;
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: linear-gradient(to right, #5a5ffb, #a3a8ff);
        }
    </style>
</head>
<body>
    <h1>Welcome to My Laravel App 🚀</h1>

    <div class="buttons">
        <a href="/login" class="btn">Login</a>
        <a href="/register" class="btn">Register</a>
    </div>
</body>
</html>
