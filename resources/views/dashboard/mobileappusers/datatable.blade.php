@extends ('layouts.dashboard.layout')
@section('content')

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Mobile App Users</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Mobile-app-users</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">


<!-- ===================================================================================================================== -->

<!-- Start Page Content 

        $$$$$$$\   $$$$$$\   $$$$$$\  $$$$$$$$\        $$$$$$\   $$$$$$\  $$\   $$\ $$$$$$$$\ $$$$$$$$\ $$\   $$\ $$$$$$$$\ 
        $$  __$$\ $$  __$$\ $$  __$$\ $$  _____|      $$  __$$\ $$  __$$\ $$$\  $$ |\__$$  __|$$  _____|$$$\  $$ |\__$$  __|
        $$ |  $$ |$$ /  $$ |$$ /  \__|$$ |            $$ /  \__|$$ /  $$ |$$$$\ $$ |   $$ |   $$ |      $$$$\ $$ |   $$ |   
        $$$$$$$  |$$$$$$$$ |$$ |$$$$\ $$$$$\          $$ |      $$ |  $$ |$$ $$\$$ |   $$ |   $$$$$\    $$ $$\$$ |   $$ |   
        $$  ____/ $$  __$$ |$$ |\_$$ |$$  __|         $$ |      $$ |  $$ |$$ \$$$$ |   $$ |   $$  __|   $$ \$$$$ |   $$ |   
        $$ |      $$ |  $$ |$$ |  $$ |$$ |            $$ |  $$\ $$ |  $$ |$$ |\$$$ |   $$ |   $$ |      $$ |\$$$ |   $$ |   
        $$ |      $$ |  $$ |\$$$$$$  |$$$$$$$$\       \$$$$$$  | $$$$$$  |$$ | \$$ |   $$ |   $$$$$$$$\ $$ | \$$ |   $$ |   
        \__|      \__|  \__| \______/ \________|       \______/  \______/ \__|  \__|   \__|   \________|\__|  \__|   \__|   


=========================================================================================================================== -->
               
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                    <h6 class="card-subtitle"> Instructions: 
                                    To print/save Mobile App Users click the button below and the file you prefer (CSV, Excel, PDF) . Search button on the right-side.</h6>
                                    <div class="table-responsive">
                                        <div class="panel panel-default">
                                    
                                            <div class="panel-body">
                                                <table class="table" id="datatable" border="0" cellpadding="2" cellspacing="1" class="pretty" style="width:100%">
                            
                                                    <thead>
                                                        <tr>
                                                            <th>User ID</th>
                                                            <th>Name</th>
                                                            <th>Username</th>
                                                            <th>Address</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                        </tr> 
                                                    </thead>
                                                        @foreach ($mobileappusers as $appusers)
                                                            <tr>
                                                                <td>{{ $appusers->id}}</td>
                                                                <td>{{ $appusers->name }}</td>
                                                                <td>{{ $appusers->username }}</td> 
                                                                <td>{{ $appusers->email }}</td> 
                                                                <td>{{ $appusers->status }}</td>
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

            <!-- footer 
            $$$$$$$$\                   $$\                         
            $$  _____|                  $$ |                        
            $$ |    $$$$$$\   $$$$$$\ $$$$$$\    $$$$$$\   $$$$$$\  
            $$$$$\ $$  __$$\ $$  __$$\\_$$  _|  $$  __$$\ $$  __$$\ 
            $$  __|$$ /  $$ |$$ /  $$ | $$ |    $$$$$$$$ |$$ |  \__|
            $$ |   $$ |  $$ |$$ |  $$ | $$ |$$\ $$   ____|$$ |      
            $$ |   \$$$$$$  |\$$$$$$  | \$$$$  |\$$$$$$$\ $$ |      
            \__|    \______/  \______/   \____/  \_______|\__|      
            -->
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


@endsection