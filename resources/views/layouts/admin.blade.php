<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>San Pablo City | @yield('title')</title>
    {{-- <link rel="icon" href={!! asset('image/spc_small.png')!!}/> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">

    <script src="/js/app.js"></script>
    <script src="/js/modal-brgy.js"></script>
    <script src="/js/admin.js" charset="utf-8"></script>
      <script src="/js/jquerydatatables.js"></script>
      <script src="/js/datatables.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>
    @include('inc.admin-nav')

            @yield('admincontent')
    </div>

  </div>



  </body>
</html>
