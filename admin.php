<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Future Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand">Admin Dashboard</span>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </nav>
    <div class="container mt-5 text-center">
        <h1 class="display-4">Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
        <p class="lead"> Berhasil masuk ke sistem menggunakan PHP Session.</p>
        </div>
</body>
</html>