<?php
include 'profilepic-process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Slide</title>
  <link rel="stylesheet" href="../css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
<!--------------------------------------------Top Navbar -------------------------------------->
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
          <div class="col-sm-12">
          <?php
            if (isset($_GET['msg'])) {?>
              <div class="alert alert-success alert-dismissible fade show float-right" id="hide" role="alert" style="width:14rem;">
              <strong>Success!</strong> <?php echo $_GET['msg']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>      
           <?php   }
          ?>
            <h4 class="m-0 text-dark text-center mt-2">PORTFOLIO SLIDER SECTION</h4>
          <hr style="width:500px;">
        <div class="clearfix"></div>
            <table class="table table-bordered">
              <tr>
                <th>S/N</th>
                <th>Background Image</th>
                <th>Title</th>
                <th>Slogan</th>
                <th>CV Link</th>
                <th>Portfolio Link</th>
                <th>Action</th>
              </tr>

              <?php 
                 $selectQuery = "SELECT * FROM slide_tbl";

                 $result = mysqli_query($conn,$selectQuery);

                 if(mysqli_num_rows($result)>0){
                  $i=1;
                    while ($row= mysqli_fetch_assoc($result)) {?>
                         <tr>
                         <td><?php echo $i++ ?></td>
                         <td><img src="images/<?php echo $row['image']?>" class="ml-3" style="width:50px;height:40px;"><hr><img src="images/<?php echo $row['image2']?>" class="ml-3" style="width:50px;height:40px;"></td>
                         <td><?php echo $row['name']?><hr>
                         <?php echo $row['name2']?><hr></td> 
                         <td><?php echo $row['slogan']?><hr>
                          <?php echo $row['slogan2']?><hr></td>
                          <td><?php echo $row['cv']?></td>
                         <td> <?php echo $row['profile']?></td>
                         <td>
                           <a href="slider-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                         </td>
                       </tr>
                 <?php 
                    }
                 }
               ?>
            </table>
           </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </div><!--/. container-fluid -->
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
<script > 
       $(document).ready(function(){

           $('#hide').slideUp(5000);
         
       })
    </script>
</body>
</html>
