 <aside id="portfolio-aside" role="complementary" class="border js-fullheight">
              <a href="#" class="js-portfolio-nav-toggle portfolio-nav-toggle" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar"><i></i></a>
                  <div class="text-center">
                  <?php
                  $query="SELECT * FROM aside_tbl";
                  $result=mysqli_query($conn,$query);
                  if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                  ?>
                       <img class="author-img mb-1 shadow" src="admin/pages/images/<?php echo $row['image'];?>" alt="img">
                     
                    <h1 id="portfolio-logo"><a href="index.html"><?php echo $row['name'];?></a></h1>
                    <span class="position mb-3"><a href="#" class="text-danger font-italic"><?php echo $row['span_title'];?></a></span>
                  </div>
                  <nav id="portfolio-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                      <ul>
                        <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                        <li><a href="#" data-nav-section="about">About</a></li>
                        <li><a href="#" data-nav-section="skills">Skills</a></li>
                        <li><a href="#" data-nav-section="education">Education</a></li>
                        <li><a href="#" data-nav-section="experience">Experience</a></li>
                        <li><a href="#" data-nav-section="work">Work</a></li>
                        <li><a href="#" data-nav-section="blog">Blog</a></li>
                        <li><a href="#" data-nav-section="contact">Contact</a></li>
                      </ul>
                    </div>
                  </nav>
                  <div class="portfolio-footer font-italic">
                      <p class="text-center"><small>Copyright &copy;
                      <script>document.write(new Date().getFullYear());</script>
                      by <a href="<?php echo $row['copyrlink'];?>" class="text-capitalize" target="_blank"> <?php echo $row['copyr'];?></a>
                    <ul>
                      <li><a class="shadow" target="_blank" href="<?php echo $row['sociallink'];?>"><i class="icofont-facebook"></i></a></li>
                      <li><a class="shadow" target="_blank" href="<?php echo $row['sociallink1'];?>"><i class="icofont-twitter"></i></a></li>
                      <li><a class="shadow" target="_blank" href="<?php echo $row['sociallink2'];?>"><i class="icofont-instagram"></i></a></li>
                      <li><a class="shadow" target="_blank" href="<?php echo $row['sociallink3'];?>"><i class="icofont-email"></i></a></li>
                      <li><a class="shadow" target="_blank" href="<?php echo $row['sociallink4'];?>"><i class="icomoon icon-github"></i></a></li>
                      <li><a class="shadow" target="_blank" href="<?php echo $row['sociallink5'];?>"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                    </div>
                   <?php } } ?>
            </aside>