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

<div class="wrapper">
  <div class="table table-full align-center">
    <div class="table-row h100">
      <div class="table-cell v-align-bottom">
        <!-- ui-slide -->
        <div class="relative">
					<!-- <h1 class="mb-5" align="center">Please Fill Out the Form</h1> -->
					<div>
						<p><b>INSTRUCTION </b></p>
						<p class=""><font color="red">1.	Provide accurate information and print legibly to avoid delays. Incomplete form will be returned to the applicant.<br>
						2. Ensure that all documents attached to this form (if any) are complete and properly filled out.
						</p></font>
					</div>


          <!-- card -->
          <div class="card">
            <ul class="ui-formSlide">
              <li data-step="0" class="active">
                <div class="ui-step-content in">

									<form id="addnewbuss">

										<div class="">
											<p align="center"><b>1.	BASIC INFORMATION </b></p>

										</div>
									  {{-- first row --}}
									    <div class="form-check-inline mb-4">
									      <label class="form-check-label">
									         <input type="radio" class="form-check-input"  value="new" name="app[basicnew]" checked>New
									      </label>
									    </div>

									    <!-- NOTE : Please include search box for renewing a bussiness that will load the business .

											<div class="form-check-inline">
									     <label class="form-check-label">
									       <input type="radio" class="form-check-input" value="renewal" name="new[basicnew]">Renewal
									     </label>
									    </div> -->

									    <div class="">
									      <div class="form-check-inline mb-4">
									        <label class="">Mode of Payment:
									           <input type="radio" class="form-check-input" value="Annually" name="app[mud_payment]" checked>Annually
									        </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="Semi-Annually" name="app[mud_payment]" disabled>Semi-Annually
									       </label>
									      </div>
									      <div class="form-check-inline disabled">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="Quarterly" name="app[mud_payment]" disabled>Quarterly
									       </label>
									      </div>
									    </div>

									    {{-- second row --}}
									    <div class="form-row">
									      <div class="form-group col-md-6">
									        <label for="dateapp">Date Application</label>
									        <input class="form-control" type="date" value="{{date('Y-m-d')}}" id="date_application" name = "app[date_application]">
									      </div>
									      <div class="form-group col-md-6">
									        <label for='tin'>TIN no.
									        </label>
									        <input type="text" class="form-control tin"  name="app[tin]">
									      </div>
									    </div>
									    <div class="form-row">
									      <div class="form-group col-md-6">
									        <label for='dti1'>DTI/SEC/CDA Registration Date
									        </label>
									        <input type="date"  class="form-control" name="app[dti_sec]" class ="ornum" >
									      </div>
									      <div class="form-group col-md-6">
									        <label for="dti2">DTI/SEC/CDA Number
									        </label>
									        <input type="number" class="form-control" name="app[dti_number]">
									      </div>
									    </div>

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
									    <!--
											NOTE : Ammendments is only for renewal

											<div>
									      <div class="form-check-inline mb-4">Amendment: &nbsp;
									        <label class="form-check-label">From:
									           <input type="radio" class="form-check-input" value="from_single" name="new[amendfrom]">Single
									        </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="from_partner" name="new[amendfrom]">Partnership
									       </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="from_corp"name="new[amendfrom]">Corporation
									       </label>
									      </div>
									    </div>
									    <div>
									      <div class="form-check-inline mb-4">Amendment: &nbsp;
									        <label class="form-check-label">To:
									           <input type="radio" class="form-check-input" value="to_single" name="new[amendto]">Single
									        </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="to_partner" name="new[amendto]">Partnership
									       </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="to_corp" name="new[amendto]">Corporation
									       </label>
									      </div>
									    </div> -->

									    <div class="form-check-inline mb-4">Are you enjoying tax incentive from any Government Entity? &nbsp;
									      <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="1" name="app[entity]" checked>Yes
									      </label>
									    </div>
									    <div class="form-check-inline">
									     <label class="form-check-label">
									       <input type="radio" class="form-check-input" value="0" name="app[entity]">No
									     </label>
									    </div>

											<div class="form-group-inline mb-4">
											 <label>Please Specify Entity</label>
											 <textarea type="text" class="form-control" name="app[buss_specifyentity]" rows="2"></textarea>
										 	</div>

											<!-- 			NOTE : added inputfield -->
											<div class="form-check-inline ">Is the Establishment CCTV equipped? &nbsp;
												<label class="form-check-label">
									         <input type="radio" class="form-check-input" value="1" name="app[cctv_eqp]">Yes
									      </label>
									    </div>
									    <div class="form-check-inline mb-4">
									     <label class="form-check-label">
									       <input type="radio" class="form-check-input" value="0" name="app[cctv_eqp]">No
									     </label>

											 </div>
											 <!-- NOTE: end here -->
											 <hr class = " mb-4">
									    <p align="center">Name of Taxpayer / Registrant </p>

									  <div class="form-row">
									    <div class="form-group col-md-4">
									      <label for='fname'>Last Name</label>
									      <input type="text" class="form-control" name="app[tax_last_name]" >
									    </div>
									    <div class="form-group col-md-4">
									      <label for="lname">First Name</label>
									      <input type="text" class="form-control" name="app[tax_first_name]" >
									    </div>
									    <div class="form-group col-md-4">
									      <label for="lname">Middle Name</label>
									      <input type="text" class="form-control" name="app[tax_middle_name]">
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="email">Business Name</label>
									    <input type="text" class="form-control" name="app[tax_buss_name]" >
									  </div>
									  <div class="form-group">
									    <label for="address">Trade Name/Franchise</label>
									    <input type="text" class="form-control" name="app[tax_franchise]" >
									  </div>
										<!-- NOTE: added input -->
										<div class="form-group">
									 	 <label for="address">Name of President/Treasurer of Corporation</label>
									 	 <input type="text" class="form-control" name="app[tax_president]" >
									  </div>

										<div class="form-check-inline ">Owner's Gender &nbsp;
											<label class="form-check-label">
												 <input type="radio" class="form-check-input" name="app[tax_gender]">Male
											</label>
										</div>
										<div class="form-check-inline mb-4">
										 <label class="form-check-label">
											 <input type="radio" class="form-check-input" name="app[tax_gender]">Female
										 </label>
										 </div>
										 <div class="form-check-inline mb-4">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="app[tax_gender]">JP
											</label>
											</div>
												<!-- NOTE: ended here -->
                </div>
              </li>

              <li data-step="1" class="">
                <div class="ui-step-content">


									  {{-- APPLICATION
									        SECTION
									          2  --}}

									  <div class="">
									    <p align="center"><b>2.	OTHER INFORMATION </b></p>
									  </div>
									  <div>
									    <p class="mb-4"><font color="red">Note:<b> For renewal applications,</b> do not fill up this section unless certain information have changed.
									    </p></font>
									  </div>

									  {{-- BUSINESS INFORMATION --}}
									  <div class="form-row">
									    <div class="form-group col-md-4">
									      <label>Business Address</label>
												<input type="text" class="form-control"  placeholder="Bdlg#/Street/Brgy/City" name="app[buss_address]">
									      <!-- <textarea type="text" class="form-control" name="app[buss_address]" placeholder="Bdlg#/Street/Brgy/City" rows="2"></textarea> -->
									    </div>
											<!-- NOTE: added field -->
											<div class="form-group col-md-4">
												<label>House No./Bldg. No.</label>
												<input type="number" class="form-control " name="app[buss_houseno]">
											</div>
											<div class="form-group col-md-4">
												<label>Building Name</label>
												<input type="text" class="form-control " name="app[buss_bldgname]">
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
										<!-- NOTE: ended here -->
									{{-- OWNER INFORMATIONS --}}
									  <label>Owner's Information</label>
											<!-- NOTE: added field -->
										<div class="form-row">
											<div class="form-group col-md-4">
												<label>Last Name</label>
												<input type="text" class="form-control"  name="app[owner_lastname]">
											</div>
											<div class="form-group col-md-4">
												<label>First Name</label>
												<input type="type" class="form-control " name="app[owner_firstname]">
											</div>
											<div class="form-group col-md-4">
												<label>Middle Name</label>
												<input type="text" class="form-control " name="app[owner_middlename]">
											</div>
										</div>
										<!-- NOTE: ended here -->

									<div class="form-row">
										<div class="form-group col-md-4">
											<label>Owner's Address</label>
											<input type="text" class="form-control"  placeholder="Bdlg#/Street/Brgy/City" name="app[owner_address]">
											<!-- <textarea type="text" class="form-control" name="app[buss_address]" placeholder="Bdlg#/Street/Brgy/City" rows="2"></textarea> -->
										</div>
										<!-- NOTE: added field -->
										<div class="form-group col-md-4">
											<label>House No./Bldg. No.</label>
											<input type="number" class="form-control " name="app[owner_houseno]">
										</div>
										<div class="form-group col-md-4">
											<label>Building Name</label>
											<input type="text" class="form-control " name="app[owner_bldgname]">
										</div>
									</div>

									<div class="form-row">
										<div class="form-group col-md-4">
											<label>Unit No.</label>
											<input type="number" class="form-control " name="app[owner_unit]">
										</div>
										<div class="form-group col-md-4">
											<label>Street</label>
											<input type="text" class="form-control " name="app[owner_street]">
										</div>
										<div class="form-group col-md-4">
											<label>Barangay</label>
											<input type="text" class="form-control " name="app[owner_barangay]">
										</div>
									</div>

									 <div class="form-row">
										<div class="form-group col-md-4">
											<label>Subdivision</label>
											<input type="text" class="form-control " name="app[owner_subdivision]">
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
									<!-- NOTE: ended here -->
									 <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Postal Code</label>
									      <input type="number" class="form-control postcode" name="app[owner_postcode]">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Email Address</label>
									      <input type="email" class="form-control" id ="owner_email" name="app[owner_email]" placeholder="example@email.com">
									    </div>
										</div>

									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Telephone</label>
									        <input class="form-control tel" type="tel" name="app[owner_tel_no]" placeholder="539-966">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Mobile No.</label>
									        <input class="form-control mobile" type="tel" name="app[owner_mobile]" placeholder="09XX XXX XXXX">
									    </div>
									  </div>

                    <!-- NOTE: not included in database -->
									<!-- {{-- IN CASE OF EMERGENCY INFORMATIONS --}}
									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>In Case of emergency, provide name of contact person: </label>
									      <input type="text" class="form-control" name="app[emer_first_name]" placeholder="First Name">
									    </div>
									    <div class="form-group col-md-6">
									      <label>&nbsp;</label>
									      <input type="text" class="form-control" name="app[emer_Last_name]" placeholder="Last Name">
									    </div>
									  </div>

									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Telephone/Mobile No.</label>
									        <input class="form-control tel" type="tel" name="app[emer_contact_no]" placeholder="539-966">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Email Address</label>
									        <input class="form-control" type="email" name="app[emer_email]" placeholder="Email Address">
									    </div>
									  </div> -->

									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Business Area</label>
									        <input class="form-control" type="number" name="app[buss_area]" placeholder="In sq m">
									    </div>

									    <!--
											NOTE :: THe same as the total male and female redundant data could be establish in the backend-->
											 <!-- <div class="form-group col-md-4"> -->
									      <!-- <label>Total No. of Employees in Establishment</label>
									        <input class="form-control" type="number" name="other[totalno_employees]" placeholder="Total Number of Employees"> -->
									    <!-- </div> -->

									    <div class="form-group col-md-2 mb-2" >
									      <label style="white-space: nowrap">No. of Employees Residing within</label>
									        <input class="form-control" type="number" name="app[emp_in_lgu]" placeholder="LGU">
									    </div>
									    <div class="form-group col-md-2 mt-2">
									      <label></label>
									        <input class="form-control" type="number" name="app[male_emp]" placeholder="Male">
									    </div>
									    <div class="form-group col-md-2 mt-2">
									      <label></label>
												<input type="hidden" name="app[buss_user_id]" id="userid" value="">
									        <input class="form-control" type="number" name="app[female_emp]" placeholder="Female">
									    </div>
									  </div>

                    <div class="form-row">
                    <div class="form-group col-md-6 mt-2">
                      <label></label>
                        <input class="form-control" type="number" name="app[service_vehicle]" placeholder="Unit of Service Vehicle">
                      </div>
                    </div>



									  <div>
									    <p class="mt-5 mb-4"><font color="red">Note: <b>Fill Up Only if Business Place is Rented</b>
									    </p></font>
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
									      <label>Lessor'Full Adress</label>
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


                </div>
              </li>


              <li data-step="2">
                <div class="ui-step-content">

									<div class="">
							      <p align="center"><b>3. BUSINESS ACTIVITY</b></p>
							    </div>
							  <div class="form-row mb-3 mt-3">
							    <div class="form-group col-md-3">
										<label >Line of Business</label>
                    <!-- name="bussactivity[bussactivity_linebuss]"  -->
										<select class="form-control addlinebuss1" name="app[buss_line]" id="addline1">
										<option selected value="">Line of Business</option>
										<?php
										$linebuss = array("Manufacturers", "Wholesalers, distributors, or dealers", "Retailers", "Food","Contractors","Banks and other financial institutions","Lease","Lessor of real property","Tobacco dealers","Dealers of Liquors","Amusement Places and Devices","Theater and Cinema","Other business");
										foreach($linebuss as $linebus){
										?>
										 <option value="<?php echo strtolower($linebus); ?>"><?php echo $linebus; ?></option>
										<?php
										}
										?>
										</select>    </div>
										<div class="form-group col-md-3">
											<label for='fname'>Code of Business</label>
												<select class="form-control" name="app[buss_line_code]" id="addcode1">
													<option selected value="" selected>Code of Business</option>
												</select>
										</div>
                      <!-- NOTE: added inputfield Sub Category -->
                    <div class="form-group col-md-2">
                      <label >Sub Category</label>
                      <input type="text" class="form-control" name="app[sub_category]" placeholder="">
                    </div>
							    <div class="form-group col-md-2">
							      <label >No. of Units</label>
							      <input type="number" class="form-control" name="app[no_units]" placeholder="">
							    </div>
							    <div class="form-group col-md-2">
							      <label >Capitalization</label>
							      <input type="text" class="form-control money" name="app[capitalization]" placeholder="">
							    </div>


							  </div>
              </div>
              </li>

              <li data-step="3">
                <div class="ui-step-content">

									      <div class="">
									        <p align="center"><b>4. ADDITIONAL LINE OF BUSINESS</b></p>
									      </div>

									      <div class="form-row">
												<div class="form-group col-md-3">
													<label >Line of Business</label>
                          <select class="form-control addlinebuss" name="app[buss_line]" id="addline">
													<option selected value=" ">Line of Business</option>
													<?php
													$linebuss = array("Manufacturers", "Wholesalers, distributors, or dealers", "Retailers", "Food","Contractors","Banks and other financial institutions","Lease","Lessor of real property","Tobacco dealers","Dealers of Liquors","Amusement Places and Devices","Theater and Cinema","Other business");
													foreach($linebuss as $linebus){
													?>
													 <option value="<?php echo strtolower($linebus); ?>"><?php echo $linebus; ?></option>
													<?php
													}
													?>
													</select>
													</div>


													<div class="form-group col-md-2">
														<label for='fname'>Code of Business</label>
															<select class="form-control" name="app[buss_line_code]" id="addcode">
																<option selected value="">Code of Business</option>
															</select>
														</div>

												<div class="form-group col-md-2">
													<div class="md-form">
											      <label for="addsubcat">Sub Category</label>
														<input type="text" id="addsubcat" name="app[sub_category]" class="form-control">
													</div>
												</div>
                        <!-- NOTE: added inputfield no.units -->

                        <div class="form-group col-md-2">
                          <label >No. of Units</label>
                          <input type="number" id="addunits" class="form-control" name="app[no_units]" placeholder="">
                        </div>


                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label >Essentials</label>
                            <input type="number" id="addessen" class="form-control" name="app[no_units]" placeholder="">
                          </div>
                          <div class="form-group col-md-3">
                            <label >Non Essentials</label>
                            <input type="number" id="addnonessen" class="form-control" name="app[no_units]" placeholder="">
                          </div>
													<div class="form-group col-md-3">
									          <label for="addcap">Capitalization</label>
									          <input type="text" id="addcap" name="app[capitalization]" class="form-control money">
                            <input type="hidden" id="" name="app[ranks]" class="form-control" value="secondary">
													</div>
									      <div class="form-group col-md-3">
									        <label for="addcap">Add</label>
									        <!-- <button type="submit" class="btn btn-primary" name="button"  value="ADD">ADD</button> -->
									        <button type="button" class="btn btn-success" name="button" id ="addlineaddRow"  >ADD</button>
									      </div>
									    </div>

                      <div class="form-row">
                      <div class="form-group col-md-3">


                        <div class="form-group col-md-2">
                          <div class="md-form">
                            <label for="addcap">Capitalization</label>
                            <input type="text" id="addcap" name="app[capitalization]" class="form-control money">
                            <input type="hidden" id="" name="app[ranks]" class="form-control" value="secondary">
                          </div>
                        </div>

                        <div class="form-group col-md-1">
                          <label for="addcap">Add</label>
                          <!-- <button type="submit" class="btn btn-primary" name="button"  value="ADD">ADD</button> -->
                          <button type="button" class="btn btn-success" name="button" id ="addlineaddRow"  >ADD</button>
                        </div>
                      </div>
                      </div>
                      </div>


									    <div class="form-group col-md-12">
									      <table id="addnewline" class="table table-sm table-striped table-bordered">
									        <thead>
									          <tr>
									            <th scope="col">Line of Business</th>
									            <th scope="col">Code</th>
									            <th scope="col">Sub Category</th>
									            <th scope="col">Capitalization</th>
									            <th scope="col">Action</th>
									          </tr>
									        </thead>
									        <!-- <tbody id="addtnline_table"> -->
									        </tbody>
									      </table>
									    </div>
										 </div>
              </li>


              <li data-step="3">
                <div class="ui-step-content">

                      <div class="mt-2">
                       <p align="center"><b>I DECLARE UNDER PENALTY OF PERJURY</b> that the forgoing information are true based on my personal knowledge and authentic records. Further,<b> I agree to comply with the regulatory requirements and other deficiencies within thirty (30) days from release of the business permit.</b></p>
                       </div>

                      <div >
                        <p align="center">By submitting this as a fully accomplished form;
                        you hereby consent to the collection, generation, use, processing, storage and retention of your personal data
                        by the City Government of San Pablo as provided for in the Data Privacy Act of 2012.</p>
                      </div>
                        <button type="submit" class="btn btn-primary  mb-4 float-right">Submit</button>

                  </form>
                </div>
              </li>
            </ul>
          </div>
          <!-- ./card -->
        </div>
        <!-- .ui-slide -->
      </div>
    </div>
    <div class="table-row align-center footer">
      <div class="table-cell v-align-top">
        <div class="buttons">
          <!-- button  -->
        <button id="btnPrev">Previous</button>
        <button id="clearall">Clear All</button>
        <button id="btnNext" >Next</button>
        </div>
      </div>
    </div>
  </div>
  </div>

<!-- ////formmm -->


@endsection
