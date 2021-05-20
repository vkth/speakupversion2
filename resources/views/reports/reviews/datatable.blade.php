<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Nice admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">  
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="index" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ===========================Logout =================================== -->
                        <!-- 
                        $$\       $$$$$$\   $$$$$$\   $$$$$$\  $$\   $$\ $$$$$$$$\ 
                        $$ |     $$  __$$\ $$  __$$\ $$  __$$\ $$ |  $$ |\__$$  __|
                        $$ |     $$ /  $$ |$$ /  \__|$$ /  $$ |$$ |  $$ |   $$ |   
                        $$ |     $$ |  $$ |$$ |$$$$\ $$ |  $$ |$$ |  $$ |   $$ |   
                        $$ |     $$ |  $$ |$$ |\_$$ |$$ |  $$ |$$ |  $$ |   $$ |   
                        $$ |     $$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |   $$ |   
                        $$$$$$$$\ $$$$$$  |\$$$$$$  | $$$$$$  |\$$$$$$  |   $$ |   
                        \________|\______/  \______/  \______/  \______/    \__| -->
                        <!-- =============================Logout ================================= -->
                        
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Admin
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  
              $$$$$$\  $$$$$$\ $$$$$$$\  $$$$$$$$\ $$$$$$$\   $$$$$$\  $$$$$$$\  
             $$  __$$\ \_$$  _|$$  __$$\ $$  _____|$$  __$$\ $$  __$$\ $$  __$$\ 
            $$ /  \__|  $$ |  $$ |  $$ |$$ |      $$ |  $$ |$$ /  $$ |$$ |  $$ |
            \$$$$$$\    $$ |  $$ |  $$ |$$$$$\    $$$$$$$\ |$$$$$$$$ |$$$$$$$  |
             \____$$\   $$ |  $$ |  $$ |$$  __|   $$  __$$\ $$  __$$ |$$  __$$< 
            $$\   $$ |  $$ |  $$ |  $$ |$$ |      $$ |  $$ |$$ |  $$ |$$ |  $$ |
            \$$$$$$  |$$$$$$\ $$$$$$$  |$$$$$$$$\ $$$$$$$  |$$ |  $$ |$$ |  $$ |
             \______/ \______|\_______/ \________|\_______/ \__|  \__|\__|  \__|-->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                       <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle" href="#pageSubmenu" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                                <i class="mdi mdi-folder-multiple"></i>
                                <span class="hide-menu">Reports</span></a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="commends" aria-expanded="false">
                                            <i class="mdi mdi-forum"></i>
                                            <span class="hide-menu">Commendations</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="complaints" aria-expanded="false">
                                            <i class="mdi mdi-forum"></i>
                                            <span class="hide-menu">Complaints</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="reviews" aria-expanded="false">
                                            <i class="mdi mdi-forum"></i>
                                            <span class="hide-menu">Reviews</span>
                                        </a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="operators" aria-expanded="false">
                                <i class="mdi mdi-account-multiple"></i>
                                <span class="hide-menu">P.U.V. - Operators</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="vehicles" aria-expanded="false">
                                <i class="mdi mdi-car"></i>
                                <span class="hide-menu">Public Utility Vehicles</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="mobileappusers" aria-expanded="false">
                                <i class="mdi mdi-cellphone"></i>
                                <span class="hide-menu">Mobile App Users</span>
                            </a>
                        </li> 
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- =========================
                $$$$$$$\  $$$$$$$$\ $$\    $$\ $$$$$$\ $$$$$$$$\ $$\      $$\  $$$$$$\  
                $$  __$$\ $$  _____|$$ |   $$ |\_$$  _|$$  _____|$$ | $\  $$ |$$  __$$\ 
                $$ |  $$ |$$ |      $$ |   $$ |  $$ |  $$ |      $$ |$$$\ $$ |$$ /  \__|
                $$$$$$$  |$$$$$\    \$$\  $$  |  $$ |  $$$$$\    $$ $$ $$\$$ |\$$$$$$\  
                $$  __$$< $$  __|    \$$\$$  /   $$ |  $$  __|   $$$$  _$$$$ | \____$$\ 
                $$ |  $$ |$$ |        \$$$  /    $$ |  $$ |      $$$  / \$$$ |$$\   $$ |
                $$ |  $$ |$$$$$$$$\    \$  /   $$$$$$\ $$$$$$$$\ $$  /   \$$ |\$$$$$$  |
                \__|  \__|\________|    \_/    \______|\________|\__/     \__| \______/ 
  
                ===================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Reviews</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content 
                    $$$$$$$\   $$$$$$\   $$$$$$\  $$$$$$$$\        $$$$$$\   $$$$$$\  $$\   $$\ $$$$$$$$\ $$$$$$$$\ $$\   $$\ $$$$$$$$\ 
                    $$  __$$\ $$  __$$\ $$  __$$\ $$  _____|      $$  __$$\ $$  __$$\ $$$\  $$ |\__$$  __|$$  _____|$$$\  $$ |\__$$  __|
                    $$ |  $$ |$$ /  $$ |$$ /  \__|$$ |            $$ /  \__|$$ /  $$ |$$$$\ $$ |   $$ |   $$ |      $$$$\ $$ |   $$ |   
                    $$$$$$$  |$$$$$$$$ |$$ |$$$$\ $$$$$\          $$ |      $$ |  $$ |$$ $$\$$ |   $$ |   $$$$$\    $$ $$\$$ |   $$ |   
                    $$  ____/ $$  __$$ |$$ |\_$$ |$$  __|         $$ |      $$ |  $$ |$$ \$$$$ |   $$ |   $$  __|   $$ \$$$$ |   $$ |   
                    $$ |      $$ |  $$ |$$ |  $$ |$$ |            $$ |  $$\ $$ |  $$ |$$ |\$$$ |   $$ |   $$ |      $$ |\$$$ |   $$ |   
                    $$ |      $$ |  $$ |\$$$$$$  |$$$$$$$$\       \$$$$$$  | $$$$$$  |$$ | \$$ |   $$ |   $$$$$$$$\ $$ | \$$ |   $$ |   
                    \__|      \__|  \__| \______/ \________|       \______/  \______/ \__|  \__|   \__|   \________|\__|  \__|   \__|   
               ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                    <h6 class="card-subtitle">Using the most basic table markup, here’s how <code>.table</code>-based tables look in Bootstrap. All table styles are inherited in Bootstrap 4, meaning any nested tables will be styled in the same manner as the parent.</h6>
                                    <div class="table-responsive">
                                        <div class="panel panel-default">
                                    
                                            <div class="panel-body">
                                                <table class="table" id="datatable" border="0" cellpadding="2" cellspacing="1" class="pretty" style="width:100%">
                            
                                                    <<thead>
                                                        <tr>
                                                            <th>User ID</th>
                                                            <th>Body Plate</th>
                                                            <th>Ratings</th>
                                                            <th>Review</th>
                                                            <th>Flags</th>
                                                            <th>Action</th>
                                                        </tr> 
                                                    </thead>
                                                        @foreach ($reviews as $review)
                                                        <tr>
                                                                    <td>{{ $review->user_id }}</td>
                                                                    <td>{{ $review->body_plate }}</td>
                                                                    <td>{{ $review->ratings}}</td>
                                                                    <td>{{ $review->narrative }}</td>
                                                                    <td>{{ $review->flags }}</td>
                                                                    <td></td>
                                                                </tr>  
                                                        @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                
                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

            
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                 2021. All Rights Reserved By Ateneo de Naga Univertsity. 
                Designed and Developed by Delas Alas, Ferrer, and San Joaquin
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    
    <script type="text/javascript"> 
    $(document).ready(function () {
        $('#datatable').DataTable({
            dom: 'Bfrtip',
            buttons: ['csv', 'excel', 'pdf', 'print']
        });
    });
    </script>
</body>

</html>
