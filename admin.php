<?php
session_start();
include "connect.php";

if (!isset($_SESSION['username'])) { 
    header("location:login.php");
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | My Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="admin.php">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav me-auto">
                    <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
                    <a class="nav-link" href="admin.php?page=article">Article</a>
                </div>
                <div class="d-flex align-items-center">
                    <span class="text-white me-3">Halo, <?= $_SESSION['username']; ?></span>
                    <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <?php
        // Routing halaman dinamis
        $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
        if (file_exists($page . ".php")) {
            include($page . ".php");
        } else {
            echo "<div class='alert alert-warning shadow-sm'>Halaman <b>$page.php</b> belum lu upload, Bro!</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
