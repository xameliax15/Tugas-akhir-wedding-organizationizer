<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up - LINDA SALON</title>
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
        .signup-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(25, 118, 210, 0.15);
            padding: 40px 32px 32px 32px;
            width: 100%;
            max-width: 420px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .signup-card h2 {
            color: #1976d2;
            font-weight: 700;
            margin-bottom: 18px;
        }
        .signup-card form {
            width: 100%;
        }
        .signup-card label {
            color: #1976d2;
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }
        .signup-card input[type="text"],
        .signup-card input[type="email"],
        .signup-card input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #b3c6e0;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 16px;
            background: #f7faff;
            transition: border 0.2s;
        }
        .signup-card input:focus {
            border: 1.5px solid #1976d2;
            outline: none;
        }
        .signup-card button[type="submit"] {
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
        .signup-card button[type="submit"]:hover {
            background: #1565c0;
        }
        .signup-card .error {
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
        .signup-card .success {
            color: #388e3c;
            background: #e8f5e9;
            border: 1px solid #a5d6a7;
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
            .signup-card { padding: 24px 8px; }
        }
    </style>
</head>
<body>
<div class="signup-card">
    <h2><i class="fas fa-user-plus"></i> Sign Up</h2>
    <?php if (!empty($error)) echo '<div class="error">'.$error.'</div>'; ?>
    <?php if (!empty($success)) echo '<div class="success">'.$success.'</div>'; ?>
    <form method="post" action="?page=signup">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required placeholder="Masukkan username">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Masukkan email">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Masukkan password">
        <button type="submit">Daftar</button>
    </form>
    <div class="signup-link">
        <a href="?page=login"><i class="fas fa-sign-in-alt"></i> Kembali ke Login</a>
    </div>
</div>
</body>
</html> 