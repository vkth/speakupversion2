@extends ('layouts.dashboard.layout')
@section('content')

                               
    <main class="app-content">
      <div class="app-title">                                            
      <div>
          <h1>Dashboard</h1>
          <p>Welcome to Dashboard Admin!</p>
        </div>
        
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        </ul>
      </div>
      
      
        
      </div>
      <ul class="app-breadcrumb breadcrumb">
      <!-- Content -->
      <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-folder"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            
                                            <div class="stat-text">Total: <span class="count">
                                            <?php
                                                $connection = mysqli_connect("localhost", "root", "", "speakupversion2");

                                                  $query = "SELECT id FROM complaints ORDER BY id" ;
                                                  $query_run = mysqli_query($connection, $query);

                                                  $row = mysqli_num_rows($query_run);

                                                  echo '<h4>' .$row. '</h4>';
                                              ?>
                                            </span></div>
                                            <div class="stat-heading">Complaints</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">Total: <span class="count">
                                              <?php
                                                $connection = mysqli_connect("localhost", "root", "", "speakupversion2");

                                                  $query = "SELECT id FROM reviews ORDER BY id" ;
                                                  $query_run = mysqli_query($connection, $query);

                                                  $row = mysqli_num_rows($query_run);

                                                  echo '<h4>' .$row. '</h4>';
                                              ?></span></div>
                                            <div class="stat-heading">Reviews</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">Total: <span class="count">
                                              <?php
                                                $connection = mysqli_connect("localhost", "root", "", "speakupversion2");
                                                
                                                  $query = "SELECT id FROM mobileappusers ORDER BY id" ;
                                                  $query_run = mysqli_query($connection, $query);

                                                  $row = mysqli_num_rows($query_run);

                                                  echo '<h4>' .$row. '</h4>';
                                              ?>
                                          </div></span></div>
                                            <div class="stat-heading">Mobile App Users</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- To Do and Live Chat -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                               
                                                <h3 class="title">Purpose and Description</h3>
                                                  <li>This is a system designed to facilitate the commuters in sending their complaints 
                                                    and/or commendations towards a certain PUV to the Public Safety Office(PSO), 
                                                    the office in-charge for public safety and concern.
                                                  <li>It is a web and mobile application, the web application is developed for
                                                  the admin’s use and the mobile application is developed to cater the commuter’s need.</li>

                                                
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul>
                                        <h3 class="tile-title">Features</h3>
                                       
                                          <li>Built with Bootstrap 4, SASS and PUG.js</li>
                                          <li>Fully responsive and modular code</li>
                                          <li>Seven pages including admin login, view and print friendly report pages</li>
                                          <li>Widgets to effectively display statistics</li>
                                          <li>Data tables with sort, search and paginate functionality</li>
                                          <li>Custom form elements like toggle buttons, auto-complete,and tags</li>
                                          <li>A inbuilt toast library for providing meaningful response messages to user's actions</li>
                                      

                                        </ul>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                

            </div>
            </div> 
            <!-- Footer -->
            <footer class="site-footer">
                        <div class="footer-inner bg-white">
                            <div class="row">
                                <div class="col-sm-6">
                                    Copyright &copy; 2018 Ela Admin . 2021 Ateneo de Naga University .
                                </div>
                                <div class="col-sm-6 text-right">
                                    Developed by Delas Alas, Ferrer, and San Joaquin .
                                    Designed by <a href="https://colorlib.com">Colorlib</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                 <!-- /.site-footer -->   
        </div>
        
        </ul>
    </main>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
   

    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>

    
    <!--CLOCK SCRIPT-->
            
    <script type="text/javascript">
                setInterval(displayclock, 500);

                function displayclock() {
                    var time = new Date();
                    var hrs = time.getHours();
                    var min = time.getMinutes();
                    var sec = time.getSeconds();
                    var en = 'AM';
                    if (hrs > 12) {
                        en = 'PM';
                    }
                    if (hrs > 12) {
                        hrs = hrs - 12;
                    }
                    if (hrs == 0) {
                        hrs = 12;
                    }
                    if (hrs < 10) {
                        hrs = '0' + hrs;
                    }
                    if (min < 10) {
                        min = '0' + min;
                    }
                    if (sec < 10) {
                        sec = '0' + sec;
                    }
                    document.getElementById("clock").innerHTML = hrs + ':' + min + ':' + sec + ' ' + en;
                }
               
            </script>
</body>
</html>


@endsection