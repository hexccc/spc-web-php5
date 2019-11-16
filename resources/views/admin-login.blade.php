
@extends('layouts.adminlogin')

@section('title', 'Admin')

@section('admincontent')


<div class="col-md-10 offset-md-1">

	<!-- //////BPLO MODALS ALERT -->

<div class="login-box">
  <div class="lb-header">
    <a href="#" class="active" id="login-box-link">Admin Login</a>
    {{-- <a href="#" id="signup-box-link">Sign Up</a> --}}
</div>

{!! csrf_field() !!}
  <form id="signinTest" class="email-login">
    
    <div style="height:30px;" class="form-group d-flex justify-content-center">
      <input class="form-control my-2" type="text" placeholder="Username" name="user[username]" id="username" required autofocus/>
    </div>
    <div style="height:30px;" class="form-group d-flex justify-content-center"">
      <input  class="form-control my-4" type="password" placeholder="Password" name="user[password]" id="password" required/>
    </div>
    <div  class="form-group d-flex justify-content-center">
      <button class="btn btn-info btn-block btn-lg my-5" type="submit" id="signin">Log in</button>
    </form>
    </div>
    <div class="form-group">
      <!-- <a href="#" class="forgot-password">Forgot password?</a> -->
    </div>

</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('.login-box',).css('border-radius', '25px');
    $('.login-box',).css('width', '500px');
    $('.login-box',).css('height', '380px');
    $('.btn-block',).css('width', '80%');
    $('.form-control',).css('width', '80%');
    $('.form-control',).css('height', '150%');
    $('.form-control',).css('border-radius', '25px');
    $('.form-control',).css('border-width', '2px');
    $('.btn',).css('border-radius', '25px');
  });
</script>



@endsection
