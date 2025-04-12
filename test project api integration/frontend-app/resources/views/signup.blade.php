<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
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

        .signup-box {
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
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #28a745;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        async function signupUser(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const response = await axios.post('http://localhost:8001/api/register', {
                    name, email, password
                });

                localStorage.setItem('token', response.data.token);
                window.location.href = '/dashboard';
            } catch (err) {
                alert("Signup failed: " + err.response.data.error);
            }
        }
    </script>
</head>
<body>
    <div class="signup-box">
        <h2>Signup</h2>
        <form onsubmit="signupUser(event)">
            <input id="name" type="text" placeholder="Name" required>
            <input id="email" type="email" placeholder="Email" required>
            <input id="password" type="password" placeholder="Password" required>
            <button type="submit">Signup</button>
        </form>
        <a href="/login">Already have an account? Login</a>
    </div>
</body>
</html>
