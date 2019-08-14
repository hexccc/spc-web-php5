<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>San Pablo City | @yield('title')</title>
      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/login.css">

    <!-- <script src="/js/multistep.js"></script>
    <link rel="stylesheet" href="/css/multistep.css"> -->

    <script src="/js/app.js"></script>
    <script src="/js/form.js"></script>
    <script src="/js/BPLO.js"></script>
    <script src="/js/inputmask.js"></script>
    <script src="/js/jquery.bootstrap-growl.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>
    <script type="text/javascript" src="{{URL::asset('js/news.js')}}">
    </script>
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

<!-- //////MODAL BPLO login -->
<div class="modal fade logged" id="logged" tabindex="-1" role="dialog" aria-labelledby="logged" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header float-none">
        <h3>Log In</h3>
				<button class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
        <form id="signinReg" enctype="multipart/form-data">
        <div class="r-form-group">
          <input type="text" placeholder="Username" name="user[username]" id="username" required/>
        </div>
        <div class="r-form-group">
          <input type="password" placeholder="Password" name="user[password]" id="password" required/>
        </div>
        <div class="r-form-group">
          <button type="submit" >Log in</button>
        </div>

        </form>
			</div>
		</div>
	</div>
</div>
