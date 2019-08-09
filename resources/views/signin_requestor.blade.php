@extends('layouts.app')
<link rel="stylesheet" href="/css/login.css">
		<script src="/js/BPLO.js"></script>
@section('content')

<div class=" col-md-10 offset-md-1">
<div class="login-box">
  <div class="lb-header">
    <a href="#" class="active" id="login-box-link">Login</a>
    <a href="#" id="signup-box-link">Sign Up</a>
</div>

  <!-- <form class="email-login"> -->
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


  <!-- <form class="email-signup"> -->
  <form id="addReg" enctype="multipart/form-data" class="email-signup">
  <div class = "container">
  <div class = "row">
    <div class ="col-md-6">
      <div class="r-form-group">
        <input type="text" placeholder="First Name" name="buss_client[first_name]" id="first_name"/>
      </div>
      <div class="r-form-group">
        <input type="text" placeholder="Middle Name" name="buss_client[middle_name]" id="middle_name"/>
      </div>
      <div class="r-form-group">
        <input type="text" placeholder="Last Name" name="buss_client[last_name]" id="last_name"/>
      </div>
    </div>

    <div class ="col-md-6">
    <div class="r-form-group">
      <input type="text" placeholder="Username" name="buss_client[username]" id="username"/>
    </div>
    <div class="r-form-group">
      <input type="email" placeholder="Email" name="buss_client[email]" id="email"/>
    </div>
    <div class="r-form-group">
      <input type="password" placeholder="Password" name="buss_client[password]" id="password"/>
    </div>
    <div class="r-form-group">
      <!-- <input type="password" placeholder="Confirm Password" name="buss_client[confirmpassword]" id="confirmpassword"/> -->
    </div>
    </div>

    <div class="r-form-group">
      <button type="submit">Sign Up</button>
    </div>

  </div>
  </div>
  </form>
</div>
</div>


<!--
  <div class=" col-md-10 offset-md-1">
    <div class = "container">
      <div class = "row">

        <div class= "col-md-6">
        <h4 id="">Sign In</h4>
        <form id="signinReg" enctype="multipart/form-data">

          <div class="form-group">
            <label for="sign[username]">Username</label>
            <input type="text" class="form-control" name="sign[username]" id="sign[username]"  >
          </div>
          <div class="form-group">
            <label for="sign[pass]">Password</label>
            <input type="password" class="form-control" name="sign[pass]" id="sign[pass]">
          </div>
          <div class="container text-center pt-3">
              <button type="submit" class="btn btn-primary">Sign In</button>
          </div>
        </form>
        <!-- <a class="btn btn-info" href="{{URL::asset('docs/BUSINESS PERMIT APPLICATION FORM.docx')}}" download>Download Business Registration Form</a>
        <a class="btn btn-info" href="form">Online BPLO Fill Up</a> -->
      <!-- </div>

      <div class= "col-md-6">
      <h4 id="bploFormlbl">Register Requestor</h4>
      <form id="addReg" enctype="multipart/form-data">

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="reg[name]" id="reg[name]" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" name="reg[username]" id="reg[username]" aria-describedby="emailHelp" >
            </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" class="form-control" name="reg[email]" id="reg[email]">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="reg[pass]" id="reg[pass]">
        </div>
        <div class="container text-center pt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
        </div>
      </form>
      <!-- <a class="btn btn-info" href="{{URL::asset('docs/BUSINESS PERMIT APPLICATION FORM.docx')}}" download>Download Business Registration Form</a>
      <a class="btn btn-info" href="form">Online BPLO Fill Up</a> -->
    <!-- </div>



    </div>
  </div>
</div>  -->


@endsection
