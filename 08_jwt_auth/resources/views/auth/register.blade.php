<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Laravel Auth</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f7f7fb;
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
            max-width: 420px;
        }

        h2 {
            margin-bottom: 25px;
            color: #333;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #11998e, #38ef7d);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: linear-gradient(to right, #0fd4a6, #60ff8c);
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #11998e;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form id="registerForm">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="/login">Login here</a></p>
    </div>

    <script>
    document.getElementById('registerForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const form = e.target;

        const data = {
            name: form.name.value,
            email: form.email.value,
            password: form.password.value,
            password_confirmation: form.password_confirmation.value
        };

        try {
            const res = await fetch('/api/auth/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            });

            const responseText = await res.text(); // first as text
            try {
                const response = JSON.parse(responseText); // then try parsing
                console.log('Response:', response);

                if (res.ok) {
                    alert("Registration successful!");
                    localStorage.setItem("token", response.access_token);
                    window.location.href = '/dashboard';
                } else {
                    alert(response.message || 'Registration failed');
                }
            } catch (parseErr) {
                console.error("Failed to parse JSON:", responseText);
                alert("Invalid response from server");
            }

        } catch (error) {
            console.error('Fetch error:', error);
            alert('Something went wrong. See console.');
        }
    });
</script>

</body>
</html>
