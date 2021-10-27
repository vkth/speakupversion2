@extends ('layouts.dashboard.layout')
@section('content')

<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css" rel="stylesheet">

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
                                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-angle-double-left fa-lg"></i>  Back to Dashboard</a></li>
                                    <li class="breadcrumb-item">Mobile-App-Users</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
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



                <!-- Mobile App Users Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                    <h6 class="card-subtitle">Instructions: 
                                    To print/save Mobile App Users Table click the button below and the file you prefer (CSV, Excel, PDF) . Search button on the right-side.</h6>
                                    <div class="table-responsive">
                                        <div class="panel panel-default">
                                    
                                            <div class="panel-body">
                                                <table class="table" id="datatable" border="0" cellpadding="2" cellspacing="1" class="pretty" style="width:100%">
                            

                                                
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th>Name</th>
                                                            <th>Username</th>
                                                            <th>Phone Number</th>
                                                            <th>Email</th>
                                                            <th>Address</th>
                                                            <th>Status</th>
                                                          
                                                        </tr> 
                                                    </thead>
                        
                                                        @foreach ($mobileappusers as $appusers)
                                                            <tr>
                                                                
                                                                <td>{{ $appusers->name }}</td>
                                                                <td>{{ $appusers->username }}</td> 
                                                                <td>{{ $appusers->phone_number }}</td>
                                                                <td>{{ $appusers->email }}</td>
                                                                <td>{{ $appusers->address }}</td> 
                                                                <td>
                                                                    @if($appusers->status =='Verified')
                                                                    <span class="label label-success label-rounded">{{ $appusers->status }} </span>
                                                                    @else
                                                                    <span class="label label-danger label-rounded">not verified</span>
                                                                    @endif
                                                                   
                                                                </td>
                                                                
                                                                    
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
            <!--End of Mobile app users TABLE-->

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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
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
        
        $('body').on('click', '.view-mobileappuser-btn', function () {
            var mobileappuser_id=$(this).attr('mobileappuser_id');
            $('#viewform').attr('action', '/mobileappusers/'+mobileappuser_id);
            $('#viewModal').modal('show');
        });
       
       

        $('body').on('click', '.delete-mobileappuser-btn', function () {
            var mobileappuser_id=$(this).attr('mobileappuser_id');
            $('#yesconfirmdelete').attr('mobileappuser_id', mobileappuser_id);
            $('#confirmdeleteModal').modal('show');
        });
       

        $('#yesconfirmdelete').click(function(){
            var mobileappuser_id=$(this).attr('mobileappuser_id');
            $('#deleteoperatorform').attr('action', '/mobileappusers/'+mobileappuser_id);
            $('#deleteoperatorform').submit();
        });

      
    });
    </script>
</body>

</html>

@endsection

