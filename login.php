<?php
include "config/koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin</title>

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Admin</b> Login
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan login</p>

      <form action="" method="post">
        
        <!-- USERNAME -->
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>

        <!-- PASSWORD -->
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <!-- BUTTON -->
        <div class="row">
          <div class="col-12">
            <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>

<?php
if(isset($_POST['login'])) {
    $Username = $_POST['username'];
    $Password = $_POST['password'];

    if(empty($Username) || empty($Password)) {
        echo "<script>alert('Data tidak boleh kosong');</script>";
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$Username' AND password='$Password'");
        $data = mysqli_fetch_array($query);

        if($data){
    echo "LOGIN BERHASIL";
} else {
    echo "DATA TIDAK DITEMUKAN";
}

        if($data) {
            $_SESSION['level'] = $data['role']; 
            $_SESSION['username'] = $Username;

            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Login gagal');</script>";
        }
    }
}
?>