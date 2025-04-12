<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9eff1;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 25px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        async function loginUser(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const response = await axios.post('http://localhost:8001/api/login', {
                    email, password
                });

                localStorage.setItem('token', response.data.token);
                window.location.href = '/dashboard';
            } catch (err) {
                alert("Login failed: " + err.response.data.error);
            }
        }
    </script>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form onsubmit="loginUser(event)">
            <input id="email" type="email" placeholder="Email" required>
            <input id="password" type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="/signup">Don't have an account? Signup</a>
    </div>
</body>
</html>
