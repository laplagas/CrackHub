<?php
require_once __DIR__ . '/../config/data.php';
session_start();

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header("Location: ../views/login.php");
    exit();
}

if (empty($_SESSION['class']) || $_SESSION['class'] !== 'admin') {
    header("Location: ../views/dashboard.php");
    exit();
}