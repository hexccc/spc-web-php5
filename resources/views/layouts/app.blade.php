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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>
    <script type="text/javascript" src="{{URL::asset('js/news.js')}}"></script>
    @include('inc.preloader')
    <div>
      @include('inc.navbar')
      <div class="container-fluid pt-4">
        <div class="row">
          <div class="col-lg-12">
            @yield('content')
          </div>
        </div>
      </div>
    </div>

        @include('inc.footer')
    </body>

    <script type="text/javascript">
      $("div[id^='event']").each(function(){
        var currentModal = $(this);
        currentModal.find('.btn-next').click(function(){
          currentModal.modal('hide');
          currentModal.closest("div[id^='event']").nextAll("div[id^='event']").first().modal('show');
        });
        currentModal.find('.btn-prev').click(function(){
          currentModal.modal('hide');
          currentModal.closest("div[id^='event']").prevAll("div[id^='event']").first().modal('show');
        });
      });
    </script>

    <script type="text/javascript">
      $("div[id^='news']").each(function(){
        var currentModal = $(this);
        currentModal.find('.btn-next').click(function(){
          currentModal.modal('hide');
          currentModal.closest("div[id^='news']").nextAll("div[id^='news']").first().modal('show');
        });
        currentModal.find('.btn-prev').click(function(){
          currentModal.modal('hide');
          currentModal.closest("div[id^='news']").prevAll("div[id^='news']").first().modal('show');
        });
      });
    </script>


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
</div>
