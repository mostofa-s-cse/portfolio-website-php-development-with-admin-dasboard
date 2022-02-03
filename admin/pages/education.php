<?php
include 'profilepic-process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Education</title>
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
 <!--------------------------------------------SKILL SECTION AND SKILL-TYPE SECTION -------------------------------------------------------->
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
            <h4 class="m-0 text-dark text-center mt-2">PORTFOLIO EDUCATION SECTION</h4>
          <hr style="width:500px;">
        <div class="clearfix"></div>
            <table class="table table-bordered">
              <tr>
                <th>S/N</th>
                <th>title_span</th>
                <th>title</th>
                <th>Action</th>
              </tr>

              <?php 
                 $selectQuery = "SELECT * FROM education";

                 $result = mysqli_query($conn,$selectQuery);

                 if(mysqli_num_rows($result)>0){
                  $i=1;
                    while ($row= mysqli_fetch_assoc($result)) {?>
                       <tr>
                         <td><?php echo $i++ ?></td>
                         <td><?php echo $row['title_span']?></td>
                         <td><?php echo $row['title']?></td>
                         <td>
                           <a href="education-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                         </td>
                       </tr>
                 <?php 
                    }
                 }
               ?>
            </table>
           </div>
        </div><!-- /.row -->

<!------------------------------PORTFOLIO EDUCATION PANEL-GROUP SECTION---------------------------------------------->

         <div class="row mb-2">
          <div class="col-sm-12">
            <h4 class="m-0 text-dark text-center mt-5">PORTFOLIO EDUCATION PANEL-GROUP</h4>
          <hr style="width:500px;">
        <div class="clearfix"></div>
            <table class="table table-bordered">
              <tr>
               <th>S/N</th>
                <th>Panel Group Title</th>
                <th>Panel Group Description</th>
                <th>Panel Group Description1</th>
                <th>Panel Group Description2</th>
                <th>Panel Group Description3</th>
                <th style="width:25%">Action</th>
              </tr>

              <?php 
                 $selectQuery = "SELECT * FROM education";

                 $result = mysqli_query($conn,$selectQuery);

                 if(mysqli_num_rows($result)>0){
                  $i=1;
                    while ($row= mysqli_fetch_assoc($result)) {?>
                       <tr>
                         <td><?php echo $i++ ?></td>
                         <td>1. <?php echo $row['panel_group_title']?><hr>
                         2. <?php echo $row['panel_group_title1']?><hr>
                         3. <?php echo $row['panel_group_title2']?><hr>
                         4. <?php echo $row['panel_group_title3']?></td> 
                         <td><?php echo $row['panel_group_des']?></td>
                          <td><?php echo $row['panel_group_des1']?></td>
                         <td><?php echo $row['panel_group_des2']?></td>
                         <td><?php echo $row['panel_group_des3']?></td>
                         <td>
                           <a href="education-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mr-2">Edit</a>
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
