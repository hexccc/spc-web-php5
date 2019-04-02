<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>San Pablo City | Official Website</title>
    <link rel="icon" href="{!! asset('image/spc-logo.png') !!}"/>
    <link rel="stylesheet" href="/css/app.css">
		<script src="/js/app.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  <body>
    <div>
      @include('inc.navbar')
    </div>
    <div>

    </div>
    <div class="container-fluid">
    @if (Request::is('form'))
      @include('inc.showcase')
    @endif
<br>
      <div class="row">
        <div class="">
        @yield('content')
        </div>
      </div>
    </div>

    </body>
    @include('inc.footer')
  </html>
  <div class="modal fade" id="bploForm" tabindex="-1" aria-labelledby="bploFormlbl" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header float-none">
          <h4 id="bploFormlbl">Fill Up Forms</h4>
          <button class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a class="btn btn-info" href="{{URL::asset('docs/BUSINESS PERMIT APPLICATION FORM.docx')}}" download>Download Business Registration Form</a>
          <a class="btn btn-info" href="form">Online BPLO Fill Up</a>
        </div>
      </div>
    </div>
