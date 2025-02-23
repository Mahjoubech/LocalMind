<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .email-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
        .heart {
            font-size: 50px;
            color: red;
        }
        .emoji {
            font-size: 30px;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="email-container">
    <div class="heart">❤️</div>
    <h1>Thank you for joining us, {{$user->name}}! 🎉</h1>
    <p>Knabghiiiik bzaaaaaf 😍🔥</p>
    <p class="emoji">🌟✨ Welcome to the family! ✨🌟</p>
</div>

</body>
</html>

