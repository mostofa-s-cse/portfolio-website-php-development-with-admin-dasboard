<?php
include 'profilepic-process.php';
if (isset($_POST['submit'])) {
       $skill_name = $_POST['skill_name'];
       $value = $_POST['value'];
    $sql = "INSERT INTO skill(skill_name,value)VALUES('$skill_name','$value')";
    if (mysqli_query($conn, $sql)) {
       header("location:skill.php?msg=".urlencode("Data insert successfully"));
    }
    else
    {
      die("Data update failed").mysqli_error($conn);
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Skill Add</title>
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
        <div id="edit" class="row mb-2 mt-5">
          <div class="col-sm-10  m-auto">
            <h4 class="m-0 text-dark text-center">Add New</h4>
             <hr>
            <a href="skill.php" class="btn btn-warning float-right mb-3">Back</a>
             <div class="clearfix"></div>
             <form action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                      <label>Skill Name</label>
                      <input type="text" class="form-control" name="skill_name">
                      </div>
                      <div class="form-group">
                      <label>Value</label>
                      <input type="text" class="form-control" name="value">
                      </div>
                  <button type="submit" class="btn btn-primary btn-block mt-4" name="submit">Submit</button>
             </form>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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
