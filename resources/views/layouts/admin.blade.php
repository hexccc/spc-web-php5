<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>San Pablo City | @yield('title')</title>
    {{-- <link rel="icon" href={!! asset('image/spc_small.png')!!}/> --}}
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/login.css">




    {{-- <script src="/js/multistep.js"></script>
    <link rel="stylesheet" href="/css/multistep.css"> --}}

    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

 
    {{-- <script src="/js/multistep.js"></script>
    <link rel="stylesheet" href="/css/multistep.css"> --}}

    <script src="/js/app.js"></script>
    <script src="/js/form.js"></script>

    <script src="/js/admin.js"></script>
    <script src="/js/services.js"></script>
    <script src="/js/eventsandannouncements.js"></script>
    <script src="/js/holiday.js"></script>
    {{-- <script src="/js/testing.js"></script> --}}

    <script src="/js/form_renewal.js"></script>
    <script src="/js/ammendments.js"></script>
    <script src="/js/inputmask.js"></script>
    <script src="/js/jquery.bootstrap-growl.js"></script>

    <script src="/js/BPLO.js"></script>
    <script src="/js/jquerydatatables.js"></script>
    <script src="/js/datatables.js"></script>
    <script src="/js/jquery.bootstrap-growl.js"></script>

    
  </head>
  
  <body>
    @include('inc.admin-nav')
      @yield('admincontent')
      
    </div>

  </div>



  </body>
</html>
