<?php
include 'profilepic-process.php';
   if (isset($_GET['id'])) {
         $id = $_GET['id'];
    }
    if (isset($_POST['submit'])) {
       $title_span = $_POST['title_span'];
       $title = $_POST['title'];
       $pgt = $_POST['panel_group_title'];
       $pgt1 = $_POST['panel_group_title1'];
       $pgt2= $_POST['panel_group_title2'];
       $pgt3 = $_POST['panel_group_title3'];
       $pgd = $_POST['panel_group_des'];
       $pgd1 = $_POST['panel_group_des1'];
       $pgd2 = $_POST['panel_group_des2'];
       $pgd3 = $_POST['panel_group_des3'];
    $sql = "UPDATE education SET title_span='$title_span', title='$title',panel_group_title='$pgt',panel_group_title1='$pgt1',panel_group_title2='$pgt2',panel_group_title3='$pgt3',panel_group_des='$pgd',panel_group_des1='$pgd1',panel_group_des2='$pgd2',panel_group_des3='$pgd3' WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
      header("location:education.php?msg=".urlencode("Data Update successfully"));
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
  <title>Education Update</title>
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
        
             <h4 class="m-0 text-dark text-center">Update Education Section</h4>
             <?php 

                  $sql = "SELECT * FROM education WHERE id='$id'";

                  $result = mysqli_query($conn,$sql);
                  $row    = mysqli_fetch_array($result);                

              ?>
             <hr>
             <a href="education.php" class="btn btn-warning float-right mb-3">Back</a>
             <div class="clearfix"></div>

            <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                      <label>Title_span</label>
                      <input type="text" class="form-control" name="title_span" value="<?php echo $row['title_span'];?>">
                      </div>
                      <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                      </div>
                      <div class="form-group">
                      <label>Panel Group Title</label>
                      <input type="text" class="form-control" name="panel_group_title" value="<?php echo $row['panel_group_title'];?>">
                      </div>
                      <div class="form-group">
                      <label>Panel Group Description</label>
                      <textarea class="tinymce form-control" name="panel_group_des"><?php echo $row['panel_group_des'];?></textarea>
                      </div>
                      <div class="form-group">
                      <label>Panel Group Title 1</label>
                      <input type="text" name="panel_group_title1" class="form-control" value="<?php echo $row['panel_group_title1'];?>">
                      </div>
                      <div class="form-group">
                      <label>Panel Group Description 1</label>
                      <textarea class="form-control" name="panel_group_des1"><?php echo $row['panel_group_des1'];?></textarea>
                      </div>
                      <div class="form-group">
                      <label>Panel Group Title 2</label>
                      <input type="text" name="panel_group_title2" class="form-control" value="<?php echo $row['panel_group_title2'];?>">
                      </div>
                      <div class="form-group">
                      <label>Panel Group Description 2</label>
                      <textarea class="form-control" name="panel_group_des2"><?php echo $row['panel_group_des2'];?></textarea>
                      </div>
                      <div class="form-group">
                      <label>Panel Group Title 3</label>
                      <input type="text" name="panel_group_title3" class="form-control" value="<?php echo $row['panel_group_title3'];?>">
                      </div>
                      <div class="form-group">
                      <label>Panel Group Description 3</label>
                      <textarea class="form-control" name="panel_group_des3"><?php echo $row['panel_group_des3'];?></textarea>
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
