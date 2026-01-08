<?php
// session begin
session_start();
include "koneksi.php";

if (isset($_SESSION['username'])) {
    header("location:admin.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = md5($_POST['pass']); 

    $stmt = $conn->prepare("SELECT username FROM user WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $get = $stmt->get_result();
    $res = $get->fetch_assoc();

    if ($res) {
        $_SESSION['username'] = $res['username'];
        header("location:admin.php");
    } else {
        header("location:login.php");
    }
    $stmt->close();
    $conn->close();
}
// session end
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Future Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info-subtle"> <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-4 m-auto">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-body p-4">
                        <h3 class="text-center fw-bold">Login</h3>
                        <form method="POST">
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