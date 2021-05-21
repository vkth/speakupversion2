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
    <title>Speak Up - Naga </title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <!-- ============================================================== -->
                        <!-- End of LOGOUT -->
                        <!-- ============================================================== -->
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
             \______/ \______|\_______/ \________|\_______/ \__|  \__|\__|  \__|-->


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
               
            </div>
           
    </aside>
        <div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Vehicles</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Vehicles</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
<!-- 

        $$$$$$\  $$$$$$$\  $$$$$$$\                               
        $$  __$$\ $$  __$$\ $$  __$$\                              
        $$ /  $$ |$$ |  $$ |$$ |  $$ |                             
        $$$$$$$$ |$$ |  $$ |$$ |  $$ |                             
        $$  __$$ |$$ |  $$ |$$ |  $$ |                             
        $$ |  $$ |$$ |  $$ |$$ |  $$ |                             
        $$ |  $$ |$$$$$$$  |$$$$$$$  |                             
        \__|  \__|\_______/ \_______/                              
                                                           
      $$\      $$\  $$$$$$\  $$$$$$$\   $$$$$$\  $$\       
      $$$\    $$$ |$$  __$$\ $$  __$$\ $$  __$$\ $$ |      
      $$$$\  $$$$ |$$ /  $$ |$$ |  $$ |$$ /  $$ |$$ |      
      $$\$$\$$ $$ |$$ |  $$ |$$ |  $$ |$$$$$$$$ |$$ |      
      $$ \$$$  $$ |$$ |  $$ |$$ |  $$ |$$  __$$ |$$ |      
      $$ |\$  /$$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |      
      $$ | \_/ $$ | $$$$$$  |$$$$$$$  |$$ |  $$ |$$$$$$$$\ 
      \__|     \__| \______/ \_______/ \__|  \__|\________|
                                                           
