
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


  <form id="signinTest" enctype="multipart/form-data" class="email-login">
    {!! csrf_field() !!}
    <div class="u-form-group">
      <input type="text" placeholder="Username" name="user[username]" id="username" required autofocus/>
    </div>
    <div class="u-form-group">
      <input type="password" placeholder="Password" name="user[password]" id="password" required/>
    </div>
    <div class="u-form-group">
      <button type="submit" >Log in</button>
     
    </div>
    <div class="u-form-group">
      <!-- <a href="#" class="forgot-password">Forgot password?</a> -->
    </div>
  </form>
</div>
</div>
<script src='/js/admin-login.js'></script>



@endsection
