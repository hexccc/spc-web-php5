@extends('layouts.app')
@section('title', 'Online Fill Up Form')
@section('content')

<div class="modal fade logged" id="logged" tabindex="-1" role="dialog" aria-labelledby="logged">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body w-100">
        <div class="">
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

              <div class="r-form-group">
                <input type="text" placeholder="First Name" name="buss_client[first_name]" id="first_name" required/>
              </div>
              <div class="r-form-group">
                <input type="text" placeholder="Middle Name" name="buss_client[middle_name]" id="middle_name" required/>
              </div>
              <div class="r-form-group">
                <input type="text" placeholder="Last Name" name="buss_client[last_name]" id="last_name" required/>
              </div>

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

            <div class="r-form-group">
              <button type="submit" >Sign Up</button>
            </div>
          </div>
          </div>
          </form>
        </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="approved_buss" tabindex="-1" role="dialog" aria-labelledby="approved_buss">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body w-100">
            <div class="">
              <div class="modal-header">

                <h5 class = "modal-title" align="center">Approved Business</h5>
                </div>
                <div class="form-group p-2">

                  <button id ="ownership">Change of Ownership</button>
                  <button id ="busi_name">Change of Business Name</button>
                  <button id ="busi_add">Change of Business Address</button>
                  <button id ="owners_add">Change of Owner's Address</button>
                  <button id ="nature_busi">Change of Nature of Business</button>
                  <button id ="change_org" >Change of Organization</button>
                  <button id ="change_emp">Change Number of Employees</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


        <div class=" m-5">
          <div class = "mb-3">
            <h4 align="center">Ammendments</h4>
          </div>

        <div class="card p-4 mb-3">
          <form id="">
          <div class="form-check-inline mb-4 col-md-6">
            <!-- <input type="text" class="form-control" name="ammend[search]" id ="ammend[search]" placeholder="Search Name / Business Name / TIN / BIN">
            <input type="button" class="btn btn-primary btn-md ml-2"  value = "Search" role="button" id="search_busi"> -->
            <!-- <input type="button" class="btn btn-primary btn-md ml-2"  value = "Search" role="button" data-toggle="modal" data-target="#approved_buss"> -->



          </div>

          <table class="table table-sm table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Name of Business</th>
                <th scope="col">Tin</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class= "" id="approved_business">

            </tbody>
          </table>
        </div>
          <!-- card -->
          <div class="card p-4">

            <div class="">
              <p align="center"><b>	BASIC INFORMATION </b></p>
            </div>

									  {{-- first row --}}

                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for='fname'>Last Name</label>
                          <input type="text" class="form-control" name="app[tax_last_name]">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="lname">First Name</label>
                          <input type="text" class="form-control" name="app[tax_first_name]">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="lname">Middle Name</label>
                          <input type="text" class="form-control" name="app[tax_middle_name]">
                        </div>
                      </div>

                      <hr class = "mb-5">
                      <div id="change_organization">
									    {{-- thrid row --}}
									    <div>
									      <div class="form-check-inline mb-4">
									        <label class="form-check-label">Type of Business:
									           <input type="radio" class="form-check-input" value="5" name="app[typeofbuss]" checked>Single
									        </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="4" name="app[typeofbuss]">Partnership
									       </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="3" name="app[typeofbuss]">Corporation
									       </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="2" name="app[typeofbuss]">Cooperative
									       </label>
									      </div>
												<div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="1" name="app[typeofbuss]">Association
									       </label>
									      </div>
									    </div>

                      <div id = "business_name">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Business Name</label>
                          <input type="text" class="form-control" name="app[tax_buss_name]" >
                        </div>

                        <div class="form-group col-md-6">
                          <label>Nature of Business</label>
                          <input type="text" class="form-control" name="app[tax_buss_name]" >
                        </div>
                      </div>
                    </div>
                      <!--
											NOTE :: THe same as the total male and female redundant data could be establish in the backend-->
											 <!-- <div class="form-group col-md-4"> -->
									      <!-- <label>Total No. of Employees in Establishment</label>
									        <input class="form-control" type="number" name="other[totalno_employees]" placeholder="Total Number of Employees"> -->
									    <!-- </div> -->
                      <div id="no_employees">
                      <div class = "form-row">
									    <div class="form-group col-md-4 mb-2" >
									      <label style="white-space: nowrap">No. of Employees Residing within</label>
									        <input class="form-control" type="number" name="app[emp_in_lgu]" placeholder="LGU">
									    </div>
									    <div class="form-group col-md-4 mt-2">
									      <label></label>
									        <input class="form-control" type="number" name="app[male_emp]" placeholder="Male">
									    </div>
									    <div class="form-group col-md-4 mt-2">
									      <label></label>
												<input type="hidden" name="app[buss_user_id]" id="userid" value="">
									        <input class="form-control" type="number" name="app[female_emp]" placeholder="Female">
									    </div>
                    </div>
											 <hr class = " mb-4">
                    </div>

									  {{-- APPLICATION
									        SECTION
									          2  --}}

                    <div id="business_add">
									  <div class="">
									    <p align="center"><b>	BUSINESS INFORMATION </b></p>
									  </div>

									  <div class="form-row">
									    <div class="form-group col-md-4">
									      <label>Business Address</label>
												<input type="text" class="form-control"  placeholder="Bdlg#/Street/Brgy/City" name="app[buss_address]">
									      <!-- <textarea type="text" class="form-control" name="app[buss_address]" placeholder="Bdlg#/Street/Brgy/City" rows="2"></textarea> -->
									    </div>
											<!-- NOTE: added field -->
											<div class="form-group col-md-4">
												<label>House No./Bldg. No.</label>
												<input type="number" class="form-control " name="app[buss_houseno]" id ="ammend_address">
											</div>
											<div class="form-group col-md-4">
												<label>Building Name</label>
												<input type="text" class="form-control " name="app[buss_bldgname]" id="">
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-4">
												<label>Unit No.</label>
												<input type="number" class="form-control " name="app[buss_unit]">
											</div>
											<div class="form-group col-md-4">
												<label>Street</label>
												<input type="text" class="form-control " name="app[buss_street]">
											</div>
											<div class="form-group col-md-4">
												<label>Barangay</label>
												<input type="text" class="form-control " name="app[buss_barangay]">
											</div>
										</div>

										 <div class="form-row">
											<div class="form-group col-md-4">
												<label>Subdivision</label>
												<input type="text" class="form-control " name="app[buss_subdivision]">
											</div>

											<div class="form-group col-md-4">
												<label>City/Municipality </label>
												<input type="text" class="form-control " name="app[buss_city]" Placeholder = "San Pablo" value= "San Pablo" disabled>
											</div>

											<div class="form-group col-md-4">
												<label>Province</label>
												<input type="text" class="form-control " name="app[buss_province]" placeholder ="Laguna"  value= "Laguna" disabled>
											</div>
										</div>


										<div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Postal Code</label>
									      <input type="number" class="form-control postcode" name="app[buss_postcode]">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Email Address</label>
									      <input type="email" class="form-control" id ="buss_email" name="app[buss_email]" placeholder="example@email.com">
									    </div>
									  </div>
									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Telephone</label>
									        <input class="form-control tel" type="tel" name="app[buss_telno]" placeholder="539-966">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Mobile No.</label>
									        <input class="form-control mobile" type="tel" name="app[buss_phone]" placeholder="09XX XXX XXXX">
									    </div>
									  </div>
										<hr class="mt-5">
                  </div>

                    <div class="" id ="owners_div">
                    <div class="" >
                      <p align="center"><b>	OWNER'S INFORMATION </b></p>
                    </div>

										<div class="form-row">
											<div class="form-group col-md-4">
												<label>Last Name</label>
												<input type="text" class="form-control"  name="app[owner_lastname]"  id="ammend_lastname">
											</div>
											<div class="form-group col-md-4">
												<label>First Name</label>
												<input type="type" class="form-control " name="app[owner_firstname]"  id="ammend_firstname">
											</div>
											<div class="form-group col-md-4">
												<label>Middle Name</label>
												<input type="text" class="form-control " name="app[owner_middlename]"  id="ammend_midname">
											</div>
										</div>

                  <div class= "owners_address">
									<div class="form-row">
										<div class="form-group col-md-4">
											<label>Owner's Address</label>
											<input type="text" class="form-control"  placeholder="Bdlg#/Street/Brgy/City" name="app[owner_postcode]"   id="ammend_add">
										</div>
										<div class="form-group col-md-4">
											<label>House No./Bldg. No.</label>
											<input type="number" class="form-control " name="app[owner_houseno]"  id="ammend_houseno">
										</div>
										<div class="form-group col-md-4">
											<label>Building Name</label>
											<input type="text" class="form-control " name="app[owner_bldgname]"  id="ammend_bldg">
										</div>
									</div>

									<div class="form-row">
										<div class="form-group col-md-4">
											<label>Unit No.</label>
											<input type="number" class="form-control " name="app[owner_unit]" id="ammend_bldg">
										</div>
										<div class="form-group col-md-4">
											<label>Street</label>
											<input type="text" class="form-control " name="app[owner_street]" id="ammend_bldg">
										</div>
										<div class="form-group col-md-4">
											<label>Barangay</label>
											<input type="text" class="form-control " name="app[owner_barangay]" id="ammend_bldg">
										</div>
									</div>

									 <div class="form-row">
										<div class="form-group col-md-4">
											<label>Subdivision</label>
											<input type="text" class="form-control " name="app[owner_subdivision]" id="ammend_subd">
										</div>

										<div class="form-group col-md-4">
											<label>City/Municipality </label>
											<input type="text" class="form-control " name="app[owner_city]" Placeholder = "San Pablo" value = "San Pablo" disabled>
										</div>

										<div class="form-group col-md-4">
											<label>Province</label>
											<input type="text" class="form-control " name="app[owner_province]" placeholder ="Laguna" value = "San Pablo" disabled>
										</div>
									</div>
									 <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Postal Code</label>
									      <input type="number" class="form-control postcode" name="app[owner_postcode]" id="ammend_postal">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Email Address</label>
									      <input type="email" class="form-control" id ="owner_email" name="app[owner_email]" placeholder="example@email.com" id="ammend_email">
									    </div>
										</div>

									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Telephone</label>
									        <input class="form-control tel" type="tel" name="app[owner_tel_no]" placeholder="539-966" id="ammend_tel">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Mobile No.</label>
									        <input class="form-control mobile" type="tel" name="app[owner_mobile]" placeholder="09XX XXX XXXX" id="ammend_mobil">
									    </div>
                    </div>
                  </div>
                  <hr class="mt-5">
                </div>

									  <div>
									    <p class="mt-5 mb-3"><font color="red">Note: <b>Fill Up Only if Business Place is Rented</b>
									    </p></font>
									  </div>

                    <div class="">
                      <p align="center"><b>LESSOR'S INFORMATION </b></p>
                    </div>

									  <div class="form-row">
									    <div class="form-group col-md-4">
									      <label>Lessor's Full Name</label>
									      <input type="text" class="form-control" name="app[lessor_last_name]" placeholder="Last Name">
									    </div>
									    <div class="form-group col-md-4 mt-2">
									      <label ></label>
									      <input type="text" class="form-control" name="app[lessor_first_name]" placeholder="First Name">
									    </div>
									    <div class="form-group col-md-4 mt-2">
									      <label></label>
									      <input type="text" class="form-control" name="app[lessor_middle_name]" placeholder="Middle Name">
									    </div>
									    <div class="form-group col-md-12">
									      <label>Lessor's Full Adress</label>
									      <textarea type="text" class="form-control" name="app[lessor_address]" placeholder="Bdlg#/Street/Brgy/City" rows="2"></textarea>
									    </div>
									  </div>
									  <div class="form-row">
									    <div class="form-group col-md-4">
									      <label>Telephone/Mobile No.</label>
									        <input class="form-control" type="tel" name="app[lessor_tel_no]" placeholder="539-1234 / 09123456789">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Email Address</label>
									        <input class="form-control" type="email" name="app[lessor_email]" placeholder="Email Address">
									    </div>
									    <div class="form-group col-md-2">
									      <label>Monthly Rental</label>
									        <input class="form-control" type="number" name="app[lessor_monthly_rental]" placeholder="">
									    </div>
									  </div>

                    <div class = "form-row ">
                      <div align="center">
                        <button type="submit" class="btn btn-primary btn-md mb-4">Save</button>
                        <button type="reset" class="btn btn-primary btn-md mb-4 ">Clear All</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
              </div>

<!-- ////formmm -->


@endsection
