<?php
include 'profilepic-process.php';
   if (isset($_GET['id'])) {
         $id = $_GET['id'];
    }
    if (isset($_POST['submit'])) {
      $title_span = $_POST['title_span'];
      $title = $_POST['title'];
      $blog_title = $_POST['blog_title'];
       $written = $_POST['written'];
       $date = $_POST['date'];
       $subject = $_POST['subject'];
       $des = $_POST['des'];
       $readmorelink = $_POST['readmorelink'];
       $image = $_FILES['image']['name'];
  	   $target = "images/".basename($image);
    $sql = "UPDATE blog_tbl SET title_span='$title_span',title='$title',blog_title='$blog_title',written='$written',date='$date',image='$image',subject='$subject',des='$des',readmorelink='$readmorelink' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
       if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

      header("location:blog.php?msg=".urlencode("Data Update successfully"));

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
  <title>Blog Update</title>
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
             <h4 class="m-0 text-dark text-center">Update Blog Section</h4>
             <?php 
                  $sql = "SELECT * FROM blog_tbl WHERE id='$id'";
                  $result = mysqli_query($conn,$sql);
                  $row    = mysqli_fetch_array($result);                
              ?>
             <hr>
             <a href="blog.php" class="btn btn-warning float-right mb-3">Back</a>
             <div class="clearfix"></div>

              <form action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                      <label>Span</label>
                      <input type="text" class="form-control" name="title" value="<?php echo $row['title_span']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Blog Title</label>
                      <input type="text" class="form-control" name="blog_title" value="<?php echo $row['blog_title']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Image</label>
                      <input type="file" class="form-control" name="image" value="">
                      </div>
                      <div class="form-group">
                      <label>Blog Written</label>
                      <input type="text" class="form-control" name="written"value="<?php echo $row['written']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Blog Date</label>
                      <input type="text" class="form-control" name="date"value="<?php echo $row['date']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Blog Subject</label>
                      <input type="text" class="form-control" name="subject"value="<?php echo $row['subject']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Blog Description</label>
                      <textarea class="form-control" name="des"><?php echo $row['des']; ?></textarea>
                      </div>
                      <div class="form-group">
                      <label>Blog Readmore Link</label>
                      <textarea class="form-control" name="readmorelink"><?php echo $row['readmorelink']; ?></textarea>
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
