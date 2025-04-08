<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Laravel Auth</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f0f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            margin-bottom: 25px;
            color: #333;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: linear-gradient(to right, #5a5ffb, #a3a8ff);
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #4e54c8;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="/register">Register here</a></p>
    </div>

    <script>
    document.getElementById('loginForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const form = e.target;
        const data = {
            email: form.email.value,
            password: form.password.value
        };

        try {
            const res = await fetch('/api/auth/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            });

            const responseText = await res.text();
            try {
                const response = JSON.parse(responseText);

                if (res.ok) {
                    alert("Login successful!");
                    localStorage.setItem("token", response.access_token);
                    window.location.href = '/dashboard';
                } else {
                    alert(response.message || 'Login failed!');
                    console.error('Login error:', response);
                }
            } catch (jsonError) {
                console.error("Invalid JSON response:", responseText);
                alert("Server error or invalid response.");
            }

        } catch (fetchError) {
            console.error("Fetch error:", fetchError);
            alert("Network error or server down.");
        }
    });
</script>

</body>
</html>
