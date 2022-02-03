<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="deshboard.php" class="brand-link">
      <span class="brand-text font-weight-light ml-5">Protfolio Admin</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <img src="pages/images/<?php 
                      if (isset($_SESSION['image'])){
                        echo $_SESSION['image'];
                      }
                       ?>" class="brand-image img-circle elevation-3"
           style="width: 30px; height: 28px;">
              <p class="ml-2">
                <?php 
                    if (isset($_SESSION['name'])){
                      echo $_SESSION['name'];
                    }
                  ?>
                <i class="fas fa-angle-left right mt-1"></i>
               </p>
            </a>
            <ul class="nav nav-treeview ml-5">
              <li>
                <a href="pages/profile.php" class="nav-link">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-white"></i>
                  Profile
                </a>
              </li>
              <li>
               <a href="pages/account.php" class="nav-link">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-white"></i>
                  Settings
                </a>
              </li>
              <li>
                 <a href="#" class="nav-link">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-white"></i>
                  Activity Log
                </a>
              </li>
              <li>
                <a href="logout.php" class="nav-link">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-white"></i>
                  Logout
                </a>
              </li>
            </ul>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pages Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">14</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/aside.php" class="nav-link">
                  <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Aside</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/slider.php" class="nav-link">
                  <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/about.php" class="nav-link">
                 <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/services.php" class="nav-link">
               <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/counter.php" class="nav-link">
                 <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Counter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/skill.php" class="nav-link">
                  <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Skills</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/education.php" class="nav-link">
                  <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Education</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/experience.php" class="nav-link">
                  <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Experience</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/work.php" class="nav-link">
                 <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Work</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/work-readmore.php" class="nav-link">
                 <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Work ReadMore</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/client.php" class="nav-link">
                  <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/blog.php" class="nav-link">
                <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Blog</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="pages/blog-readmore.php" class="nav-link">
                <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Blog ReadMore</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/contact.php" class="nav-link">
                  <i class="fas fa-angle-right text-warning mr-2"></i>
                  <p>Portfolio Contact</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>