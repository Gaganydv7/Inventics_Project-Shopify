<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>[In]ventics -Product Page</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/fav.ico')}}" />
  <!-- Vendor CSS -->
  <link href="{{asset('css/vendor/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/vendor/vendor.min.css')}}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- Custom font -->
  <link href="{{asset('fonts/icomoon/icons.css')}}" rel="stylesheet">
  <link href="{{asset('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap')}}" rel="stylesheet">
  <link href="{{asset('https://fonts.googleapis.com/css2?family=Open%20Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')}}" rel="stylesheet">
  

       <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T')}}" crossorigin="anonymous">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css')}}" rel="stylesheet" />
</head>


<body class="template-product has-smround-btns has-loader-bg equal-height has-sm-container">
<div>
@if(session('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
{{session('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
{{session('warning')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{session('danger')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
</div>



<div> 
  <div>  @include('Layout.Home.Header.blacktop')     </div> 
  <div>  @include('Layout.Home.Header.main_header')  </div> 
         @yield('content')                            
  <div>  @include('Layout.Common.footer')            </div> 
  </div> 


  <script src="{{asset('js/vendor-special/lazysizes.min.js')}}"></script>
  <script src="{{asset('js/vendor-special/ls.bgset.min.js')}}"></script>
  <script src="{{asset('js/vendor-special/ls.aspectratio.min.js')}}"></script>
  <script src="{{asset('js/vendor-special/jquery.min.js')}}"></script>
  <script src="{{asset('js/vendor-special/jquery.ez-plus.js')}}"></script>
  <script src="{{asset('js/vendor/vendor.min.js')}}"></script>
  <script src="{{asset('js/app-html.js')}}"></script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    
</body>

</html>