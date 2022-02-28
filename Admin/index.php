
  <?php
  session_start();
   include "/head.php";
   if(!isset($_SESSION['admin_login'])){
    header("Location:login.php");
   }

?>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include "/header.php" ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php include "/menu.php" ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="d-flex justify-content-between flex-wrap">
                    <h5 class="card-title mr-4 mr-md-0 pr-4 pr-md-0">Revenue</h5>
                    <ul class="nav nav-pills nav-pills-custom ml-md-auto mr-0 mr-md-2 mr-lg-4" id="pills-tab-custom" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active show" id="pills-home-tab-custom" data-toggle="pill" href="#pills-week" role="tab"  aria-selected="true">
                          Month
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-month" role="tab"  aria-selected="false">
                          Week
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-year" role="tab"  aria-selected="false">
                          Year
                        </a>
                      </li>
                    </ul>
                    <div class="dropdown mb-3 mb-md-0  pb-3 pb-md-0">
                      <button class="btn btn-sm btn-outline-light btn-rounded dropdown-toggle text-dark btn-hover-border-only" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        2018
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">2015</a>
                        <a class="dropdown-item" href="#">2016</a>
                        <a class="dropdown-item" href="#">2017</a>
                        <a class="dropdown-item" href="#">2018</a>
                      </div>
                    </div>
                  </div> 
                  <canvas class="mr-1 mt-4" id="lineChart"></canvas>
                </div>
              </div>
          
          
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

