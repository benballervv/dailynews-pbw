<?php<?php
session_start();
include "connect.php";

if (isset($_SESSION['username'])) {
    header("location:admin.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = md5($_POST['pass']); 

    $sql = "SELECT username FROM user WHERE username='$username' AND password='$password'";
    $query = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($query);

    if ($res) {
        $_SESSION['username'] = $res['username'];
        header("location:admin.php");
        exit;
    } else {
        header("location:login.php?status=gagal");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | My Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info-subtle"> 
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-4 m-auto">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-body p-4 text-center">
                        <h3 class="fw-bold mb-3">Login</h3>
                        <hr>
                        <?php if(isset($_GET['status']) && $_GET['status'] == 'gagal'): ?>
                            <div class="alert alert-danger py-2">Username/Password Salah!</div>
                        <?php endif; ?>
                        <form method="POST" action="login.php">
                            <input type="text" name="user" class="form-control my-3 py-2" placeholder="Username" required>
                            <input type="password" name="pass" class="form-control my-3 py-2" placeholder="Password" required>
                            <button class="btn btn-primary w-100 shadow-sm" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
