<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - LINDA SALON</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        html, body {
            height: 100%;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        body {
            background: linear-gradient(120deg, #1976d2 0%, #64b5f6 100%);
            font-family: 'Roboto', sans-serif;
        }
        .login-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(25, 118, 210, 0.15);
            padding: 40px 32px 32px 32px;
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-card h2 {
            color: #1976d2;
            font-weight: 700;
            margin-bottom: 18px;
        }
        .login-card form {
            width: 100%;
        }
        .login-card label {
            color: #1976d2;
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }
        .login-card input[type="text"],
        .login-card input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #b3c6e0;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 16px;
            background: #f7faff;
            transition: border 0.2s;
        }
        .login-card input[type="text"]:focus,
        .login-card input[type="password"]:focus {
            border: 1.5px solid #1976d2;
            outline: none;
        }
        .login-card button[type="submit"] {
            width: 100%;
            background: #1976d2;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .login-card button[type="submit"]:hover {
            background: #1565c0;
        }
        .login-card .error {
            color: #d32f2f;
            background: #ffeaea;
            border: 1px solid #ffcdd2;
            border-radius: 6px;
            padding: 10px 14px;
            margin-bottom: 18px;
            font-size: 15px;
            width: 100%;
            text-align: center;
        }
        .signup-link {
            margin-top: 16px;
            width: 100%;
            text-align: center;
        }
        .signup-link a {
            color: #1976d2;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
        @media (max-width: 500px) {
            .login-card { padding: 24px 8px; }
        }
    </style>
</head>
<body>
<div class="login-card">
    <h2><i class="fas fa-user-shield"></i> Login Admin</h2>
    <?php if (!empty($error)) echo '<div class="error">'.$error.'</div>'; ?>
    <form method="post" action="?page=login">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required autofocus placeholder="Masukkan username">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Masukkan password">
        <button type="submit">Login</button>
    </form>
    <div class="signup-link">
        <a href="?page=signup"><i class="fas fa-user-plus"></i> Sign Up</a>
    </div>
</div>
</body>
</html>
