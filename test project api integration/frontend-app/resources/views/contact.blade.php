<!DOCTYPE html>
<html>
<head>
    <title>Contact Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contact-box {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            width: 400px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .success-message {
            text-align: center;
            color: green;
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="contact-box">
        <h1>Contact Us</h1>

        <form method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
            <button type="submit">Send</button>
        </form>

        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
    </div>
</body>
</html>

