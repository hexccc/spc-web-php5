@extends('layouts.app')

@section('content')

<div class="col-md-10 offset-md-1 p-4">



  <div class="modal fade" id="renewal_form" tabindex="-1" aria-labelledby="" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header float-none">
          <h3 id="Renewal" class="mt-2">Renewal</h4>
          <button class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- <div class="">
            <div class="form-check-inline mb-4">
              <label class="">Mode of Payment:
                 <input type="radio" class="form-check-input" value="Annually" name="renew[mud_payment]" checked>Annually
              </label>
            </div>
            <div class="form-check-inline">
             <label class="form-check-label">
               <input type="radio" class="form-check-input" value="Semi-Annually" name="renew[mud_payment]" disabled>Semi-Annually
             </label>
            </div>
            <div class="form-check-inline disabled">
             <label class="form-check-label">
               <input type="radio" class="form-check-input" value="Quarterly" name="renew[mud_payment]" disabled>Quarterly
             </label>
            </div>
          </div> -->
          <div class="">
            <p align="left"><b>BASIC INFORMATION</b></p>
          </div>

          <table id="" class="table table-sm table-bordered table_renew">
              <tr colspan="2">
                <td>Mode of Payment <i><span id="modepayment"></span></i> </td>
                <td></td>
              </tr>
              <tr class = "">
                <td>Date Application <i><span id="date_application"></span></i> </td>
                <td>DTI/SEC/CDA Registration Date<i><span id="dti_sec"></span></i></td>
              </tr>
              <tr class = "">
                <td>Reference No.<i><span id="reference"></span></i> </td>
                <td>DTI/SEC/CDA Number<i><span id="dti_sec_no"></span></i> </td>
              </tr>
              <tr class = "">
                <td>Type of Business<i><span id="busstype"></span></i> </td>
                <td>TIN no.<i><span id="tin_no"></span></i></td>
              </tr>
              <tr class = "">
                <td>Amendment from<i><span id="ammendfrom"></span></i></td>
                <td>Amendment to<i><span id="ammento"></span></i> </td>
              </tr>
            </table>

            <table id="" class="table table-sm table-bordered table_renew">

              <tr>
                <td>Name of Taxpayer<i><span id="taxpayer_name"></span></i></td>
                <td>Business Name<i><span id="busisness_name"></span></i></td>
              </tr>
              <tr>
                <td>Trade Name/Franchise<i><span id="franchise"></span></i> </td>
                <td>Name of President/Treasurer of Corporation<i><span id="pres_tres"></span></i> </td>
              </tr>
            </table>

            <hr class = "mt-4">

            <div class="">
              <p align="left"><b>OTHER INFORMATION</b></p>
            </div>
            <label>BUSINESS INFORMATION</label>

        <table id="" class="table table-sm table-bordered table_renew">

              <tr>
                <td>Business Address<i><span id="buss_address"></span></i> </td>
                <td>Postal Code<i><span id="buss_postal"></span></i></td>
              </tr>
              <tr>
                <td>Email Address<i><span id="buss_email"></span></i> </td>
                <td>Telephone<i><span id="buss_tel"></span></i> </td>
              </tr>
              <tr colspan = "2">
                <td>Mobile No. <i><span id="buss_mobile"></span></i> </td>
                <td></td>
              </tr>
          </table>

          <div class="">
            <p align="left">OWNER INFORMATION</p>
          </div>
          <table id="" class="table table-sm table-bordered table_renew">

              <tr>
                <td>Owner's Name<i><span id="owner_name"></span></i></td>
                <td>owner's Address<i><span id="owner_address"></span></i> </td>
              </tr>
              <tr>
                <td>Email Address<i><span id="owner_email"></span></i> </td>
                <td>Telephone<i><span id="owner_tel"></span></i></td>
              </tr>
              <tr>
                <td>Mobile No.<i><span id="owner_mobile"></span></i> </td>
                <td></td>
              </tr>
            </table>

            <table id="" class="table table-sm table-bordered table_renew">
              <tr>
                <td>No. of Employees Residing<i><span id="owner_emp"></span></i> </td>
                <td>Business Area<i><span id="owner_area"></span></i></td>
              </tr>
              <tr>
                <td>Total Employee  in Establishment:<i><span id="total_emp"></span></i></td>
                <td>Unit of Service Vehicle<i><span id="owner_unit"></span></i> </td>
              </tr>
            </table>

            <div class ="" id="lessors">
            <div class="">
              <p align="left">LESSOR'S INFORMATION</p>
            </div>
          <table id="" class="table table-sm table-bordered table_renew">
              <tr>
                <td>Lessor's Name<i><span id="lessor_name"></span></i></td>
                <td>Lessor's Address<i><span id="lessor_address"></span></i> </td>
              </tr>
              <tr>
                <td>Monthly Rental<i><span id="monthly_rental"></span></i> </td>
                <td>Email Address<i><span id="lessor_email"></span></i> </td>
              </tr>
              <tr>
                <td>Telephone<i><span id="lessor_tel"></span></i></td>
                <td>Mobile No.<i><span id="lessor_mobile"></span></i> </td>
              </tr>
              <tr>
                <td>In case of emergency Contact Person<i><span id="lessor_emerg"></span></i> </td>
                <td>Contact No./ Email Address <i><span id="emerg_contact"></span></i> </td>
              </tr>
          </table>
        </div>

        <hr class = "mt-4">
          <!-- <table id="" class="table table-sm table-bordered table_renew">
              <tr>
                <td>Automatic Gross</td>
                <td> <input type="checkbox" class="form-check-input" id="auto-gross"></td>
              </tr>
              <tr>
                <td> <input type="text" placeholder="Essentials" name="gross[essential]" id="" class=" form-control" /></td>
                <td> <input type="text" placeholder="Non-Essentials" name="gross[non-essential]" id="" class=" form-control" /></td>
              </tr>
              <tr>
                <td><span id="essentials"></span></td>
                <td><span id="non_essentials"></span></td>
              </tr>
            </table> -->


            <div class="">
              <p align="left"><b>BUSINESS ACTIVITY</b></p>
            </div>
          <table id="" class="table table-responsive table-sm table-bordered ">

              <tr>
                <td>Line of Business</td>
                <td>Code</td>
                <td>Sub Category</td>
                <td>No. Units</td>
                <td>Capitalization</td>
              </tr>
              <tr id ="business_act">
                <!-- -->
              </tr>
            </table>

            <div class="">
              <p align="left"><b>GROSS SALES/RECEIPTS(For Renewal)</b></p>
              <div class ="form-row">
                <input type="text" name="renew[buss_curr_gross]" id="curr_gross" class=" form-control money" />
                <input type="hidden" name="renew[msg]" id="" class=" form-control " />
              </div>
            </div>

            <hr class = "mt-4">

            <div class="">
              <p align="left"><b>ADDITIONAL LINE OF BUSINESS</b></p>
            </div>
            <button data-toggle="collapse" data-target="#add_line_col" >Add Line of Business</button>

            <div class = "container">
            <div id="add_line_col" class="collapse m-3 p-2 pb-5 border">
            <div class="form-row">
            <div class="form-group col-md-3 col-sm-12">
              <label >Line of Business</label>
              <select class="form-control addlinebuss" name="renew[buss_line]" id="addline">
              <option selected value=" ">Line of Business</option>
              <?php
              $linebuss = array("Manufacturers", "Wholesalers, distributors, or dealers", "Retailers", "Food","Contractors","Banks and other financial institutions","Lease","Lessor of real property","Tobacco dealers","Dealers of Liquors","Amusement Places and Devices","Theater and Cinema","Other business");
              foreach($linebuss as $linebus){
              ?>
               <option value="<?php echo strtolower($linebus); ?>" id = "renewbussline"><?php echo $linebus; ?></option>
              <?php
              }
              ?>
              </select>
              </div>
              <div class="form-group col-md-3 col-sm-12">
                <label for='fname'>Code</label>
                  <select class="form-control" name="renew[buss_line_code]" id="addcode">
                    <option selected value="" id="renewbusscode">Code of Business</option>
                  </select>
                </div>
            <div class="form-group col-md-3 col-sm-12">
              <div class="md-form">
                <label for="addsubcat">Sub Category</label>
                <input type="text" id="addsubcat" name="renew[sub_category]" class="form-control">
              </div>
            </div>
            <div class="form-group col-md-3 col-sm-12">
              <label >Unit's No.</label>
              <input type="number" id="addunits" class="form-control" name="renew[no_units]" placeholder="">
            </div>
            </div>
            <div class = "form-row">
            <div class="form-group col-md-3 col-sm-12">
              <label >Essentials</label>
              <input type="text" id="addessen" class="form-control money" name="renew[essentials]" placeholder="">
            </div>
            <div class="form-group col-md-3 col-sm-12">
              <label >Non Essentials</label>
              <input type="text" id="addnonessen" class="form-control money" name="renew[non_essentials]" placeholder="">
            </div>
            <div class="form-group col-md-3 col-sm-12">
              <label>Capitalization</label>
              <input type="text" id="addcap" name="renew[capitalization]" class="form-control money">
              <input type="hidden" id="renewuserid" name="renew[userid]" class="form-control">
              <input type="hidden" id="renewbusslineid" name="renew[busslineid]" class="form-control">
              <input type="hidden" id="renewlineid" name="renew[line_id]" class="form-control">
              <input type="hidden" id="renewuplineid" name="renew[upline_id]" class="form-control">
              <input type="hidden" id="renewbussid" name="renew[buss_id]" class="form-control">
              <input type="hidden" id="renewranks" name="renew[upranks]" class="form-control">
              <input type="hidden" id="renewupdatedby" name="renew[updated_by]" class="form-control">
            </div>
          </div>

              <table id="addnewline" class="table table-responsive table-sm table-striped table-bordered w-100">
                <thead>
                  <tr>
                    <td scope="col">Line of Business</td>
                    <td scope="col">Code</td>
                    <td scope="col">Sub Category</td>
                    <td scope="col">Unit's no.</td>
                    <td scope="col">Essentials</td>
                    <td scope="col">Non Essentials</td>
                    <td scope="col">Capitalization</td>
                    <td scope="col">Action</td>
                  </tr>
                </thead>
                </tbody>
              </table>

              <input type="button" class="btn btn-primary btn-md float-right mb-3"  name="button" id ="addlineaddRowRenew" value="Add">
            </div>
            </div>

              <table id="addnewline" class="table table-responsive table-sm table-bordered mt-4" >
              <tr>
                <td>Line of Business</td>
                <td>Code</td>
                <td>Sub Category</td>
                <td>Unit's No</td>
                <td>Essential</td>
                <td>Non Essential</td>
                <td>Capitalization</td>
                <td>Action</td>
                <!-- <td>Status</td> -->
              </tr>
              <tbody id ="add_bussline">
              </tbody>
          </table>


          <div id="edit_bussline" class="collapse m-3 p-2 pb-5 border">
          <div class="form-row">
          <div class="form-group col-md-3 col-sm-12">
            <label >Line of Business</label>

            <select class="form-control addlinebuss1 renewbuss_line" name="renew[buss_line]" id="addline1">
            <option value=" ">Line of Business</option>
            <?php
            $linebuss = array("Manufacturers", "Wholesalers, distributors, or dealers", "Retailers", "Food","Contractors","Banks and other financial institutions","Lease","Lessor of real property","Tobacco dealers","Dealers of Liquors","Amusement Places and Devices","Theater and Cinema","Other business");
            foreach($linebuss as $linebus){
            ?>
             <option value="<?php echo strtolower($linebus); ?>" ><?php echo $linebus; ?></option>
            <?php
            }
            ?>
            </select>
            </div>
            <div class="form-group col-md-3 col-sm-12">
              <label for='fname'>Code</label>
                <select class="form-control renewbuss_code" name="" id="addcode1">
                  <option selected value=""  name = "renew[buss_code]">Code of Business</option>
                </select>

              </div>
          <div class="form-group col-md-3 col-sm-12">
            <div class="md-form">
              <label for="addsubcat">Sub Category</label>
              <input type="text" id="addsubcat" name="renew[subcat]" class="form-control">
            </div>
          </div>
          <div class="form-group col-md-3 col-sm-12">
            <label >Unit's No.</label>
            <input type="number" id="addunits" class="form-control" name="renew[no_unt]" placeholder="">
          </div>
          </div>
          <div class = "form-row">
          <div class="form-group col-md-3 col-sm-12">
            <label >Essentials</label>
            <input type="text" id="addessen" class="form-control money" name="renew[essen]" placeholder="">
          </div>
          <div class="form-group col-md-3 col-sm-12">
            <label >Non Essentials</label>
            <input type="text" id="addnonessen" class="form-control money" name="renew[non_essen]" placeholder="">
          </div>
          <div class="form-group col-md-3 col-sm-12">
            <label>Capitalization</label>
            <input type="text" id="editcap" name="renew[capital]" class="form-control money">
            <input type="hidden" id="renewuserid" name="renew[userid]" class="form-control">
            <input type="hidden" id="renewbusslineid" name="renew[busslineid]" class="form-control">
            <input type="hidden" id="renewbussid" name="renew[bussid]" class="form-control">
          </div>
         </div>
            <input type="button" class="btn btn-primary btn-md float-right mb-3" id="close_edtbussline" value="Close">
            <input type="button" class="btn btn-primary btn-md float-right mb-3 mr-2"  name="button" id ="editbussline" value="Save Changes">
          </div>
          <button type="button" class="btn btn-info float-right" href="" id ="submit_renewal">Submit</button>

        </div>
      </div>
    </div>
  </div>



	<!-- //////BPLO MODALS ALERT -->
  <div class="jumbotron ">
    <h1 class="display-4">BPLO FORM
      <span><img class="align-middle float-right " src="{{URL::asset('svg/ubilis 1.0.svg')}}" style="height:85px"></span>
    </h1>

        <div class="form-group col-md-12">
          <input type ="hidden" id="buss_id">
          <!-- <input type="button" class="btn btn-primary btn-md"  id ="formrenew" value = "Renew" role="button"> -->
          <div class= "form-row mb-3">
            <select class = "form-control w-50 mr-2 buss_list" id ="buss_list"></select>
            <button class="btn btn-primary btn-md" id="btn_renewal" role="button">Renewal</button>
          </div>

          <table id="addnewline" class="table  table-sm table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col" class="w-50">Business Information</th>
                <th scope="col" class="w-50">Business Profile</th>
              </tr>
            </thead>
            <tbody id="">
              <tr>
                <td>Business Name <span id="buss_name"></span> </td>
                <td>Date Approved <span id="date_approve"></span> </td>
              </tr>
              <tr>
                <td>Owner's Name <span id="owner_name"></span> </td>
                <td>Date of Payment <span id="date_payment"></span> </td>
              </tr>
              <tr>
                <td>Business ID <span id="buss_code"></span> </td>
                <td></td>
              </tr>
              <td>Main Line of Business <span id="buss_line"></span> </td>
              <td></td>
              </tr>

            </tbody>
          </table>
        </div>
    <hr class="my-4">
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="{{url('form')}}" role="button">Apply Now</a>
      <a class="btn btn-primary btn-lg" href="https://www.landbank.com" role="button">Pay Now</a>
      <!-- <a class="btn btn-primary btn-lg" href="{{url('ammendments')}}" role="button">Change Details</a> -->
      <button class="btn btn-primary btn-lg" id="btn_ammends" role="button">Amendments</button>

      <a class="btn btn-primary btn-lg" href="#" onclick="logout()" role="button">Log Out</a>
    </p>
  </div>

</div>

@endsection
