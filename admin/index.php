<?php
       session_start();
        include 'config/connection.php';
         $emailErr = $passErro = $ErrorMsg = "";
         $email = $password = "";

         if ($_SERVER['REQUEST_METHOD'] == 'POST') {

              $email    = $_POST['email'];
              $password = $_POST['password'];

              if (empty($email)) {
                  $emailErr = "Email field is required";
              }
              else
              {
                   $email = $email ;
              }
              if (empty($password)) {
                  $passErro = "Password field is required";
              }
              else
              {
                   $password = $password ;
              }

              if (empty($emailErr) && empty($passErro)) {
                                
                 $password = md5($password);
                  $checkUser = "SELECT * FROM user_tbl WHERE email='$email' AND password='$password'";

                  $result = mysqli_query($conn,$checkUser);

                  if (!$result) {

                    $ErrorMsg = "Email or password icorrerct";

                  }
                  else
                  {
                     $ErrorMsg = "Email or password icorrerct";
                     if (mysqli_num_rows($result)>0) 
                     {
                          while ($row = mysqli_fetch_assoc($result)) 
                          {
                              $_SESSION['id']    = $row['id'];
                              $_SESSION['name']  = $row['name'];
                               $_SESSION['image']  = $row['image'];
                                $_SESSION['phone']  = $row['phone'];
                              header("location:deshboard.php");
                           }
                     }
                  }
                }
 
              }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card shadow">
    <div class="card-body login-card-body" style="border-radius:8px;">
     <h2 class="text-center mb-2">Admin Login</h2><hr style="width:200px;">
       <h4 class="text-danger"><?php echo $ErrorMsg; ?></h4>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <span class="text-danger d-block"><?php echo $emailErr; ?></span>
        <div class="input-group mb-3">
          <input type="email" name="email"class="form-control" placeholder="Enter Email Address...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
         <span class="text-danger d-block"><?php echo $passErro; ?></span>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Enter Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
