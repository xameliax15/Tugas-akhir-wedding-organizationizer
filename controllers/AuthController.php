<?php

function auth_controller($action) {
    global $error;
    if ($action === 'logout') {
        session_destroy();
        header('Location: ?page=login');
        exit;
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = get_user_by_username($username);
        if ($user && password_verify($password, $user['password'])) {
            if ($user['role'] == 1) { // hanya admin
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['nama'] = $user['nama'];
                $_SESSION['photo'] = $user['photo'];
                header('Location: ?page=dashboard');
                exit;
            } else {
                $error = 'Akses hanya untuk admin!';
            }
        } else {
            $error = 'Username atau password salah!';
        }
    }
    return '../views/login.php';
}

function signup_controller() {
    global $error, $success;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username']);
        $nama = trim($_POST['nama']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        // Validasi sederhana
        if (empty($username) || empty($nama) || empty($email) || empty($password)) {
            $error = 'Semua field wajib diisi!';
        } elseif (get_user_by_username($username)) {
            $error = 'Username sudah digunakan!';
        } elseif (get_user_by_email($email)) {
            $error = 'Email sudah digunakan!';
        } else {
            $id = uniqid('user');
            $role = 1; // default admin, bisa diubah sesuai kebutuhan
            $photo = null;
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $now = date('Y-m-d H:i:s');
            global $conn;
            $stmt = $conn->prepare("INSERT INTO User (id, nama, username, email, password, createAt, updateAt, role, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssis", $id, $nama, $username, $email, $hash, $now, $now, $role, $photo);
            if ($stmt->execute()) {
                $success = 'Registrasi berhasil! Silakan login.';
            } else {
                $error = 'Registrasi gagal. Silakan coba lagi.';
            }
        }
    }
    return '../views/signup.php';
}
?> 