<?php
require_once __DIR__ . '/../config/db.php';

function get_all_users() {
    global $conn;
    $result = $conn->query("SELECT * FROM User");
    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}

function get_user_by_email($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM User WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function get_user_by_username($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM User WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function get_user_by_id($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM User WHERE id = ? LIMIT 1");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function create_user($id, $nama, $username, $email, $password, $role = 1, $photo = null) {
    global $conn;
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $now = date('Y-m-d H:i:s');
    $stmt = $conn->prepare("INSERT INTO User (id, nama, username, email, password, createAt, updateAt, role, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssis", $id, $nama, $username, $email, $hash, $now, $now, $role, $photo);
    return $stmt->execute();
}

function update_user($id, $nama, $email, $role, $photo = null) {
    global $conn;
    $now = date('Y-m-d H:i:s');
    $stmt = $conn->prepare("UPDATE User SET nama=?, email=?, updateAt=?, role=?, photo=? WHERE id=?");
    $stmt->bind_param("sssiss", $nama, $email, $now, $role, $photo, $id);
    return $stmt->execute();
}
?> 