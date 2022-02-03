<?php
include "admin/config/connection.php";
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Work</title>
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
            <!-------PORTFOLIO WORK READMORE SECTION START------------------->
             <section class="portfolio-work" data-section="work">
                <div class="portfolio-narrow-content">
                    <div class="row">
                      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                       <?php
                          $query="SELECT * FROM work_tbl";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                          <span class="heading-meta"><?php echo $row['title_span'];?></span>
                             <h2 class="portfolio-heading animate-box"><?php echo $row['title'];?></h2>
                           <?php } } ?> 
                      </div>
                    </div>
                    <div class="portfolio-warkmenu mb-5" data-animate-effect="fadeInLeft">
                      <a href="javascript:void(0)" class="btn btn-primary" data-filter="all">all work</a>
                     <?php
                          $query="SELECT * FROM work_tbl";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                        <a href="javascript:void(0)" class="btn btn-primary" data-filter=".<?php echo $row['work_btn'];?>"><?php echo $row['work_btn'];?></a>
                        <?php } } ?>
                    </div>
                    <div class="row portfolio-item justify-content-center">
                      <?php
                          $query="SELECT * FROM  work_tbl where name='portfolio'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix portfolio">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                      <?php
                          $query="SELECT * FROM  work_tbl where name='e-comarce'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix e-comarce">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                      <?php
                          $query="SELECT * FROM  work_tbl where name='blog'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix blog">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                      <?php
                          $query="SELECT * FROM  work_tbl where name='schoolmanagement'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix schoolmanagement">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                      <?php
                          $query="SELECT * FROM  work_tbl where name='dashboard'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix dashboard">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                      <?php
                          $query="SELECT * FROM  work_tbl where name='apps'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix apps">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                      <?php
                          $query="SELECT * FROM  work_tbl where name='shop'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix shop">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                      <?php
                          $query="SELECT * FROM  work_tbl where name='business'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix business">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                      <?php
                          $query="SELECT * FROM  work_tbl where name='bootstrap'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix bootstrap">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                       <?php
                          $query="SELECT * FROM  work_tbl where name='contact-form'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix contact-form">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                       <?php
                          $query="SELECT * FROM  work_tbl where name='education'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix education">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                       <?php
                          $query="SELECT * FROM  work_tbl where name='event'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix event">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                       <?php
                          $query="SELECT * FROM  work_tbl where name='hotel'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix hotel">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                      <?php
                          $query="SELECT * FROM  work_tbl where name='wordpress'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix wordpress">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                       <?php
                          $query="SELECT * FROM  work_tbl where name='login-form'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="col-md-4 mix login-form">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                       <?php
                          $query="SELECT * FROM  work_tbl  where name='photography'";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                     <div class="col-md-4 mix photography">
                        <div class="single-portfolio">
                          <img src="admin/pages/images/<?php echo $row['image'];?>" alt="image" class="img-fluid work-img">
                          <div class="portfolio-overlay">
                              <h3><?php echo $row['name'];?></h3>
                            <div class="option">
                              <p class="icon">
                                <a href="#"><i class="icon-share3"></i></a>
                              </p>
                              <div class="download">
                                <a href="<?php echo $row['download'];?>" class="btn btn-primary">Download <i class="icon-download4"></i></a>
                              </div>
                              <div class="demo">
                                <a href="<?php echo $row['demo'];?>" class="btn btn-primary">Demo <i class="icon-eye"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
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