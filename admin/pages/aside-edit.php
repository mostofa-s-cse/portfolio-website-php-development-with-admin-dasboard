<?php
include 'profilepic-process.php';
   if (isset($_GET['id'])) {
         $id = $_GET['id'];
    }
     if (isset($_POST['submit'])) {
      $name = $_POST['name'];
       $st = $_POST['span_title'];
       $copyr = $_POST['copyr'];
       $sl = $_POST['sociallink'];
       $sl1 = $_POST['sociallink1'];
       $sl2 = $_POST['sociallink2'];
       $sl3 = $_POST['sociallink3'];
       $sl4 = $_POST['sociallink4'];
       $sl5 = $_POST['sociallink5'];
       $image = $_FILES['image']['name'];
  	   $target = "images/".basename($image);
    $sql = "UPDATE aside_tbl SET name='$name', span_title='$st',copyr='$copyr',image='$image',sociallink='$sl', sociallink1='$sl1',sociallink2='$sl2',sociallink3='$sl3',sociallink4='$sl4',sociallink5='$sl5' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
       if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

      header("location:aside.php?msg=".urlencode("Data Update successfully"));

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
  <title>Aside Update</title>
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
          <div class="col-sm-6 col-md-10  m-auto">
        
             <h4 class="m-0 text-dark text-center">Update Aside Section</h4>
             <?php 

                  $sql = "SELECT * FROM aside_tbl WHERE id='$id'";

                  $result = mysqli_query($conn,$sql);
                  $row    = mysqli_fetch_array($result);                

              ?>
             <hr>
             <a href="aside.php" class="btn btn-warning float-right mb-3">Back</a>
             <div class="clearfix"></div>

            <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                      <label>Image</label>
                      <input type="file" class="form-control" name="image"value="<?php echo $row['image'];?>"required="">
                      </div>
                      <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                      </div>
                      <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" name="span_title" value="<?php echo $row['span_title'];?>">
                      </div>
                      <div class="form-group">
                      <label><i class="fa fa-copyright" aria-hidden="true"> Copyright</i></label>
                      <input type="text" class="form-control" name="copyr" value="<?php echo $row['copyr'];?>">
                      </div>
                      <div class="form-group">
                      <label>Facebook Link</label>
                      <textarea type="text" class="form-control" name="sociallink" value=""><?php echo $row['sociallink']; ?></textarea>
                      </div>
                      <div class="form-group">
                      <label>Twitter Link</label>
                      <textarea type="text" class="form-control" name="sociallink1"><?php echo $row['sociallink1']; ?></textarea>
                      </div>
                      <div class="form-group">
                      <label>Instagram Link</label>
                      <textarea type="text" class="form-control" name="sociallink2"><?php echo $row['sociallink2']; ?></textarea>
                      </div>
                      <div class="form-group">
                      <label>Email Link</label>
                      <textarea type="text" class="form-control" name="sociallink3"><?php echo $row['sociallink3']; ?></textarea>
                      </div>
                      <div class="form-group">
                      <label>Github Link</label>
                      <textarea type="text" class="form-control" name="sociallink4"><?php echo $row['sociallink4']; ?></textarea>
                      </div>
                      <div class="form-group">
                      <label>Linkedin Link</label>
                      <textarea type="text" class="form-control" name="sociallink5"><?php echo $row['sociallink5']; ?></textarea>
                      </div>
                  <button type="submit" class="btn btn-primary btn-block mt-5" name="submit">Update</button>
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
