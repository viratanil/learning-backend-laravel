<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Laravel Auth</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f4f6fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            max-width: 500px;
            width: 90%;
            text-align: center;
            animation: fadeIn 0.6s ease-in-out;
        }

        h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .userinfo {
            background: #f1f5f9;
            padding: 16px;
            border-radius: 12px;
            margin-top: 20px;
            font-weight: 600;
            color: #2c3e50;
        }

        button {
            margin-top: 30px;
            padding: 12px 20px;
            background: linear-gradient(to right, #667eea, #764ba2);
            color: white;
            font-weight: 600;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background: linear-gradient(to right, #5a67d8, #6b46c1);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>🎉 Welcome to your Dashboard</h2>
        <div id="userInfo" class="userinfo">Loading user info...</div>
        <button onclick="logout()">Logout</button>
    </div>

    <script>
        const token = localStorage.getItem("token");

        if (!token) {
            alert("Please login first");
            window.location.href = "/login";
        }

        fetch('/api/me', {
            headers: {
                'Authorization': 'Bearer ' + token
            }
        }).then(res => res.json())
          .then(data => {
              if (data.name) {
                  document.getElementById("userInfo").innerText = "Logged in as: " + data.name + " (" + data.email + ")";
              } else {
                  alert("Session expired. Please login again.");
                  localStorage.removeItem("token");
                  window.location.href = "/login";
              }
          });

        function logout() {
            fetch('/api/logout', {
                method: 'POST',
                headers: {
                    'Authorization': 'Bearer ' + token
                }
            }).then(() => {
                localStorage.removeItem("token");
                window.location.href = "/login";
            });
        }
    </script>
</body>
</html>
