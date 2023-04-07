<?php

include 'model/User.php';
session_start();

$pageHeader = 'Welcome';

$userName = null;
if (isset($_SESSION['user'])) {
    $userName = $_SESSION['user']->getUsername();
}

if(isset($_GET['action']) && $_GET['action'] === 'tasks') {
    if (isset($_SESSION['user'])) {
        header('Location: /?controller=tasks');
    }
}
if(isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    header('Location: /?controller=home');
    die();
}
if(isset($_GET['action']) && $_GET['action'] === 'security') {
    if (isset($_SESSION['user'])) {
        header('Location: /');
    } else {
        header('Location: /?controller=security');
    }
}

include 'view/home.php';