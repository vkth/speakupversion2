@extends ('layouts.dashboard.layout')
@section('content')
        
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Complaints</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-angle-double-left fa-lg"></i>  Back to Dashboard</a></li>
                                    <li class="breadcrumb-item">Complaints</li>
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
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                            
                        
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">
                                     Are you sure you want to update status? </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="/complaints" id="editform" method="POST">

                                    @csrf
                                    @method('PUT')                            
                                    
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                   
                                                        <label for="status">Complaint Status: </label>
                                                            <select class="form-control" id='status' name="status">
                                                            <option>--Select Status--</option>
                                                            <option >Solved</option>
                                                            <option >Pending</option>
                                                            <option >Settled</option>
                                                            <option >Dismissed</option>
                                                            <option >Challenge</option>
                                                            <option >Penalized</option>
                                                        </select>
                                                    </div>

                                                </div>
                                    
                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit changes</button>
                                                </div>
                                            
                                </form>        

                            </div>
                    </div>
                </div>

                <!-- Complaints Table -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                    <h6 class="card-subtitle">Instructions: 
                                    To print/save Complaints Table click the button below and the file you prefer (CSV, Excel, PDF) . Search button on the right-side. Click blue edit button to edit status.</h6>
                                    <div class="table-responsive">
                                        <div class="panel panel-default">
                                    
                                            <div class="panel-body">
                                            @csrf
                                                <table class="table" id="datatable" border="0" cellpadding="2" cellspacing="1" class="pretty" style="width:100%">

                                                    <thead>
                                                        <tr>
                                                            <th>App User</th>
                                                            <th>Body Plate</th>
                                                            <th>Type of Vehicle</th>
                                                            <th>Date</th>
                                                            <th>Time</th>  
                                                            <th>Complaint</th>
                                                            <th>File</th>
                                                            <th>Status</th>
                                                            <th>Change status</th>
                                                        </tr> 
                                                    </thead>
                        
                                                        @foreach ($complaints as $complaint)
                                                            <tr>

                                                                <td>{{ $complaint->mobileappuser->username }}</td>
                                                                <td>{{ $complaint->body_plate }}</td>
                                                                <td>{{ $complaint->vehicle }}</td>   
                                                                <td>{{ $complaint->date}}</td>
                                                                <td>{{ $complaint->time }}</td>
                                                                <td>{{ $complaint->narrative }}</td>
                                                                <td>{{ $complaint->file }}</td>
                                                                <td>
                                                                    @if($complaint->status =='solved')
                                                                    <span class="label label-success label-rounded">{{ $complaint->status }} </span>
                                                                    @elseif ($complaint->status == 'settled')
                                                                    <span class="label label-info label-rounded">Settled</span>
                                                                    @elseif ($complaint->status == 'dismissed')
                                                                    <span class="label label-light bg-dark label-rounded">Dismissed</span>
                                                                    @elseif ($complaint->status == 'penalized')
                                                                    <span class="label label-danger label-rounded">Penalized</span>
                                                                    @elseif ($complaint->status == 'challenge')
                                                                    <span class="label label-primary label-rounded">Challenge</span>
                                                                    @else 
                                                                    <span class="label label-warning text-dark label-rounded">Pending</span>
                                                                    @endif
                                                                   
                                                                </td>
                                                                <td>
                                                                <button class="btn btn-info edit-complaint-btn"  complaint_id={{ $complaint->id }}><i class="fa fa-edit"></i></button>   
                                                                </td>
                                                        
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
             <!-- End of Complaints Table -->

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
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
        
        $('body').on('click', '.edit-complaint-btn', function () {
            var complaint_id=$(this).attr('complaint_id');
            $('#editform').attr('action', '/complaints/'+complaint_id);
            $('#editModal').modal('show');
        });

        
    });
    </script>
    
</body>

</html>

@endsection
