<?php
include 'profilepic-process.php';
   if (isset($_GET['id'])) {
         $id = $_GET['id'];
    }

    if (isset($_POST['submit'])) {
       $title = $_POST['title'];
       $title1 = $_POST['title1'];
       $title2 = $_POST['title2'];
       $title3 = $_POST['title3'];
       $value= $_POST['value'];
       $value1 = $_POST['value1'];
       $value2 = $_POST['value2'];
       $value3 = $_POST['value3'];
       $image = $_FILES['image']['name'];
  	   $target = "images/".basename($image);
    $sql = "UPDATE counter SET title='$title',title1='$title1',title2='$title2',title3='$title3',value='$value',value1='$value1',value2='$value2',value3='$value3',image='$image' WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
      header("location:counter.php?msg=".urlencode("Data Update successfully"));
    }
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
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
  <title>Counter Update</title>
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
        
             <h4 class="m-0 text-dark text-center">Update Counter Section</h4>
             <?php 

                  $sql = "SELECT * FROM counter WHERE id='$id'";

                  $result = mysqli_query($conn,$sql);
                  $row    = mysqli_fetch_array($result);                

              ?>
             <hr>
             <a href="counter.php" class="btn btn-warning float-right mb-3">Back</a>
             <div class="clearfix"></div>

            <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                      <label>Background Image</label>
                      <input type="file" class="form-control" name="image"value="<?php echo $row['image'];?>" required="">
                      </div>
                      <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                      </div>
                      <div class="form-group">
                      <label>Value</label>
                      <input type="text" class="form-control" name="value" value="<?php echo $row['value'];?>">
                      </div>
                      <div class="form-group">
                      <label>Title 1</label>
                      <input type="text" class="form-control" name="title1" value="<?php echo $row['title1'];?>">
                      </div>
                      <div class="form-group">
                      <label>Value 1</label>
                      <input type="text" class="form-control" name="value1" value="<?php echo $row['value1'];?>">
                      </div>
                      <div class="form-group">
                      <label>Title 2</label>
                      <input type="text" class="form-control" name="title2" value="<?php echo $row['title2'];?>">
                      </div>
                      <div class="form-group">
                      <label>Value 2</label>
                      <input type="text" name="value2" class="form-control" value="<?php echo $row['value2'];?>">
                      </div>
                      <div class="form-group">
                      <label>Title 3</label>
                      <input type="text" name="title3" class="form-control" value="<?php echo $row['title3'];?>">
                      </div>
                      <div class="form-group">
                      <label>Value 3</label>
                      <input type="text" name="value3" class="form-control" value="<?php echo $row['value3'];?>">
                      </div>
                       <button type="submit" class="btn btn-primary btn-block mt-4" name="submit">Update</button>
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
