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
    <title>Speak Up - Naga</title>
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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
        <!-- 
             $$$$$$$$\  $$$$$$\  $$$$$$$\  $$$$$$$\   $$$$$$\  $$$$$$$\  
             \__$$  __|$$  __$$\ $$  __$$\ $$  __$$\ $$  __$$\ $$  __$$\ 
                $$ |   $$ /  $$ |$$ |  $$ |$$ |  $$ |$$ /  $$ |$$ |  $$ |
                $$ |   $$ |  $$ |$$$$$$$  |$$$$$$$\ |$$$$$$$$ |$$$$$$$  |
                $$ |   $$ |  $$ |$$  ____/ $$  __$$\ $$  __$$ |$$  __$$< 
                $$ |   $$ |  $$ |$$ |      $$ |  $$ |$$ |  $$ |$$ |  $$ |
                $$ |    $$$$$$  |$$ |      $$$$$$$  |$$ |  $$ |$$ |  $$ |
                \__|    \______/ \__|      \_______/ \__|  \__|\__|  \__|
                                            
            Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->


        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                   
                   
                    <!-- ============================================================== -->
                    <!-- Logo 
                    $$\       $$$$$$\   $$$$$$\   $$$$$$\  
                    $$ |     $$  __$$\ $$  __$$\ $$  __$$\ 
                    $$ |     $$ /  $$ |$$ /  \__|$$ /  $$ |
                    $$ |     $$ |  $$ |$$ |$$$$\ $$ |  $$ |
                    $$ |     $$ |  $$ |$$ |\_$$ |$$ |  $$ |
                    $$ |     $$ |  $$ |$$ |  $$ |$$ |  $$ |
                    $$$$$$$$\ $$$$$$  |\$$$$$$  | $$$$$$  |
                    \________|\______/  \______/  \______/ -->
                    <!-- ============================================================== -->



                    <div class="navbar-brand">
                        <a href="./" class="logo">
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
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>

                
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                  <ul class="navbar-nav float-left mr-auto"></ul>
                    <ul class="navbar-nav float-right">
                        
                        <!-- 
                        $$\       $$$$$$\   $$$$$$\   $$$$$$\  $$\   $$\ $$$$$$$$\ 
                        $$ |     $$  __$$\ $$  __$$\ $$  __$$\ $$ |  $$ |\__$$  __|
                        $$ |     $$ /  $$ |$$ /  \__|$$ /  $$ |$$ |  $$ |   $$ |   
                        $$ |     $$ |  $$ |$$ |$$$$\ $$ |  $$ |$$ |  $$ |   $$ |   
                        $$ |     $$ |  $$ |$$ |\_$$ |$$ |  $$ |$$ |  $$ |   $$ |   
                        $$ |     $$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |   $$ |   
                        $$$$$$$$\ $$$$$$  |\$$$$$$  | $$$$$$  |\$$$$$$  |   $$ |   
                        \________|\______/  \______/  \______/  \______/    \__| -->
                       
                        
                        <li class="nav-item d-none d-md-block ">
                            <a href="{{ url('/logout') }}" class="nav-link "
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                            <i class="mdi mdi-logout"></i> Logout </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
</body>
        

<!--   
             $$$$$$\  $$$$$$\ $$$$$$$\  $$$$$$$$\ $$$$$$$\   $$$$$$\  $$$$$$$\  
            $$  __$$\ \_$$  _|$$  __$$\ $$  _____|$$  __$$\ $$  __$$\ $$  __$$\ 
            $$ /  \__|  $$ |  $$ |  $$ |$$ |      $$ |  $$ |$$ /  $$ |$$ |  $$ |
            \$$$$$$\    $$ |  $$ |  $$ |$$$$$\    $$$$$$$\ |$$$$$$$$ |$$$$$$$  |
             \____$$\   $$ |  $$ |  $$ |$$  __|   $$  __$$\ $$  __$$ |$$  __$$< 
            $$\   $$ |  $$ |  $$ |  $$ |$$ |      $$ |  $$ |$$ |  $$ |$$ |  $$ |
            \$$$$$$  |$$$$$$\ $$$$$$$  |$$$$$$$$\ $$$$$$$  |$$ |  $$ |$$ |  $$ |
             \______/ \______|\_______/ \________|\_______/ \__|  \__|\__|  \__|                                                         -->


                <aside class="left-sidebar" data-sidebarbg="skin5">
                    <div class="scroll-sidebar">
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
                                        <span class="hide-menu">Operators</span>
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
                    
                    </div>
                
                </aside>
               
               
                <!--DASHBORAD-->
                
                    <div class="container-fluid">
                        @yield('content')
                    </div>
  
  