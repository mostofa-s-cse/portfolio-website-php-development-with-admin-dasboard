<section class="portfolio-contact" data-section="contact">
              <div class="portfolio-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                     <?php
                          $query="SELECT * FROM contact";
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
                  <div class="col-md-5">
                       <?php
                          $query="SELECT * FROM contact";
                          $result=mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                          ?>
                    <div class="portfolio-feature portfolio-feature-sm animate-box" data-animate-effect="fadeInLeft">
                      <div class="portfolio-icon">
                        <i class="icofont-email"></i>
                      </div>
                      <div class="portfolio-text">
                       <p><a href="#"><?php echo $row['gmail'];?></a></p>
                      </div>
                    </div>            
                    <div class="portfolio-feature portfolio-feature-sm animate-box" data-animate-effect="fadeInLeft">
                      <div class="portfolio-icon">
                        <i class="icofont-home"></i>
                      </div>
                      <div class="portfolio-text">
                        <p><?php echo $row['location'];?></p>
                      </div>
                    </div>           
                    <div class="portfolio-feature portfolio-feature-sm animate-box" data-animate-effect="fadeInLeft">
                      <div class="portfolio-icon">
                        <i class="icofont-phone"></i>
                      </div>
                      <div class="portfolio-text">
                        <p><a href="tel://"><?php echo $row['phone'];?></a></p>
                      </div>
                      <?php } } ?> 
                    </div>
                  </div>
                  <div class="col-md-7 col-md-push-1">
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                        <form method="post" action="contact-prosess.php">
                          <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required">
                          </div>
                          <div class="form-group">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email" required="required">
                          </div>
                          <div class="form-group">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required="required">
                          </div>
                          <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required="required"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-send-message" id="submit-button" value="Send Message">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>