@extends('layouts.app')

@section('content')


<div class="col-md-10 offset-md-1">

	<!-- //////BPLO MODALS ALERT -->

<div class="login-box">
  <div class="lb-header">
    <a href="#" class="active" id="login-box-link">Login</a>
    <a href="#" id="signup-box-link">Sign Up</a>
</div>


    <form id="signinReg" enctype="multipart/form-data" class="email-login">
    <div class="u-form-group">
      <input type="text" placeholder="Username" name="user[username]" id="username" required/>
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



  <form id="addReg" enctype="multipart/form-data" class="email-signup">
  <div class = "container">
  <div class = "row">
    <div class ="col-md-6">
      <div class="r-form-group">
        <input type="text" placeholder="First Name" name="buss_client[first_name]" id="first_name" required/>
      </div>
      <div class="r-form-group">
        <input type="text" placeholder="Middle Name" name="buss_client[middle_name]" id="middle_name" required/>
      </div>
      <div class="r-form-group">
        <input type="text" placeholder="Last Name" name="buss_client[last_name]" id="last_name" required/>
      </div>
    </div>

    <div class ="col-md-6">
    <div class="r-form-group">
      <input type="text" placeholder="Username" name="user[username]" id="username" required/>
    </div>
    <div class="r-form-group">
      <input type="email" placeholder="Email" name="buss_client[email]" id="email" required/>
    </div>
    <div class="r-form-group">
      <input type="password" placeholder="Password" name="user[password]" id="password" required/>
    </div>
    <div class="r-form-group">
      <!-- <input type="password" placeholder="Confirm Password" name="buss_client[confirmpassword]" id="confirmpassword"/> -->
    </div>
    </div>

    <div class="r-form-group">
      <button type="submit" >Sign Up</button>
    </div>


  </div>
  </div>
  </form>
</div>
</div>


@endsection
