@extends('layouts.app')
@section('title', 'Online Fill Up Form')
@section('content')

<script src="/js/jquerydatatables.js"></script>
<script src="/js/datatables.js"></script>
<script src="/js/ammendments.js"></script>

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



      <div class="modal fade" id="approved" tabindex="-1" role="dialog" aria-labelledby="approved">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body w-100">
              <div class="">
                <div class="modal-header">

                  <h5 class = "modal-title" align="center">Approved Business</h5>
                  </div>
                  <div class ="container">
                  <div class=" btn-group-justified spec ">
                    <button type="button" id ="ownership" class="w-100 mb-1">Change of Ownership</button>
                    <button type="button" id ="busi_name" class="w-100 mb-1">Change of Business Name</button>
                    <button type="button" id ="busi_add" class="w-100 mb-1">Change of Business Address</button>
                    <button type="button" id ="owners_add" class="w-100 mb-1">Change of Owner's Address</button>
                    <button type="button" id ="nature_busi" class="w-100 mb-1">Change of Nature of Business</button>
                    <button type="button" id ="change_org" class="w-100 mb-1">Change of Organization</button>
                    <button type="button" id ="change_emp" class="w-100 mb-1">Change Number of Employees</button>
                  </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>


      <button class = "float_btn req" id ="save_owner"  data-toggle="popover" data-content="Send Request for Changes of Ownership">Request</button>
      <button class = "float_btn req" id ="save_bussname"  data-toggle="popover" data-content="Send Request for Changes of Business Name">Request</button>
      <button class = "float_btn req" id ="save_bussadd"  data-toggle="popover" data-content="Send Request for Changes of Business Address">Request</button>
      <button class = "float_btn req" id ="save_owneradd"  data-toggle="popover" data-content="Send Request for Changes of Owner's Address">Request</button>
      <button class = "float_btn req" id ="save_naturebusi"  data-toggle="popover" data-content="Send Request for Changes of Nature of Business">Request</button>
      <button class = "float_btn req" id ="save_changeorg"  data-toggle="popover" data-content="Send Request for Changes of Organization">Request</button>
      <button class = "float_btn req" id ="save_changeemp"  data-toggle="popover" data-content="Send Request for Changes of Employees Number">Request</button>
      <a id="return" class = "float_button"  data-toggle="popover" data-content="Return to Top"><img class="up" src="{{URL::asset('svg/up_icon.svg')}}"></a>

      <span></span>


        <div class=" m-5">
          <div class = "mb-3">
            <h4 align="center">Amendments</h4>
          </div>


        <div class="card p-4 mb-3 m-4">
          <form id="ammend_update">

          <table class="table table-responsive table-sm table-striped table-bordered ammend_table " id ="ammend_info" width="100%">
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
          <div class="card p-4 m-4">

            <div class="">
              <p align="center"><b>	BASIC INFORMATION </b></p>
            </div>
              <input type="hidden" class="form-control" name="ammend[refno]" id="">
              <input type="hidden" class="form-control" name="ammend[request_type]">
              <input type="hidden" class="form-control" name="ammend[buss_id]" id="ammendbussid">
              <input type="hidden" class="form-control" name="ammend[user_id]" id = "ammenduserid">

									  {{-- first row --}}
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for='fname'>Last Name</label>
                          <input type="text" class="form-control" name="ammend[tax_last_name]" id="ammend_lname">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="lname">First Name</label>
                          <input type="text" class="form-control" name="ammend[tax_first_name]"  id="ammend_fname">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="lname">Middle Name</label>
                          <input type="text" class="form-control" name="ammend[tax_middle_name]" id="ammend_mname">
                        </div>
                      </div>

                      <hr class = "mb-5">
                      <div id="change_organization">
									    {{-- thrid row --}}
									    <div>
									      <div class="form-check-inline mb-4">
									        <label class="form-check-label">Type of Business:
									           <input type="radio" class="form-check-input" value="5" name="ammend[kind_org]" >Single
									        </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="4" name="ammend[kind_org]">Partnership
									       </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="3" name="ammend[kind_org]">Corporation
									       </label>
									      </div>
									      <div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="2" name="ammend[kind_org]">Cooperative
									       </label>
									      </div>
												<div class="form-check-inline">
									       <label class="form-check-label">
									         <input type="radio" class="form-check-input" value="1" name="ammend[kind_org]">Association
									       </label>
									      </div>
									    </div>

                      <div id = "business_name">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Business Name</label>
                          <input type="text" class="form-control" name="ammend[buss_name]"  id="ammend_bussname">
                        </div>

                        <div class="form-group col-md-6">
                          <label>Nature of Business</label>
                          <input type="text" class="form-control" name="ammend[tax_buss_name]" id="nature_bussname">
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
									        <input class="form-control" type="number" name="ammend[emp_in_lgu]" placeholder="LGU" id="ammend_noemp">
									    </div>
									    <div class="form-group col-md-4 mt-2">
									      <label></label>
									        <input class="form-control" type="number" name="ammend[male_emp]" placeholder="Male" id="ammend_male">
									    </div>
									    <div class="form-group col-md-4 mt-2">
									      <label></label>
												<input type="hidden" name="app[buss_user_id]" id="userid" value="">
									        <input class="form-control" type="number" name="ammend[female_emp]" placeholder="Female" id="ammend_female">
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
												<input type="text" class="form-control"  placeholder="Bdlg#/Street/Brgy/City" name="ammend[buss_address]" id ="ammend_bussadd">
									      <!-- <textarea type="text" class="form-control" name="app[buss_address]" placeholder="Bdlg#/Street/Brgy/City" rows="2"></textarea> -->
									    </div>
											<!-- NOTE: added field -->
											<div class="form-group col-md-4">
												<label>House No./Bldg. No.</label>
												<input type="number" class="form-control " name="ammend[buss_houseno]" id ="ammend_house">
											</div>
											<div class="form-group col-md-4">
												<label>Building Name</label>
												<input type="text" class="form-control " name="ammend[buss_bldgname]" id="ammend_bussbldg">
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-4">
												<label>Unit No.</label>
												<input type="number" class="form-control " name="ammend[buss_unit]" id="ammend_bussunit">
											</div>
											<div class="form-group col-md-4">
												<label>Street</label>
												<input type="text" class="form-control " name="ammend[buss_street]"  id="ammend_street">
											</div>
											<div class="form-group col-md-4">
												<label>Barangay</label>
												<input type="text" class="form-control " name="ammend[buss_barangay]"  id="ammend_brgy">
											</div>
										</div>

										 <div class="form-row">
											<div class="form-group col-md-4">
												<label>Subdivision</label>
												<input type="text" class="form-control " name="ammend[buss_subdivision]" id="ammend_subd">
											</div>

											<div class="form-group col-md-4">
												<label>City/Municipality </label>
												<input type="text" class="form-control " name="ammend[buss_city]" Placeholder = "San Pablo" value= "San Pablo" disabled>
											</div>

											<div class="form-group col-md-4">
												<label>Province</label>
												<input type="text" class="form-control " name="ammend[buss_province]" placeholder ="Laguna"  value= "Laguna" disabled>
											</div>
										</div>


										<div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Postal Code</label>
									      <input type="number" class="form-control postcode" name="ammend[buss_postcode]" id="ammend_postal">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Email Address</label>
									      <input type="email" class="form-control" id ="ammend_bussemail" name="ammend[buss_email]" placeholder="example@email.com">
									    </div>
									  </div>
									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Telephone</label>
									        <input class="form-control tel" type="tel" name="ammend[buss_telno]" placeholder="539-966" id ="ammend_telno">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Mobile No.</label>
									        <input class="form-control mobile" type="tel" name="ammend[buss_phone]" placeholder="09XX XXX XXXX" id ="ammend_mobile">
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
                        <input type="text" class="form-control"  name="ammend[last_name]"  id="ammend_lastname">
												<input type="hidden" class="form-control"  name="ammend[owners_id]"  id="ammendownerid">
											</div>
											<div class="form-group col-md-4">
												<label>First Name</label>
												<input type="type" class="form-control " name="ammend[first_name]"  id="ammend_firstname">
											</div>
											<div class="form-group col-md-4">
												<label>Middle Name</label>
												<input type="text" class="form-control " name="ammend[middle_name]"  id="ammend_midname">
											</div>
										</div>

                  <div id = "owners_address">
									<div class="form-row">
										<div class="form-group col-md-4">
											<label>Owner's Address</label>
											<input type="text" class="form-control"  placeholder="Bdlg#/Street/Brgy/City" name="ammend[address]" id="owneradd">
										</div>
										<div class="form-group col-md-4">
											<label>House No./Bldg. No.</label>
											<input type="number" class="form-control " name="ammend[owner_houseno]"  id="ownerhouseno">
										</div>
										<div class="form-group col-md-4">
											<label>Building Name</label>
											<input type="text" class="form-control " name="ammend[owner_bldgname]"  id="ownerbldg">
										</div>
									</div>

									<div class="form-row">
										<div class="form-group col-md-4">
											<label>Unit No.</label>
											<input type="number" class="form-control " name="ammend[owner_unit]" id="ownerunit">
										</div>
										<div class="form-group col-md-4">
											<label>Street</label>
											<input type="text" class="form-control " name="ammend[owner_street]" id="ownerstreet">
										</div>
										<div class="form-group col-md-4">
											<label>Barangay</label>
											<input type="text" class="form-control " name="ammend[owner_barangay]" id="ownerbrgy">
										</div>
									</div>

									 <div class="form-row">
										<div class="form-group col-md-4">
											<label>Subdivision</label>
											<input type="text" class="form-control " name="ammend[owner_subdivision]" id="ownersubd">
										</div>

										<div class="form-group col-md-4">
											<label>City/Municipality </label>
											<input type="text" class="form-control " name="ammend[owner_city]" Placeholder = "San Pablo" value = "San Pablo" disabled>
										</div>

										<div class="form-group col-md-4">
											<label>Province</label>
											<input type="text" class="form-control " name="ammend[owner_province]" placeholder ="Laguna" value = "San Pablo" disabled>
										</div>
									</div>
									 <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Postal Code</label>
									      <input type="number" class="form-control postcode" name="ammend[owner_postcode]" id="ownerpostal">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Email Address</label>
									      <input type="email" class="form-control" name="ammend[owner_email]" id="owneremail">
									    </div>
										</div>

									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <label>Telephone</label>
									        <input class="form-control tel" type="tel" name="ammend[owner_tel_no]" placeholder="539-966" id="ownertel">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Mobile No.</label>
									        <input class="form-control mobile" type="tel" name="ammend[owner_mobile]" placeholder="09XX XXX XXXX" id="ownermobil">
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
                        <label ></label>
									      <input type="text" class="form-control" name="ammend[lessor_last_name]" placeholder="Last Name" id="lessor_lname">
									    </div>
									    <div class="form-group col-md-4 ">
									      <label ></label>
									      <input type="text" class="form-control" name="ammend[lessor_first_name]" placeholder="First Name" id="lessor_fname">
									    </div>
									    <div class="form-group col-md-4 ">
									      <label></label>
									      <input type="text" class="form-control" name="ammend[lessor_middle_name]" placeholder="Middle Name" id="lessor_mname">
									    </div>
									  </div>

                  <div class="form-row">
                    <div class="form-group col-md-8">
                      <label>Lessor'Full Address</label>
                      <input type="text" class="form-control " name="ammend[lessor_address]" placeholder="Bdlg#/Street/Brgy/City" id="lessor_add">
                      <!-- <textarea type="text" class="form-control" name="app[lessor_address]" placeholder="Bdlg#/Street/Brgy/City" rows="2"></textarea> -->
                    </div>
                    <div class="form-group col-md-4">
                      <label>Monthly Rental</label>
                        <input class="form-control money" type="text" name="ammend[lessor_monthly_rental]" placeholder="" id="lessor_mosrental">
                    </div>
                  </div>

									  <div class="form-row">
									    <div class="form-group col-md-4">
									      <label>Telephone</label>
									        <input class="form-control" type="tel" name="ammend[lessor_tel_no]" placeholder="539-1234 / 09123456789" id="lessor_telno">
									    </div>
                      <div class="form-group col-md-4">
                        <label>Mobile No.</label>
                          <input class="form-control" type="text" name="ammend[lessor_mobile]" placeholder="" id="lessor_mobile">
                      </div>
									    <div class="form-group col-md-4">
									      <label>Email Address</label>
									        <input class="form-control" type="email" name="ammend[lessor_email]" placeholder="Email Address" id="lessor_email">
									    </div>
									  </div>

                    <div id ='naturebuss'>
  							      <p align="center"><b>BUSINESS ACTIVITY</b></p>
  							     <div class="form-row">
                      <!-- <div class="form-group col-md-3">
                        <label >Line of Business</label>
                        <input type="text" class="form-control" name="ammend[buss_line]" placeholder="" id ="ammendbussline">
                      </div>
                      <div class="form-group col-md-3">
                        <label >Code of Business</label>
                        <input type="text" class="form-control" name="ammend[buss_line_code]" placeholder="" id ="ammendbusscode">
                      </div> -->

                      <div class="form-group col-md-3">
                        <label >Line of Business</label>
                        <select class="form-control buss_line addlinebuss" name="app[buss_line]" id="addline">
                        <option  value=" ">Line of Business</option>
                        <?php
                        $linebuss = array("Manufacturers", "Wholesalers, distributors, or dealers", "Retailers", "Food","Contractors","Banks and other financial institutions","Lease","Lessor of real property","Tobacco dealers","Dealers of Liquors","Amusement Places and Devices","Theater and Cinema","Other business");
                        foreach($linebuss as $linebus){
                        ?>
                         <option value="<?php echo strtolower($linebus); ?>"  id="ammendbuss_line"><?php echo $linebus; ?></option>
                        <?php
                        }
                        ?>
                        </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for='fname'>Code</label>
                            <select class="form-control buss_line addcodeline" name="app[buss_line_code]" id="addcode">
                              <option value="" id="ammendbuss_code">Code of Business</option>
                            </select>
                          </div>

                      <div class="form-group col-md-3">
                        <div class="md-form">
                          <label for="addsubcat">Sub Category</label>
                          <input type="text"  name="ammend[sub_category]" class="form-control" id ="ammendsubcategory">
                        </div>
                      </div>
                      <!-- NOTE: added inputfield no.units -->

                      <div class="form-group col-md-3">
                        <label >Unit's No.</label>
                        <input type="number" class="form-control" name="ammend[no_units]" id="ammendno_units">
                      </div>
                      </div>


                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label >Essentials</label>
                          <input type="text" id="ammend_essen" class="form-control money" name="ammend[essential]"  >
                        </div>
                        <div class="form-group col-md-3">
                          <label >Non Essentials</label>
                          <input type="text" id="ammendno_nonessen" class="form-control money" name="ammend[non_essential]"  >
                        </div>
                        <div class="form-group col-md-3">
                          <label>Capitalization</label>
                          <input type="text" name="ammend[capitalization]" class="form-control money" id="ammendcapitalization">
                          <input type="hidden" name="ammend[bussline_id]" class="form-control " id="ammendbusslineid">
                          <!-- <input type="hidden" id="" name="app[ranks]" class="form-control" value="secondary"> -->
                        </div>
                      </div>
                      <!-- <div align="center">
                        <button type="submit" class="btn btn-primary btn-md mb-4" id ="save_ammends">Save</button>
                      </div> -->

              </div>
            </div>
            </form>

            </div>

            <div class="mt-4" align="left">
                <a href ="/bploform" class="btn btn-primary btn-md p-2">Back to User's Profile</a>
            </div>

<!-- ////formmm -->
@endsection
