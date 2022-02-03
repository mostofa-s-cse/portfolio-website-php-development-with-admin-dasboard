<?php
include 'profilepic-process.php';
   if (isset($_GET['id'])) {
         $id = $_GET['id'];
    }
    if (isset($_POST['submit'])) {
      $ts = $_POST['title_span'];
       $t = $_POST['title'];
       $cd = $_POST['client_des'];
       $cn = $_POST['client_name'];
       $cs = $_POST['client_span'];
       $sm = $_POST['socialmedia'];
       $sm1 = $_POST['socialmedia1'];
       $sm2 = $_POST['socialmedia2'];
       $sm3 = $_POST['socialmedia3'];
       $sl = $_POST['sociallink'];
       $sl1 = $_POST['sociallink1'];
       $sl2 = $_POST['sociallink2'];
       $sl3 = $_POST['sociallink3'];
       $image = $_FILES['image']['name'];
  	   $target = "images/".basename($image);
    $sql = "UPDATE client SET title_span='$ts', title='$t',client_des='$cd',client_name='$cn',client_span='$cs',socialmedia='$sm',socialmedia1='$sm1',socialmedia2='$sm2',socialmedia3='$sm3',image='$image',sociallink='$sl', sociallink1='$sl1',sociallink2='$sl2',sociallink3='$sl3' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
      session_start();
      $_SESSION['toastr'] = array(
          'type'      => 'success', // or 'success' or 'info' or 'warning'
          'message' => ' Records update successfully!',
          'title'     => 'Data Updated'
      );
       if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

      header("location:client.php?msg=".urlencode("Data Update successfully"));

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
  <title>Client Upadte</title>
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
          <div class="col-sm-10  m-auto">
        
             <h4 class="m-0 text-dark text-center">Update Client Section</h4>
             <?php 

                  $sql = "SELECT * FROM client WHERE id='$id'";

                  $result = mysqli_query($conn,$sql);
                  $row    = mysqli_fetch_array($result);                

              ?>
             <hr>
             <a href="client.php" class="btn btn-warning float-right mb-3">Back</a>
             <div class="clearfix"></div>

              <form action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                      <label>Title Span</label>
                      <input type="text" class="form-control" name="title_span" value="<?php echo $row['title_span']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
                      </div>
                       <div class="form-group">
                      <label>Image</label>
                      <input type="file" class="form-control" name="image" value="">
                      </div>
                      <div class="form-group">
                      <label>Client Description</label>
                      <textarea class="form-control" name="client_des"><?php echo $row['client_des']; ?></textarea>
                      </div>
                      <div class="form-group">
                      <label>Client Name</label>
                      <input class="form-control" name="client_name" value="<?php echo $row['client_name']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Client Span</label>
                      <input class="form-control" name="client_span" value="<?php echo $row['client_span']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Facebook</label>
                      <input type="text" class="form-control" name="socialmedia" value="icofont-facebook">
                      </div>
                      <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="socialmedia1" value="icofont-email">
                      </div>
                      <div class="form-group">
                      <label>Twitter</label>
                      <input type="text" class="form-control" name="socialmedia2" value="icofont-twitter">
                      </div>
                      <div class="form-group">
                      <label>Instagram</label>
                      <input type="text" class="form-control" name="socialmedia3" value="icofont-instagram">
                      </div>
                      <div class="form-group">
                      <label>Facebook Link</label>
                      <input type="text" class="form-control" name="sociallink" value="<?php echo $row['sociallink']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Email Link</label>
                      <input type="text" class="form-control" name="sociallink1" value="<?php echo $row['sociallink1']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Twitter Link</label>
                      <input type="text" class="form-control" name="sociallink2" value="<?php echo $row['sociallink2']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Instagram Link</label>
                      <input type="text" class="form-control" name="sociallink3" value="<?php echo $row['sociallink3']; ?>">
                      </div>

                      <button type="submit" class="btn btn-primary mt-5 btn-block" name="submit">Submit</button>

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