-->             
<!-- Start Add Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                
                            
                               <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Vehicle</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>

                                <form action="{{ action('VehicleController@store') }}" method="POST">
                                    {{ csrf_field() }}                            
                                    
                                                <div class="modal-body">
                                                    
                                                    <div class="form-group">
                                                        <label>Body Plate:</label>
                                                        <input type="text" name="body_plate" class="form-control" placeholder="Enter Body plate">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="vehicles">Type of Vehicle:</label>
                                                        <select class="form-control" name="vehicle">
                                                            <option>Select Vehicle</option>
                                                            <option>Jeep</option>
                                                            <option>Taxi</option>
                                                            <option>Taxicle</option>
                                                            <option>Tricycle</option>
                                                        </select>    
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="status">Status:</label>
                                                            <select class="form-control" name="status">
                                                            <option>Select Status</option>
                                                            <option>Certified</option>
                                                            <option>Not Certified</option>
                                                        
                                                        </select>
                                                    </div>
                                                    
                                                        <input type="hidden" name="operator_id" id="operator_id" value="1"  >

                                                </div>
                                    
                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Create New Vehicle</button>
                                                </div>
                                            
                                </form>        

                            </div>
                        </div>
                    </div>
        <!-- End Add Modal -->
        <!--
            $$$$$$$$\ $$$$$$$\  $$$$$$\ $$$$$$$$\                
            $$  _____|$$  __$$\ \_$$  _|\__$$  __|               
            $$ |      $$ |  $$ |  $$ |     $$ |                  
            $$$$$\    $$ |  $$ |  $$ |     $$ |                  
            $$  __|   $$ |  $$ |  $$ |     $$ |                  
            $$ |      $$ |  $$ |  $$ |     $$ |                  
            $$$$$$$$\ $$$$$$$  |$$$$$$\    $$ |                  
            \________|\_______/ \______|   \__|                  
                                                                
            $$\      $$\  $$$$$$\  $$$$$$$\   $$$$$$\  $$\       
            $$$\    $$$ |$$  __$$\ $$  __$$\ $$  __$$\ $$ |      
            $$$$\  $$$$ |$$ /  $$ |$$ |  $$ |$$ /  $$ |$$ |      
            $$\$$\$$ $$ |$$ |  $$ |$$ |  $$ |$$$$$$$$ |$$ |      
            $$ \$$$  $$ |$$ |  $$ |$$ |  $$ |$$  __$$ |$$ |      
            $$ |\$  /$$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |      
            $$ | \_/ $$ | $$$$$$  |$$$$$$$  |$$ |  $$ |$$$$$$$$\ 
            \__|     \__| \______/ \_______/ \__|  \__|\________|
        -->

        <!-- Start Edit Modal -->
                    <div class="modal fade" id="editvehicleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                
                            
                               <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editvehicleModalLabel">Edit Vehicle</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>

                                <form action="{{ route('vehicle.update') }}" id="editvehicleform" method="POST">
                                    @csrf
                                    @method('PUT')                            
                                    
                                                <div class="modal-body">

                                                    
                                                    <div class="form-group">
                                                        <label>Body Plate:</label>
                                                        <input type="text" name="body_plate" class="form-control" placeholder="Enter Body plate">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="vehicles">Type of Vehicle:</label>
                                                        <select class="form-control" name="vehicle">
                                                            <option>Select Vehicle</option>
                                                            <option>Jeep</option>
                                                            <option>Taxi</option>
                                                            <option>Taxicle</option>
                                                            <option>Tricycle</option>
                                                        </select>    
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="status">Status:</label>
                                                            <select class="form-control" name="status">
                                                            <option>Select Status</option>
                                                            <option>Certified</option>
                                                            <option>Not Certified</option>
                                                        
                                                        </select>
                                                    </div>

                                                    
                                                    
                                                </div>
                                    
                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            
                                </form>        

                            </div>
                        </div>
                    </div>
        <!-- End Delete Modal -->
        <!--            
        $$$$$$$\  $$$$$$$$\ $$\       $$$$$$$$\ $$$$$$$$\ $$$$$$$$\ 
        $$  __$$\ $$  _____|$$ |      $$  _____|\__$$  __|$$  _____|
        $$ |  $$ |$$ |      $$ |      $$ |         $$ |   $$ |      
        $$ |  $$ |$$$$$\    $$ |      $$$$$\       $$ |   $$$$$\    
        $$ |  $$ |$$  __|   $$ |      $$  __|      $$ |   $$  __|   
        $$ |  $$ |$$ |      $$ |      $$ |         $$ |   $$ |      
        $$$$$$$  |$$$$$$$$\ $$$$$$$$\ $$$$$$$$\    $$ |   $$$$$$$$\ 
        \_______/ \________|\________|\________|   \__|   \________|
                                                                    
        $$\      $$\  $$$$$$\  $$$$$$$\   $$$$$$\  $$\              
        $$$\    $$$ |$$  __$$\ $$  __$$\ $$  __$$\ $$ |             
        $$$$\  $$$$ |$$ /  $$ |$$ |  $$ |$$ /  $$ |$$ |             
        $$\$$\$$ $$ |$$ |  $$ |$$ |  $$ |$$$$$$$$ |$$ |             
        $$ \$$$  $$ |$$ |  $$ |$$ |  $$ |$$  __$$ |$$ |             
        $$ |\$  /$$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |             
        $$ | \_/ $$ | $$$$$$  |$$$$$$$  |$$ |  $$ |$$$$$$$$\        
        \__|     \__| \______/ \_______/ \__|  \__|\________| -->      


        <!--Confirm Delete Modal-->
                     <div class="modal fade" id="confirmdeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                
                            
                               <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmdeleteModalLabel">Are you sure you want to delete?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>


                                                <div class="modal-footer">
                                                    <form action="" id="deletevehicleform" method="POST">
                                                        @csrf 
                                                        @method('DELETE')
                                                    </form>
                                                    
                                                    <button type="button" id="yesconfirmdelete" vehicle_id="" class="btn btn-primary">Yes</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                </div>
                                            
                                    

                            </div>
                        </div>
                    </div>


        <!--End Confirm Delete Modal-->

          
            <div class="container-fluid">
                
                            @if(count($errors) > 0)

                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                        @endif

                            <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add Vehicle
                        </button>
                        
                       
                        <br></br>

            <!--$$\    $$\ $$$$$$$$\ $$\   $$\ $$$$$$\  $$$$$$\  $$\       $$$$$$$$\ 
                $$ |   $$ |$$  _____|$$ |  $$ |\_$$  _|$$  __$$\ $$ |      $$  _____|
                $$ |   $$ |$$ |      $$ |  $$ |  $$ |  $$ /  \__|$$ |      $$ |      
                \$$\  $$  |$$$$$\    $$$$$$$$ |  $$ |  $$ |      $$ |      $$$$$\    
                 \$$\$$  / $$  __|   $$  __$$ |  $$ |  $$ |      $$ |      $$  __|   
                  \$$$  /  $$ |      $$ |  $$ |  $$ |  $$ |  $$\ $$ |      $$ |      
                   \$  /   $$$$$$$$\ $$ |  $$ |$$$$$$\ \$$$$$$  |$$$$$$$$\ $$$$$$$$\ 
                    \_/    \________|\__|  \__|\______| \______/ \________|\________|
                                                                                    
                      $$$$$$$$\  $$$$$$\  $$$$$$$\  $$\       $$$$$$$$\                    
                     \__$$  __|$$  __$$\ $$  __$$\ $$ |      $$  _____|                   
                        $$ |   $$ /  $$ |$$ |  $$ |$$ |      $$ |                         
                        $$ |   $$$$$$$$ |$$$$$$$\ |$$ |      $$$$$\                       
                        $$ |   $$  __$$ |$$  __$$\ $$ |      $$  __|                      
                        $$ |   $$ |  $$ |$$ |  $$ |$$ |      $$ |                         
                        $$ |   $$ |  $$ |$$$$$$$  |$$$$$$$$\ $$$$$$$$\                    
                        \__|   \__|  \__|\_______/ \________|\________|  -->
                            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                    <h6 class="card-subtitle">Registered vehicles .</h6>
                                    <div class="table-responsive">
                                        <div class="panel panel-default">
                                    
                                            <div class="panel-body">
                                                <table class="table" id="datatable" border="0" cellpadding="2" cellspacing="1" class="pretty" style="width:100%">
                            
                                                    <thead>
                                                        <tr>
                                                            <th>Status</th>
                                                            <th>Type_of_Vehicle</th>
                                                            <th>Body_Plate</th>
                                                            <th>Operator Name</th>
                                                            <th>Operator Contact</th>
                                                            <th>Operator Address</th>
                                                            <th>Action</th>
                                                    
                                                        </tr> 
                                                    </thead>
                                                        @foreach ($vehicles as $vehicle)
                                                            <tr>
                                                                <td>{{ $vehicle->status }}</td>
                                                                <td>{{ $vehicle->vehicle }}</td>
                                                                <td>{{ $vehicle->body_plate }}</td>
                                                                <td>{{ $vehicle->operator->name }}</td>
                                                                <td>{{ $vehicle->operator->phone_number }}</td>
                                                                <td>{{ $vehicle->operator->address }}</td>
                                                                <td>
                                                                      <button class="btn btn-info edit-vehicle-btn"  vehicle_id={{ $vehicle->id }}><i class="fa fa-pencil"></i></button>  
                                                                      <button class="btn btn-danger delete-vehicle-btn" vehicle_id={{ $vehicle->id }}><i class="fa fa-danger"></i> DELETE </button>
                                                                </td>
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
            </div>
            

            <!-- 

            $$$$$$$$\                   $$\                         
            $$  _____|                  $$ |                        
            $$ |    $$$$$$\   $$$$$$\ $$$$$$\    $$$$$$\   $$$$$$\  
            $$$$$\ $$  __$$\ $$  __$$\\_$$  _|  $$  __$$\ $$  __$$\ 
            $$  __|$$ /  $$ |$$ /  $$ | $$ |    $$$$$$$$ |$$ |  \__|
            $$ |   $$ |  $$ |$$ |  $$ | $$ |$$\ $$   ____|$$ |      
            $$ |   \$$$$$$  |\$$$$$$  | \$$$$  |\$$$$$$$\ $$ |      
            \__|    \______/  \______/   \____/  \_______|\__|    

            -->


            <footer class="footer text-center">
                 2021. All Rights Reserved By Ateneo de Naga Univertsity. 
                Designed and Developed by Delas Alas, Ferrer, and San Joaquin
            </footer>
        </div>
    </div>
    
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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>-->
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

        
        $('body').on('click', '.edit-vehicle-btn', function () {
            var vehicle_id=$(this).attr('vehicle_id');
            $('#editvehicleform').attr('action', '/vehicles/'+vehicle_id);
            $('#editvehicleModal').modal('show');
        });

        $('body').on('click', '.delete-vehicle-btn', function () {
            var vehicle_id=$(this).attr('vehicle_id');
            $('#yesconfirmdelete').attr('vehicle_id', vehicle_id);
            $('#confirmdeleteModal').modal('show');
        });
        
        $('#yesconfirmdelete').click(function(){
            var vehicle_id=$(this).attr('vehicle_id');
            $('#deletevehicleform').attr('action', '/vehicles/'+vehicle_id);
            $('#deletevehicleform').submit();
        });
    });

</script>
</body>

</html>
