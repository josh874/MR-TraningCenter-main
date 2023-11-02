<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MTraning-Home</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
      
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- FontAwsome -->
    <script src="https://kit.fontawesome.com/1c7f47d61e.js" crossorigin="anonymous"></script>
    <!--SweetAlert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
     <!-- nav Content-->
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-warning p-4">
            <ul class="list-group list-group-horizontal">
              <a href="{{'login'}}" class="btn btn-light">{{ __('Login') }}</a>
              <a href="{{ route('register') }}" class="btn btn-light mx-2">{{ __('Register') }}</a>
              <button type="button" class="btn btn-light " 
                 data-toggle="modal"
                 data-target="#TraningHourse">Traning Hour
              </button>
            </ul>         
        </div>
      </div>
      <!-- navigation-->
      <nav class="navbar navbar-light bg-light shadow mb-1 " >
        <div class="container-fluid">
          <button class="navbar-toggler " type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#navbarToggleExternalContent" 
                  aria-controls="navbarToggleExternalContent" 
                  aria-expanded="false" 
                  aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>   
          </button>
          <span class="text-warning h4" style="font-weight: bold;"><i class="fa-brands fa-mastodon"></i>RT-Traning</span>
        </div>
      </nav> 
          
       @if (session()->has('success'))
          <div class="position-fixed top-45 end-0 p-3" style="z-index: 11">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <strong class="me-auto">Logout</strong>
                  <small>Some mins ago</small>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                  {{ session()->get('success') }} 
                </div>
           </div>
        </div>
      @endif

      <main >
          @yield('content')
      </main>
      <footer class="Fotter">
        <div class="container text-end text-white">
            <div class="mb-2">
                <a class="btn btn btn-warning"><i class="fa-brands fa-facebook"></i></a>
                <a class="btn btn btn-warning"><i class="fa-brands fa-telegram"></i></a>
                <a class="btn btn btn-warning"><i class="fa-brands fa-linkedin"></i></a>
                <a class="btn btn btn-warning"><i class="fa-brands fa-github"></i></a>
                <a class="btn btn btn-warning"><i class="fa-solid fa-envelope"></i><a>
            </div> 
            <p>&copy;2023. All right reserved MR-Traning | <span class="text-warning p-0"> Design By Eyasu Wendwesen Agze</span></p>
            <p>Contact US</p>
            <div>    
              <p><i class="fa fa-map-marker"></i> Babugaya Building. Bishoftu,Oromia </p>
              <p><i class="fa fa-envelope"></i> MRtech-Traning@gmail.com</p>
              <p><i class="fa fa-phone"></i>  09-32-16-66-31</p>
            </div>
        </div>
      </footer><!--Footer--> 
</body>

    <div class="modal fade" tabindex="-1" role="dialog" id="TraningHourse" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">

              <div class="modal-header">
                  <h5 class="modal-title"><i class="fa fa-calander"></i>Traning Hour</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>          
              <div class="modal-body ">             
                  <div class="row">                  
                    <div class="col-md-4 shadow-sm p-1 m-2 bg-body rounded text-center">Morning</div>
                    <div class="col-md-7 shadow-sm p-1 m-2 bg-body rounded text-center">Monday-Saturday 2:00-6:30</div>
                    <div class="col-md-4 shadow-sm p-1 m-2 bg-body rounded text-center">Afternoon</div>
                    <div class="col-md-7 shadow-sm p-1 m-2 bg-body rounded text-center">Monday-Friday 8:00-1:30</div>                        
                  </div>
                  
              </div>
              <div class="modal-footer">
                <button  type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-window-close"></i> Cancel</button>
              </div>
        </div>  
      </div>
    </div> 

<script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
        })
</script>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}

<script> 
    $(document).ready(function(){
        $("#liveToast").toast("show"); 
    });
</script>
</html>
