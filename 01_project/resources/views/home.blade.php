<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            color: white;
            text-align: center;
        }
        .contact-btn {
            background: #28a745;
        }
        .contact-btn:hover {
            background: #218838;
        }
        .service-btn {
            background: #007bff;
        }
        .service-btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Our Website</h1>
    
    <a href="/contact" class="btn contact-btn">Go to Contact Page</a>
    <a href="/service" class="btn service-btn">Go to Service Page</a>
</div>

</body>
</html>
