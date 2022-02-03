<?php
include "admin/config/connection.php";
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>MOHAMMAD MOSTOFA</title>
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
           <!-------PORTFOLIO SLIDER SECTION START------------------->
            
           <section id="slider" data-section="home">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Carousel indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
              </ol>
              <!-- Wrapper for carousel items -->
              <div class="carousel-inner font-italic">
              
              <?php
                  $query="SELECT * FROM slide_tbl";
                  $result = mysqli_query($conn,$query);
                  if(mysqli_num_rows($result)>0) {
                    while($row=mysqli_fetch_assoc($result)){
                  ?>
                   <div class="carousel-item active" style="background: url(admin/pages/images/<?php echo $row['image'];?>)no-repeat center center / cover;">
                
                  <div class="slider-content">
                  <?php
                          if (isset($_GET['msg'])) {?>
                            <span class="float-right" id="hide" role="alert" >
                             <?php echo $_GET['msg']; ?>
                          </span>      
                        <?php   }
                        ?>

                    <h3 class="display-3"><?php echo $row['name']?></h3>
                    <p><?php echo $row['slogan']?></p>

              
                    <a href="<?php echo $row['cv']?>"target="_blank" class="btn text-white bg-dark">DOWNLOAD CV <i class="icon-download4"></i></a>
                  </div>
                </div>
                
                  <div class="carousel-item" style="background: url(admin/pages/images/<?php echo $row['image2'];?>)no-repeat center center / cover;">
                   
                  <div class="slider-content">
                 
                    <h3 class="display-3"><?php echo $row['name2']?></h3>
                    <p><?php echo $row['slogan2']?></p>
                   
                    <a href="<?php echo $row['profile']?>"target="_blank" class="btn text-white bg-dark">VIEW PORTFOLIO <i class="icon-briefcase3"></i></a>
                  </div>
                </div>
              </div>
               <?php } } ?>
            </div>
            </section>
           <!-------PORTFOLIO ABOUT SECTION START------------------->
            <section class="portfolio-about" data-section="about">
              <div class="portfolio-narrow-content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row row-bottom-padded-sm animate-box bg-white">
                      <div class="col-md-12">
                        <div class="about-desc">
                         <?php
                          $query="SELECT * FROM about";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                          <span class="heading-meta"><?php echo $row['title_span'];?></span>
                             <h2 class="portfolio-heading"><?php echo $row['title'];?></h2>
                            <p class="font-2"><?php echo $row['description'];?></p>
                            <?php } } ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 animate-box">
                        <div class="hire shadow">
                         <?php
                          $query="SELECT * FROM about";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                              <h2><?php echo $row['hire'];?></h2>
                            <?php } } ?>
                          <a href="<?php echo $row['hirelink'];?>" class="btn-hire">Hire me</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
           <!-------PORTFOLIO SERVICES SECTION START------------------->
           <section class="portfolio-services" data-section="services">
              <div class="portfolio-narrow-content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row row-bottom-padded-sm animate-box bg-white">
                      <div class="col-md-12">
                        <div class="about-desc">
                        <?php
                          $query="SELECT * FROM services";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                          <span class="heading-meta"><?php echo $row['title_span'];?></span>
                             <h2 class="portfolio-heading"><?php echo $row['title'];?></h2>
                            <?php } } ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                    <div class="card-columns animate-box">
                      <?php
                          $query="SELECT * FROM services";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <div class="animate-box text-center" data-animate-effect="fadeInLeft">
                     <img class="services-image" src="admin/pages/images/<?php echo $row['image'];?>" alt="">
                        <div class="services card-body shadow">
                          <h3 class="mb-4"><?php echo $row['services_title'];?></h3>
                          <p class="text-justify"><?php echo $row['services_des'];?></p>
                        </div>
                        <?php } } ?> 
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
            </section>
           <!-------PORTFOLIO COUNGTER SECTION START------------------->
            <?php
                          $query="SELECT * FROM counter";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
            <div id="portfolio-counter" class="shadow"style="background-image: url(admin/pages/images/<?php echo $row['image'];?>);"
              data-stellar-background-ratio="0.5">
              <div class="portfolio-narrow-content">
                 <div class="row">
                  <div class="col-md-3 text-center animate-box">
                    <span class="portfolio-counter js-counter" data-from="0" data-to="<?php echo $row['value'];?>" data-speed="5000"
                      data-refresh-interval="50"></span><br>
                    <span class="portfolio-counter-label"><?php echo $row['title'];?></span>
                  </div>
                  <div class="col-md-3 text-center animate-box">
                    <span class="portfolio-counter js-counter" data-from="0" data-to="<?php echo $row['value1'];?>" data-speed="5000"
                      data-refresh-interval="50"></span><br>
                    <span class="portfolio-counter-label"><?php echo $row['title1'];?></span>
                  </div>
                  <div class="col-md-3 text-center animate-box">
                    <span class="portfolio-counter js-counter" data-from="0" data-to="<?php echo $row['value2'];?>" data-speed="5000"
                      data-refresh-interval="50"></span><br>
                    <span class="portfolio-counter-label"><?php echo $row['title2'];?></span>
                  </div>
                  <div class="col-md-3 text-center animate-box">
                    <span class="portfolio-counter js-counter" data-from="0" data-to="<?php echo $row['value3'];?>" data-speed="5000"
                      data-refresh-interval="50"></span><br>
                    <span class="portfolio-counter-label"><?php echo $row['title3'];?></span>
                  </div>
                </div>
                <?php } } ?> 
              </div>
            </div>
           <!-------PORTFOLIO SKILLS SECTION START------------------->
            <section class="portfolio-skills" data-section="skills">
              <div class="portfolio-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                         <?php
                          $query="SELECT * FROM skill";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                          <span class="heading-meta"><?php echo $row['title_span'];?></span>
                             <h2 class="portfolio-heading"><?php echo $row['title'];?></h2>
                           <?php } } ?>      
                      </div>
                  </div>
                <div class="row">
                <?php
                          $query="SELECT * FROM skill";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                  <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <p class="font-2 mb-1"><?php echo $row['description'];?></p>
                  </div>
                  <?php } } ?>  
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                     <div class="progressbar">
                  <?php
                          $query="SELECT * FROM skill";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                    <div class="progress-wrap font-italic">
                      <h3><?php echo $row['skill_name'];?></h3>
                      <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100" style="width:<?php echo $row['value'];?>">
                          <span><?php echo $row['value'];?></span>
                        </div>
                      </div>
                    </div>
                    <?php } } ?>
                  </div>
                 </div>
                </div>
              </div>
            </section>
            <!-------PORTFOLIO EDUCATION SECTION START------------------->
             <section class="portfolio-education" data-section="education">
              <div class="portfolio-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <?php
                          $query="SELECT * FROM education";
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
                  <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <div class="fancy-collapse-panel">
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                        <?php
                          $query="SELECT * FROM education";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                          <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne"><?php echo $row['panel_group_title'];?>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-md-12">
                                  <p><?php echo $row['panel_group_des'];?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo"><?php echo $row['panel_group_title1'];?>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                              <p><?php echo $row['panel_group_des1'];?></p>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree"><?php echo $row['panel_group_title2'];?>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                              <p><?php echo $row['panel_group_des2'];?></p>
                            </div>
                          </div>
                        </div>
            
                        <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour"><?php echo $row['panel_group_title3'];?>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                              <p><?php echo $row['panel_group_des3'];?></p>
                            </div>
                          </div>
                        </div>
                        <?php } } ?> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
           <!-------PORTFOLIO EXPERIENCE SECTION START------------------->
            <section class="portfolio-experience" data-section="experience">
              <div class="portfolio-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                   <?php
                          $query="SELECT * FROM experience";
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
                  <div class="col-md-12">
                    <div class="timeline-centered">
                      <?php
                          $query="SELECT * FROM experience";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                      <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                        <div class="timeline-entry-inner">
                          <div class="timeline-icon color-1 shadow">
                            <i class="icon-pen2"></i>
                          </div>
                          <div class="timeline-label shadow">
                            <h2><a href="#"><?php echo $row['timeline_title'];?></a> <span><?php echo $row['timeline_date'];?></span></h2>
                            <p><?php echo $row['timeline_des'];?></p> 
                          </div>
                        </div>
                      </article>
                      <?php } } ?>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-------PORTFOLIO WORK SECTION START------------------->
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
                    </div>
                    <div class="row">
                      <div class="col-md-12 animate-box">
                        <p><a href="work-readmore.php" class="btn btn-primary btn-load-more">Load more <i class="icon-reload"></i></a></p>
                      </div>
                    </div>
                </div>
            </section>
            <!-------PORTFOLIO CLIENT SECTION START------------------->
            <section class="portfolio-client">
              <div class="portfolio-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <?php
                          $query="SELECT * FROM client";
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
                          $query="SELECT * FROM client";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                  <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                    <div class="client-photo">
                      <img class="shadow" src="admin/pages/images/<?php echo $row['image'];?>" alt="image">
                    </div>
                    <div class="client-review">
                      <p><?php echo $row['client_des'];?></p>
                      <h3><?php echo $row['client_name'];?></h3>
                      <span class="role"><?php echo $row['client_span'];?></span>
                      <div class="social-link">
                          <li><a class="shadow" target="_blank" href="<?php echo $row['sociallink'];?>"><i class="<?php echo $row['socialmedia'];?>"></i></a></li>
                          <li><a class="shadow" target="_blank" href="<?php echo $row['sociallink1'];?>"><i class="<?php echo $row['socialmedia1'];?>"></i></a></li>
                          <li><a class="shadow" target="_blank" href="<?php echo $row['sociallink2'];?>"><i class="<?php echo $row['socialmedia2'];?>"></i></a></li>
                          <li><a class="shadow" target="_blank" href="<?php echo $row['sociallink3'];?>"><i class="<?php echo $row['socialmedia3'];?>"></i></a></li>
                      </div>
                    </div>
                  </div>
                  <?php } } ?>
                </div>
              </div>
            </section>
            <!-------PORTFOLIO BLOG SECTION START------------------->
            <section class="portfolio-blog" data-section="blog">
              <div class="portfolio-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <?php
                          $query="SELECT * FROM blog_tbl";
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
                          $query="SELECT * FROM blog_tbl";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                  <div class="col-md-4 col-sm-6 animate-box text-center" data-animate-effect="fadeInLeft">
                    <div class="blog-post shadow">
                      <img src="admin/pages/images/<?php echo $row['image'];?>" class="card-img-top img-fluid img-responsive" alt="">
                    <div class="blog-body">
                            <h4><?php echo $row['blog_title'];?></h4>
                            <small class="text-muted"><?php echo $row['written'];?></small><br>
                            <span><small><?php echo $row['date'];?></small> | <small> <?php echo $row['subject'];?> </small></span>
                            <hr>
                            <p class="lead"><?php echo $row['des'];?></p>
                            <a href="<?php echo $row['readmorelink'];?>" class="btn btn-dark blog-read-more1">Read More</a>
                          </div>
                          </div>
                  </div>
                  <?php } } ?>
                </div>
                </div>
            </section>
           <!-------PORTFOLIO CONTACT SECTION START------------------->
            <?php 
            include 'include/contact.php';
          ?>
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