<?php
//include 'model/User.php';
include 'model/UserProvider.php';
session_start();


$error = null;
if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $userName, 'password' => $userPassword] = $_POST;

    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($userName, $userPassword);

    if($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['user'] = $user;
    }
    if (isset($_SESSION['user'])) {
        header('Location: /');
        die();
    }

}

require_once 'view/signin.php';
