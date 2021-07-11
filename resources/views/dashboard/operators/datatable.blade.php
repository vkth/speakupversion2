@extends ('layouts.dashboard.layout')
@section('content')
<main class="app-content">
<div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Public Utility Vehicle Operators</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                            <ul class="app-breadcrumb breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-angle-double-left fa-lg"></i>  Back to Dashboard</a></li>
                            <li class="breadcrumb-item">Operators</li>
                            </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                    <br><!--SPACE--></br> 
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add New Operator
                    </button>
            </div>
         

            <br><!--SPACE--></br> 

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
                \__|     \__| \______/ \_______/ \__|  \__|\________|-->


                <!-- Start Add Modal --> 

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add New Operator</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form action="{{ action('OperatorController@store') }}" method="POST">
                                                @csrf                            
                                    
                                                    <div class="modal-body">

                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
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
                                        <h5 class="modal-title" id="editModalLabel">Edit Operator</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>

                                <form action="/operators" id="editform" method="POST">
                
                                    @csrf
                                    @method('PUT')                            
                                    
                                            <div class="modal-body">

                                               
                                                <div class="form-group">
                                                    
                                                        <label>Name</label>
                                                        <input type="text" value="" name="name" id="name" class="form-control" placeholder="Enter Full Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" value="" name="address" id="address" class="form-control" placeholder="Enter Address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <input type="text" value="" name="phone_number" id="phone_number" class="form-control" placeholder="Enter Phone Number">
                                                    </div>
                                                    
                                                </div>

                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update changes</button>
                                                </div>
                                                 
                                </form>        

                            </div>
                        </div>
                    </div>
        <!-- End Edit Modal -->
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
                                                    <form action="" id="deleteoperatorform" method="POST">
                                                        @csrf 
                                                        @method('DELETE')
                                                    </form>
                                                    
                                                    <button type="button" id="yesconfirmdelete" operator_id="" class="btn btn-primary">Yes</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                </div>
                                            
                                    

                                </div>
                        </div>
                    </div>


            <!--End Confirm Delete Modal-->

    <div class="container">
         <!-- Alerts -->
         <!-- Alerts -->
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
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h6>
                        Instructions: 
                            To print/save Operators Table click the button below and the file you prefer (CSV, Excel, PDF) . 
                            Search button on the right-side.
                        </h6>
                        <br></br>
                        <div class="table-responsive">
                            <div class="panel panel-default"> 
        

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
                                                        <th >Operators ID NO:</th>
                                                        <th >Name</th>
                                                        <th >Phone Number</th>
                                                        <th >Address</th>
                                                        <th >Action</th>
                                                        
                                                    </tr> 
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th >Operators ID NO:</th>
                                                        <th >Name</th>
                                                        <th >Phone Number</th>
                                                        <th >Address</th>
                                                        <th >Action</th>
                                                        
                                                    </tr> 
                                                </tfoot>
                                                    @foreach ($operators as $operator)
                                                        <tr>
                                                            <td>{{ $operator->id}}</td>
                                                            <td>{{ $operator->name}}</td>
                                                            <td>{{ $operator->phone_number }}</td>
                                                            <td>{{ $operator->address }}</td>
                                                            <td>
                                                                <button class="btn btn-info edit-operator-btn"  operator_id={{ $operator->id }}><i class="fa fa-edit"></i></button> 
                                                                <button class="btn btn-danger delete-operator-btn" operator_id={{ $operator->id }}><i class="fa fa-trash"></i>  </button>
                                                            </td>   
                                                        </tr>
                                                    @endforeach
                                </table>
                                    
                                <!--TABLE-->   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                                        
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


        $('body').on('click', '.edit-operator-btn', function () {
            var operator_id=$(this).attr('operator_id');
            $('#editform').attr('action', '/operators/'+operator_id);
            $('#editModal').modal('show');
        });

        $('body').on('click', '.delete-operator-btn', function () {
            var operator_id=$(this).attr('operator_id');
            $('#yesconfirmdelete').attr('operator_id', operator_id);
            $('#confirmdeleteModal').modal('show');
        });
       

        $('#yesconfirmdelete').click(function(){
            var operator_id=$(this).attr('operator_id');
            $('#deleteoperatorform').attr('action', '/operators/'+operator_id);
            $('#deleteoperatorform').submit();
        });


    });
    </script>
</body>

</html>
@endsection