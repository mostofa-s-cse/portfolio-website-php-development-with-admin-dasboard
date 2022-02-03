<?php
include 'profilepic-process.php';
if (isset($_GET['id'])) {

		         $id = $_GET['id'];

		         $deleteQuery = "DELETE FROM work_tbl WHERE id='$id'";

		        if(mysqli_query($conn,$deleteQuery))
		        {
		           header("location:work.php?msg=".urlencode("Data Delete successfully"));
		        }
		    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Work</title>
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
        <div class="row mb-2 ">
          <div class="col-sm-12 m-auto">
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
            <h4 class="m-0 text-dark text-center mt-2">PORTFOLIO WORK SECTION</h4>
          <hr style="width:500px;">
          <a href="work-add.php" class="btn btn-info float-right mb-3">Add New</a>
        <div class="clearfix"></div>

            <table class="table table-bordered">
              <tr>
                <th style="width:5%;">S/N</th>
                <th style="width:5%;">Title Span</th>
                <th style="width:5%;">Title</th>
                <th style="width:10%;">Work Button</th>
                <th style="width:10%;">Button Image</th>
                <th style="width:10%;">Downloads Link</th>
                <th style="width:10%;">Demo Link</th>
                <th>Action</th>
              </tr>

              <?php 
                 $selectQuery = "SELECT * FROM work_tbl";

                 $result = mysqli_query($conn,$selectQuery);

                 if(mysqli_num_rows($result)>0){
                  $i=1;
                    while ($row= mysqli_fetch_assoc($result)) {?>
                       <tr>
                         <td><?php echo $i++ ?></td>
                         <td><?php echo $row['title_span']?></td>
                         <td><?php echo $row['title']?></td>
                         <td><?php echo $row['work_btn']?></td>
                         <td><img src="images/<?php echo $row['image']?>" alt="User Image" class="ml-3" style="width:40px;height:30px;"></td>
                         <td><?php echo $row['download']?></td>
                         <td><?php echo $row['demo']?></td>
                         <td>
                           <a href="work-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                           <a onclick="return confirm('Are you sure to delete?')" href="work.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <?php include 'footer.php';?>
</div>
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
