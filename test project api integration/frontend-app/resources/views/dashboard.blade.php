<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dashboard-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 30px;
        }

        button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #b02a37;
        }
    </style>
    <script>
        async function fetchUser() {
            const token = localStorage.getItem('token');
            if (!token) return window.location.href = '/login';

            try {
                const response = await axios.get('http://localhost:8001/api/me', {
                    headers: { Authorization: `Bearer ${token}` }
                });

                document.getElementById('userInfo').innerText = "Welcome, " + response.data.name + "!";
            } catch (err) {
                localStorage.removeItem('token');
                window.location.href = '/login';
            }
        }

        function logout() {
            localStorage.removeItem('token');
            window.location.href = '/login';
        }

        window.onload = fetchUser;
    </script>
</head>
<body>
    <div class="dashboard-container">
        <h2 id="userInfo">Loading...</h2>
        <button onclick="logout()">Logout</button>
    </div>
</body>
</html>
