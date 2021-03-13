<!DOCTYPE html>
<html>
<head>
    <title>Speak Up - Naga </title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    @livewireStyles
</head>
<body>
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Vehicle</h2>
                    </div>

                    <div class="card-body">
                            <div class="page-breadcrumb">
                                    <div class="row">
                                        <div class="col-5 align-self-center">
                                           
                                        </div>
                                        <div class="col-7 align-self-center">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <nav aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item">
                                                            <a href="./">Back to Home</a>
                                                        </li>
                                                        <li class="breadcrumb-item">
                                                            <a href="/vehicles">Vehicles</a>
                                                        </li>
                                                        <li class="breadcrumb-item active" aria-current="page">Vehicles-Edit</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        
                        @livewire('vehicles')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('vehicleStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>
</body>
</html>