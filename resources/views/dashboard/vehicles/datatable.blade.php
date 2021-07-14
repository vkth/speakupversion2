@extends ('layouts.dashboard.layout')
@section('content')

        <div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Vehicles</h4>
                    </div>
                    <br></br>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="fa fa-angle-double-left fa-lg"></i>  Back to Dashboard</a></li>
                            <li class="breadcrumb-item">Vehicles</li>
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
                                                            <option disabled >Select Vehicle</option>
                                                            <option>Jeep</option>
                                                            <option>Taxi</option>
                                                            <option>Taxicle</option>
                                                            <option>Tricycle</option>
                                                        </select>    
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="status">Status:</label>
                                                            <select class="form-control" name="status">
                                                            <option  disabled>Select Status</option>
                                                            <option>Certified</option>
                                                            <option>Colorum</option>
                                                        
                                                        </select>
                                                    </div>
                                                       
                                                    <div class="form-group">
                                                        <label>Operator id:</label>
                                                        <input type="text" name="operator_id" class="form-control" placeholder="Enter Operator ID">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Operator Name:</label>
                                                        <input type="text" name="operator_name" class="form-control" placeholder="Enter Operator Name">
                                                    </div>

                                                        <!-- <input type="hidden" name="operator_id" id="operator_id" value="2"  > -->
                                             
                                                    

                                                </div>
                                    
                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Create New Vehicle</button>
                                                </div>
                                            
                                </form>        

                            </div>
                        </div>
                    </div>

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
                                        <h5 class="modal-title" id="editModalLabel">Edit Vehicle</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>

                                <form action="/vehicles" id="editform" method="POST">
                
                                    @csrf
                                    @method('PUT')                            
                                    
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label for="modal-input-body_plate">Body Plate:</label>
                                                        <input type="text" id='body_plate' name="body_plate" class="form-control" placeholder="Enter Body plate">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="vehicles">Type of Vehicle:</label>
                                                        <select class="form-control" id='vehicle' name="vehicle">
                                                            <option >Select Vehicle</option>
                                                            <option>Jeep</option>
                                                            <option>Taxi</option>
                                                            <option>Taxicle</option>
                                                            <option>Tricycle</option>
                                                        </select>    
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group">
                                                        <label for="status">Status:</label>
                                                            <select class="form-control" id='status' name="status">
                                                            <option >Select Status </option>
                                                            <option>Certified</option>
                                                            <option>Colorum</option>
                                                        
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Operator id:</label>
                                                        <input type="text" name="operator_id" class="form-control" placeholder="Enter Operator ID">
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

                <!-- Add Button for New Vehicles -->
                <div class="container-fluid">
                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add New Vehicle
               </button>
                       
                <br></br>
                            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                    <h6 class="card-subtitle"> Instructions: 
                                    To print/save Operators Table click the button below and the file you prefer (CSV, Excel, PDF). 
                                    Search button on the right-side.
                                    </h6>
                                    <div class="table-responsive">
                                        <div class="panel panel-default">
                                    
                                            <div class="panel-body">
                                                <table class="table" id="datatable" border="0" cellpadding="2" cellspacing="1" class="pretty" style="width:100%">
                            
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th>Type of Vehicle</th>
                                                            <th>Status</th>
                                                            <th>Body_Plate</th>
                                                            <th>Operator ID</th>
                                                            <th>Operator Name</th>
                                                            <th></th>
                                                    
                                                        </tr> 
                                                    </thead>
                                                        @foreach ($vehicles as $vehicle)
                                                            <tr>
                                                                
                                                                <td>{{ $vehicle->vehicle }}</td>
                                                                <td>{{ $vehicle->status }}</td>
                                                                <td>{{ $vehicle->body_plate }}</td>
                                                                <td>{{ $vehicle->operator->id }}</td>
                                                                <td>{{ $vehicle->operator->name }}</td>
                                                                
                                                                <td>
                                                                       
                                                                      <button class="btn btn-primary edit-vehicle-btn"  vehicle_id={{ $vehicle->id }}><i class="fa fa-edit"></i></button>  
                                                                      <button class="btn btn-danger delete-vehicle-btn" vehicle_id={{ $vehicle->id }}><i class="fa fa-trash"></i></button>
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
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>

    <script type="text/javascript"> 
    $(document).ready(function () {
        $('#datatable').DataTable({
            dom: 'Bfrtip',
            buttons: ['csv', 'excel', 'pdf', 'print', 'colvis']
          
        });

        $('body').on('click', '.edit-vehicle-btn', function () {
            var vehicle_id=$(this).attr('vehicle_id');
            $('#editform').attr('action', '/vehicles/'+vehicle_id);
            $('#editModal').modal('show');
           
            // fill the data in the input fields
            $("#modal-input-id").val(id);
            $("#modal-input-name").val(name);
            $("#modal-input-body_plate").val(body_plate);
        });

        $('body').on('click', '.view-vehicle-btn', function () {
            var vehicle_id=$(this).attr('vehicle_id');
            $('#viewform').attr('action', '/vehicles/'+vehicle_id);
            $('#viewModal').modal('show');
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

@endsection