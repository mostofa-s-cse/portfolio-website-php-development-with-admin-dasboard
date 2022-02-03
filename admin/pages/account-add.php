<?php
include 'profilepic-process.php';
  if (isset($_POST['submit'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $password = $_POST['password'];
       $image = $_FILES['image']['name'];
  	   $target = "images/".basename($image);
  $sql = "INSERT INTO user_tbl(name,email,phone,password,image)VALUES('$name','$email','$phone',(MD5('$password')),'$image')";
  if (mysqli_query($conn, $sql)) {
      header("location:account.php?msg=".urlencode("Data insert successfully"));
      
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  else
  {
    die("Data insert failed").mysqli_error($conn);
  } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Account Add</title>
  <link rel="stylesheet" href="../css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
<!--------------------------------------------Top Navbar ---------------------------------------------------->
 <?php include 'top-nav.php';?>
<!---------------------------------------- /Top-nav ------------------------------------------->         
  <!-- /.navbar -->
  <!---------------------------------------- Main Sidebar Container ------------------------------------------->
<!-- Main Sidebar Container -->
<?php include 'aside-nav.php';?>
 <!-------------------------------------------- /Aside -------------------------------------------------------->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10 m-auto">
             <h4 class="m-0 text-dark text-center">Add New Account</h4>
             <hr>
             <a href="account.php" class="btn btn-warning float-right mb-3">Back</a>
             <div class="clearfix"></div>
             <form action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                   <label>Name</label>
                   <input type="text" name="name" class="form-control" required=""placeholder="Enter Your Name">
                 </div>
                 <div class="form-group">
                   <label>Email</label>
                   <input type="email" name="email" class="form-control" required=""placeholder="Enter Your Email Address...">
                 </div>
                 <div class="form-group">
                   <label>Phone Number</label>
                   <input type="number" name="phone" class="form-control" required=""placeholder="Enter Your Phone Number">
                 </div>
                 <div class="form-group">
                   <label>Password</label>
                   <input type="text" name="password" class="form-control" required=""placeholder="Enter Your Password">
                 </div>
                 <div class="form-group">
                   <label>Image</label>
                   <input type="file" name="image" class="form-control" required="">
                 </div>
                  <button type="submit" class="btn btn-primary btn-block mt-5" name="submit">Submit</button>
             </form>

          </div>
        </div><!-- /.row -->
      </div>
    </div>
    </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <?php include 'footer.php';?>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
</body>
</html>
