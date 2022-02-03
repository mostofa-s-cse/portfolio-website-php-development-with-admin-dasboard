<?php
include "admin/config/connection.php";
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Blog Page</title>
      <link rel="shortcut icon" href="images/favicon.png"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="" />
      <!-- Facebook and Twitter integration -->
      <meta property="og:title" content="" />
      <meta property="og:image" content="" />
      <meta property="og:url" content="" />
      <meta property="og:site_name" content="" />
      <meta property="og:description" content="" />
      <meta name="twitter:title" content="" />
      <meta name="twitter:image" content="" />
      <meta name="twitter:url" content="" />
      <meta name="twitter:card" content="" />
      <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      <!-- Animate.css -->
      <link rel="stylesheet" href="css/animate.css">
      <!-- Icomoon Icon Fonts-->
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/icofont.min.css">
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Flexslider  -->
      <link rel="stylesheet" href="css/flexslider.css">
      <!-- Flaticons  -->
      <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!-- Theme style  -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive  -->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/normalize.css">
      <!-- Modernizr JS -->
      <script src="js/modernizr-2.6.2.min.js"></script>
  </head>
  <body>
    <!-------PORTFOLIO ASIDE SECTION START------------------->
    <div class="fakeLoader"></div>
    <div id="portfolio-page">
      <div class="container-wrap">
            <a href="#" class="js-portfolio-nav-toggle portfolio-nav-toggle" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar"><i></i></a>
          <?php 
            include 'include/aside.php';
          ?>
           <!-------PORTFOLIO MAIN SECTION START------------------->
       <div class="portfolio-main">
            <!-------PORTFOLIO BLOG SECTION START------------------->
            <section class="portfolio-blog-post-readmore" data-section="blog">
              <div class="portfolio-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <?php
                          $query="SELECT * FROM blog";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                          <span class="heading-meta"><?php echo $row['title_span'];?></span>
                             <h2 class="portfolio-heading animate-box"><?php echo $row['title'];?></h2>
                           <?php } } ?> 
                    </div>
                </div>
                 <div class="row">
                      <?php
                          $query="SELECT * FROM blog_readmore WHERE id=1";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                  <div class="col-md-12 animate-box text-center" data-animate-effect="fadeInLeft">
                    <div class="blog-post-readmore">
                      <img src="admin/pages/images/<?php echo $row['image'];?>" class="img-fluid readmore-image" alt="">
                    <div class="blog">
                            <h4><?php echo $row['title'];?></h4>
                            <small class="text-muted"><?php echo $row['written'];?></small><br>
                            <span><small><?php echo $row['date'];?></small> | <small> <?php echo $row['subject'];?> </small></span>
                            <hr>
                            <p class="text-justify"><?php echo $row['des'];?></p>
                          </div>
                          </div>
                  </div>
                  <?php } } ?>
                </div>
                    </div>
                </div>
            </section>
        </div><!-- end:portfolio-main -->
      </div><!-- end:container-wrap -->
    </div><!-- end:portfolio-page -->
  <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
  <script src="js/jquery.countTo.js"></script>
  <script src="js/mixitup.min.js"></script>
	 <script>
     mixer = mixitup('.portfolio-item');
    $.fakeLoader({
      bgColor: '#2ecc71',
      spinner: "spinner1"
    }); 
    </script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

  </body>
</html>