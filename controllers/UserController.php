<?php
require_once __DIR__ . '/../models/User.php';
function user_controller($action) {
    global $users;
    if ($_SESSION['role'] != 1) { // 1 = admin
        header('Location: ?page=dashboard');
        exit;
    }
    $users = get_all_users();
    return __DIR__ . '/../views/user_list.php';
}
?> 