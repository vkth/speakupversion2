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
        
<!--*****************************************************************************************************************************************************-->

        <!--   
              $$$$$$\  $$$$$$\ $$$$$$$\  $$$$$$$$\ $$$$$$$\   $$$$$$\  $$$$$$$\  
             $$  __$$\ \_$$  _|$$  __$$\ $$  _____|$$  __$$\ $$  __$$\ $$  __$$\ 
            $$ /  \__|  $$ |  $$ |  $$ |$$ |      $$ |  $$ |$$ /  $$ |$$ |  $$ |
            \$$$$$$\    $$ |  $$ |  $$ |$$$$$\    $$$$$$$\ |$$$$$$$$ |$$$$$$$  |
             \____$$\   $$ |  $$ |  $$ |$$  __|   $$  __$$\ $$  __$$ |$$  __$$< 
            $$\   $$ |  $$ |  $$ |  $$ |$$ |      $$ |  $$ |$$ |  $$ |$$ |  $$ |
            \$$$$$$  |$$$$$$\ $$$$$$$  |$$$$$$$$\ $$$$$$$  |$$ |  $$ |$$ |  $$ |
             \______/ \______|\_______/ \________|\_______/ \__|  \__|\__|  \__|-->

<!--*****************************************************************************************************************************************************-->
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
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
                        <h4 class="page-title">Public Utility Vehicle Operators</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Operator</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
         
          <br><!--SPACE--></br> 

<!--*****************************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************************-->            
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
                                                           
**************************************************************************************************************/ -->             
<!-- Start Add Modal --> 

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Operator's Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="{{ action('OperatorController@store') }}" method="POST">
                                    {{ csrf_field() }}                            
                                    
                                    
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Enter Fullname">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" name="address" class="form-control" placeholder="Enter Address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <input type="text" name="phone_number" class="form-control" placeholder="Enter Phone Number">
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
        <!-- End Add Modal -->


    <div class="container">
        
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
            
            
            <!-- /***************************************************
                           
                $$$$$$$\ $$$$$$$$\ $$\   $$\                         
                $$  __$$\\__$$  __|$$$\  $$ |                        
                $$ |  $$ |  $$ |   $$$$\ $$ |                        
                $$$$$$$\ |  $$ |   $$ $$\$$ |                        
                $$  __$$\   $$ |   $$ \$$$$ |                        
                $$ |  $$ |  $$ |   $$ |\$$$ |                        
                $$$$$$$  |  $$ |   $$ | \$$ |                        
                \_______/   \__|   \__|  \__|                        
                                                                    
                $$\      $$\  $$$$$$\  $$$$$$$\   $$$$$$\  $$\       
                $$$\    $$$ |$$  __$$\ $$  __$$\ $$  __$$\ $$ |      
                $$$$\  $$$$ |$$ /  $$ |$$ |  $$ |$$ /  $$ |$$ |      
                $$\$$\$$ $$ |$$ |  $$ |$$ |  $$ |$$$$$$$$ |$$ |      
                $$ \$$$  $$ |$$ |  $$ |$$ |  $$ |$$  __$$ |$$ |      
                $$ |\$  /$$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |      
                $$ | \_/ $$ | $$$$$$  |$$$$$$$  |$$ |  $$ |$$$$$$$$\ 
                \__|     \__| \______/ \_______/ \__|  \__|\________|
                                                     
               *****************************************************/ -->                                          


                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Operator
            </button>
            <a href="/operators-edit" class="btn btn-danger"> Edit/Delete </a>
            <br></br>

            <!--
                $$$$$$$\   $$$$$$\ $$$$$$$$\  $$$$$$\             
                $$  __$$\ $$  __$$\\__$$  __|$$  __$$\            
                $$ |  $$ |$$ /  $$ |  $$ |   $$ /  $$ |           
                $$ |  $$ |$$$$$$$$ |  $$ |   $$$$$$$$ |           
                $$ |  $$ |$$  __$$ |  $$ |   $$  __$$ |           
                $$ |  $$ |$$ |  $$ |  $$ |   $$ |  $$ |           
                $$$$$$$  |$$ |  $$ |  $$ |   $$ |  $$ |           
                \_______/ \__|  \__|  \__|   \__|  \__|           
                                                             
             $$$$$$$$\  $$$$$$\  $$$$$$$\  $$\       $$$$$$$$\ 
             \__$$  __|$$  __$$\ $$  __$$\ $$ |      $$  _____|
                $$ |   $$ /  $$ |$$ |  $$ |$$ |      $$ |      
                $$ |   $$$$$$$$ |$$$$$$$\ |$$ |      $$$$$\    
                $$ |   $$  __$$ |$$  __$$\ $$ |      $$  __|   
                $$ |   $$ |  $$ |$$ |  $$ |$$ |      $$ |      
                $$ |   $$ |  $$ |$$$$$$$  |$$$$$$$$\ $$$$$$$$\ 
                \__|   \__|  \__|\_______/ \________|\________|
            -->
            <!--TABLE-->
                 <table id="datatable" class="table table-bordered" border="0" cellpadding="2" cellspacing="1" class="pretty" style="width:100%">
                    
                                            <thead>
                                                <tr>
                                                    <th scope="col">Operators ID NO:</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Adress</th>
                                                    
                                                </tr> 
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                     <th scope="col">Operators ID NO:</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Adress</th>
                                                    
                                                </tr> 
                                            </tfoot>
                                                @foreach ($operators as $operatordata)
                                                    <tr>
                                                        <td>{{ $operatordata->id}}</td>
                                                        <td>{{ $operatordata->name}}</td>
                                                        <td>{{ $operatordata->phone_number }}</td>
                                                        <td>{{ $operatordata->address }}</td>
                                                           
                                                    </tr>
                                                   
                                                @endforeach
                                        </table>
                                
                            <!--TABLE-->                    
    </div>
    </div>
    </div>
           
            <!-- ============================================================== -->
            <!-- $$$$$$$$\  $$$$$$\   $$$$$$\ $$$$$$$$\ $$$$$$$$\ $$$$$$$\  
                 $$  _____|$$  __$$\ $$  __$$\\__$$  __|$$  _____|$$  __$$\ 
                 $$ |      $$ /  $$ |$$ /  $$ |  $$ |   $$ |      $$ |  $$ |
                 $$$$$\    $$ |  $$ |$$ |  $$ |  $$ |   $$$$$\    $$$$$$$  |
                 $$  __|   $$ |  $$ |$$ |  $$ |  $$ |   $$  __|   $$  __$$< 
                 $$ |      $$ |  $$ |$$ |  $$ |  $$ |   $$ |      $$ |  $$ |
                 $$ |       $$$$$$  | $$$$$$  |  $$ |   $$$$$$$$\ $$ |  $$ |
                 \__|       \______/  \______/   \__|   \________|\__|  \__|->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                 2021. All Rights Reserved By Ateneo de Naga Univertsity. 
                Designed and Developed by Delas Alas, Ferrer, and San Joaquin
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
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
