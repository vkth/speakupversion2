<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>SDW Web Solutions</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="{{ secure_asset('assets/images/logo.png') }}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Custom CSS -->
        <link href="{{ secure_url('assets/assets-dashboard/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
        <link href="{{ secure_url('assets/assets-dashboard/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
        <link href="{{ secure_url('assets/assets-dashboard/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
        <link href="{{ secure_url('assets/assets-dashboard/dist/css/style.css') }}" rel="stylesheet">
        <link href="{{ secure_url('assets/assets-dashboard/dist/css/addons.css') }}" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{ secure_asset('assets/assets-dashboard/dist/css/fonts/myriad-pro/style.css') }}">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">  

        {{-- @livewireStyles --}}
    </head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="dark" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        {{-- Top Navbar --}}
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">

                    {{-- Sidebar Toggler Mobile --}
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="#"><i class="ti-menu ti-close"></i></a>
                    {{-- End Sidebar Toggler Mobile --}}

                    {{-- Logo --}}
                    <div class="navbar-brand mt-5 mb-2">
                        <a href="{{ route('dashboard.index') }}">
                                <!-- Dark Logo icon -->
                                <img src="{{ secure_url('assets/images/logo.png') }}" alt="Dashboard" class="custom-logo">
                    </div>
                    {{-- Topbar Toggler Mobile --}}
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="#"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                    {{-- End Topbar Toggler Mobile --}}
                </div>
                {{-- End Logo --}}


                {{-- Right Navbar --}}
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        {{-- User Profile --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle custom-dropdown-thumb" href="javascript:void(0);" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                @if(Auth::user()->employee->path_to_photo_thumb)
                                    <img src="{{ secure_asset(Auth::user()->employee->path_to_photo_thumb) }}" alt="user" class="rounded-circle mr-2"
                                width="50px;"/>
                                @endif
                                {{-- <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> --}}
                                <span class="text-dark pr-3">{{ ucwords(Auth::user()->employee->first_name) }}</span>
                                <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    @if(Auth::user())
                                    <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="dropdown-item">
                                            {{ __('Logout') }}<i data-feather="power"
                                            class="svg-icon mr-2 ml-1"></i>
                                        </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endif
                            </div>
                        </li>
                        {{-- End User Profile --}}
                    </ul>
                </div>
                {{-- End Right Navbar --}}
            </nav>
        </header>
        {{-- End Top Navbar --}}


        {{-- Sidebar Navbar --}}
        <aside class="left-sidebar" data-sidebarbg="skin6">
            {{-- Sidebar Scroll --}}
            <div class="scroll-sidebar" data-sidebarbg="skin6">
               {{-- Sidebar Navigation --}}
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href=" {{ route('dashboard.index') }}"
                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        {{-- <li class="nav-small-cap"><span class="hide-menu">Portfolio</span></li> --}}
                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('profile.index') }}"
                            aria-expanded="false"><i class="far fa-id-badge"></i><span
                                class="hide-menu">Profile</span></a>
                                {{-- <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                    <li class="sidebar-item"><a href="{{ route('profile.index') }}" class="sidebar-link"><span
                                        class="hide-menu"> View Profile
                                    </span></a>
                                    </li>
                                    @if(Auth::user()->can('edit_human_resource_officer_details'))
                                        <li class="sidebar-item"><a href="{{ route('profile.edit', Auth::user()->id) }}" class="sidebar-link"><span
                                                    class="hide-menu"> Update Profile
                                                </span></a>
                                        </li>
                                    @endif
                                </ul> --}}

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href=" {{ route('attendance.index') }}"
                            aria-expanded="false"><i class="far fa-clock" ></i><span
                                class="hide-menu mb-1">Time In / Time Out</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)"
                            aria-expanded="false"><i class="far fa-file-alt"></i><span
                                class="hide-menu mb-1">Request Form</span></a></li>
                    </ul>
                </nav>
                {{-- End Sidebar Navigation --}}
            </div>
            {{-- EndSidebar Scroll --}}
        </aside>
       {{-- End Sidebar --}}

        <div class="page-wrapper">

            <div class="container-fluid">
                @yield('content')
            </div>

            {{-- Footer --}}
            <footer class="footer text-center">
                &copy; {{ date('Y') }} SDW Websolutions. All Rights Reserved.
            </footer>
           {{-- End Footer --}}

        </div>
    </div>

    {{-- JS --}}
    {{-- @livewireScripts --}}
    <script src="{{ secure_url('assets/assets-dashboard/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/dist/js/feather.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/dist/js/custom.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ secure_url('assets/assets-dashboard/dist/js/pages/dashboards/dashboard1.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    
    <script type="text/javascript">
    
        // Get the modal
        var modal = document.getElementById("modal-id");

        // Get the button that opens the modal
        var btn = document.getElementById("btn-img");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }

    </script>
    
     <script type="text/javascript"> 
                $(document).ready(function () {
                    $('#datatable').DataTable({
                      
                    });
                });
            </script>
                
</body>

</html>
