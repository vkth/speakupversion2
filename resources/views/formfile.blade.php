<!DOCTYPE html>
<html>
<head>
    <title></title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body style="background-color: #3f7e45;">
  
<div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Laravel Livewire File Upload - Nicesnippets.com
          </div>
          <div class="card-body">
            @livewire('file-form')
          </div>
        </div>
      </div>
    </div>
      
</div>
  
</body>
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
</html>