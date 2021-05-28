@extends ('layouts.dashboard.layout')
@section('content')

  <!--
             $$$$$$$$\ $$$$$$\ $$$$$$$$\ $$\       $$$$$$$$\ 
             \__$$  __|\_$$  _|\__$$  __|$$ |      $$  _____|
                $$ |     $$ |     $$ |   $$ |      $$ |      
                $$ |     $$ |     $$ |   $$ |      $$$$$\    
                $$ |     $$ |     $$ |   $$ |      $$  __|   
                $$ |     $$ |     $$ |   $$ |      $$ |      
                $$ |   $$$$$$\    $$ |   $$$$$$$$\ $$$$$$$$\ 
                \__|   \______|   \__|   \________|\________|
                                                                
                                                                
                $$\   $$\ $$$$$$$$\  $$$$$$\  $$$$$$$\          
                $$ |  $$ |$$  _____|$$  __$$\ $$  __$$\         
                $$ |  $$ |$$ |      $$ /  $$ |$$ |  $$ |        
                $$$$$$$$ |$$$$$\    $$$$$$$$ |$$ |  $$ |        
                $$  __$$ |$$  __|   $$  __$$ |$$ |  $$ |        
                $$ |  $$ |$$ |      $$ |  $$ |$$ |  $$ |        
                $$ |  $$ |$$$$$$$$\ $$ |  $$ |$$$$$$$  |        
                \__|  \__|\________|\__|  \__|\_______/         
            --->                                   
                                                
            <div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h2 class="page-title">Dashboard</h2>
                        <h3 class="text-right mb-4 page-heading" id="clock">00:00:00 -- </h3> <!--clock-->
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- ============================================================== -->
            <!-- title head  title head title head title head title head -->
            <!-- ============================================================== -->
           
            <!--
            $$$$$$$\                  $$\           
            $$  __$$\                 $$ |          
            $$ |  $$ | $$$$$$\   $$$$$$$ |$$\   $$\ 
            $$$$$$$\ |$$  __$$\ $$  __$$ |$$ |  $$ |
            $$  __$$\ $$ /  $$ |$$ /  $$ |$$ |  $$ |
            $$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |
            $$$$$$$  |\$$$$$$  |\$$$$$$$ |\$$$$$$$ |
            \_______/  \______/  \_______| \____$$ |
                                        $$\   $$ |
                                        \$$$$$$  |
                                        \______/ -->

            <!-- ============================================================== -->
            <!--Body Body Body Body Body Body Body Body Body Body Body Body Body-->
            <!-- ============================================================== -->

            <div class="container-fluid">
                <div class="row">

                    <!-- 
                    $$\        $$$$$$\ $$$$$$$$\ $$$$$$$$\  $$$$$$\ $$$$$$$$\            
                    $$ |      $$  __$$\\__$$  __|$$  _____|$$  __$$\\__$$  __|           
                    $$ |      $$ /  $$ |  $$ |   $$ |      $$ /  \__|  $$ |              
                    $$ |      $$$$$$$$ |  $$ |   $$$$$\    \$$$$$$\    $$ |              
                    $$ |      $$  __$$ |  $$ |   $$  __|    \____$$\   $$ |              
                    $$ |      $$ |  $$ |  $$ |   $$ |      $$\   $$ |  $$ |              
                    $$$$$$$$\ $$ |  $$ |  $$ |   $$$$$$$$\ \$$$$$$  |  $$ |              
                    \________|\__|  \__|  \__|   \________| \______/   \__|              

                    
                    $$$$$$$\  $$$$$$$$\ $$$$$$$\   $$$$$$\  $$$$$$$\ $$$$$$$$\  $$$$$$\  
                    $$  __$$\ $$  _____|$$  __$$\ $$  __$$\ $$  __$$\\__$$  __|$$  __$$\ 
                    $$ |  $$ |$$ |      $$ |  $$ |$$ /  $$ |$$ |  $$ |  $$ |   $$ /  \__|
                    $$$$$$$  |$$$$$\    $$$$$$$  |$$ |  $$ |$$$$$$$  |  $$ |   \$$$$$$\  
                    $$  __$$< $$  __|   $$  ____/ $$ |  $$ |$$  __$$<   $$ |    \____$$\ 
                    $$ |  $$ |$$ |      $$ |      $$ |  $$ |$$ |  $$ |  $$ |   $$\   $$ |
                    $$ |  $$ |$$$$$$$$\ $$ |       $$$$$$  |$$ |  $$ |  $$ |   \$$$$$$  |
                    \__|  \__|\________|\__|       \______/ \__|  \__|  \__|    \______/ 
                    -->
                   
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Welcome Admin,</h4>
                            </div>
                             
                                <!-- <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0"></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            
                                                <td class="txt-oflo"></td>
                                            
                                            </tr>
                                        
                                        </tbody>



                                    </table>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
            
            </div>

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
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
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
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts

</html>

@endsection