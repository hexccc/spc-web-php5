@extends('layouts.app')

@section('content')

<div class="col-md-10 offset-md-1 p-4">



  <div class="modal fade" id="renewal_form" tabindex="-1" aria-labelledby="" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header float-none">
          <h4 id="Renewal">Renewal</h4>
          <button class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="">
            <p align="center"><b></b></p>
          </div>

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

          <table id="" class="table table-sm table-striped table-bordered">
            <thead>
              <tr>
                <th colspan="2" class="w-100 text-align-center">BASIC INFORMATION</th>
              </tr>
            </thead>

              <tr colspan="2">
                <td>Mode of Payment <span id="modepayment"></span> </td>
                <td></td>
              </tr>
              <tr class = "w-50">
                <td>Date Application <span id="date_application"></span> </td>
                <td>DTI/SEC/CDA Registration Date<span id="dti_sec"></span></td>
              </tr>
              <tr class = "w-50">
                <td>Reference No.<span id="reference"></span> </td>
                <td>DTI/SEC/CDA Number<span id="dti_sec_no"></span> </td>
              </tr>
              <tr class = "w-50">
                <td>Type of Business<span id="busstype"></span> </td>
                <td>TIN no.<span id="tin_no"></span></td>
              </tr>
              <tr class = "w-50">
                <td>Amendment from<span id="ammendfrom"></span></td>
                <td>Amendment to<span id="ammento"></span> </td>
              </tr>
            </table>

            <table id="" class="table table-sm table-striped table-bordered">
            <thead>
              <tr>
                <th colspan="2" class="w-100 text-align-center">Name of Taxpayer / Registrant</th>
              </tr>
            </thead>
              <tr>
                <td>Name of Taxpayer<span id="taxpayer_name"></span></td>
                <td>Business Name<span id="busisness_name"></span></td>
              </tr>
              <tr>
                <td>Trade Name/Franchise<span id="franchise"></span> </td>
                <td>Name of President/Treasurer of Corporation<span id="pres_tres"></span> </td>
              </tr>
            </table>

        <table id="" class="table table-sm table-striped table-bordered">
              <thead>
                <tr>
                  <th colspan="4" class="w-100 text-align-center">OTHER INFORMATION</th>
                </tr>
              </thead>
              <tr>
                <td>Business Address<span id="buss_address"></span> </td>
                <td>Postal Code<span id="buss_postal"></span></td>
              </tr>
              <tr>
                <td>Email Address<span id="buss_email"></span> </td>
                <td>Telephone<span id="buss_tel"></span> </td>
              </tr>
              <tr colspan = "2">
                <td>Mobile No. <span id="buss_mobile"></span> </td>
                <td></td>
              </tr>
          </table>

          <table id="" class="table table-sm table-striped table-bordered">
              <thead>
                <tr>
                  <th colspan="2" class="w-100 text-align-center">OWNER INFORMATION</th>
                </tr>
              </thead>
              <tr>
                <td>Owner's Name<span id="owner_name"></span></td>
                <td>owner's Address<span id="owner_address"></span> </td>
              </tr>
              <tr>
                <td>Email Address<span id="owner_email"></span> </td>
                <td>Telephone<span id="owner_tel"></span></td>
              </tr>
              <tr>
                <td>Mobile No.<span id="owner_mobile"></span> </td>
                <td></td>
              </tr>
            </table>

            <table id="" class="table table-sm table-striped table-bordered">
              <tr>
                <td>No. of Employees Residing<span id="owner_emp"></span> </td>
                <td>Business Area<span id="owner_area"></span></td>
              </tr>
              <tr>
                <td>Total Employee  in Establishment:<span id="total_emp"></span></td>
                <td>Unit of Service Vehicle<span id="owner_unit"></span> </td>
              </tr>
            </table>


          <table id="lessors" class="table table-sm table-striped table-bordered">
              <thead>
                <tr>
                  <th colspan="2" class="w-100 text-align-center">LESSOR's INFORMATION</th>
                </tr>
              </thead>
              <tr>
                <td>Lessor's Name<span id="lessor_name"></span></td>
                <td>Lessor's Address<span id="lessor_address"></span> </td>
              </tr>
              <tr>
                <td>Monthly Rental<span id="monthly_rental"></span> </td>
                <td>Email Address<span id="lessor_email"></span> </td>
              </tr>
              <tr>
                <td>Telephone<span id="lessor_tel"></span></td>
                <td>Mobile No.<span id="lessor_mobile"></span> </td>
              </tr>
              <tr>
                <td>In case of emergency Contact Person<span id="lessor_emerg"></span> </td>
                <td>Contact No./ Email Address <span id="emerg_contact"></span> </td>
              </tr>
          </table>


          <table id="" class="table table-sm table-striped table-bordered">
              <thead>
                <tr>
                  <th colspan="5" class="w-100 text-align-center">Gross Sales/Receipts(For Renewal)</th>
                </tr>
              </thead>
              <tr>
                <td>Automatic Gross</td>
                <td> <input type="checkbox" class="form-check-input" id="auto-gross"></td>
              </tr>
              <tr>
                <td> <input type="text" placeholder="Essentials" name="gross[essential]" id="" class=" form-control" required/></td>
                <td> <input type="text" placeholder="Non-Essentials" name="gross[non-essential]" id="" class=" form-control" required/></td>
              </tr>
              <tr>
                <td><span id="essentials"></span></td>
                <td><span id="non_essentials"></span></td>
              </tr>

            </table>

          <table id="" class="table table-sm table-striped table-bordered">
              <thead>
                <tr>
                  <th colspan="5" class="w-100 text-align-center">BUSINESS ACTIVITY</th>
                </tr>
              </thead>
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


            <!-- <div class="form-row">
            <div class="form-group col-md-2">
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
                <label for='fname'>Code</label>
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

            <div class="form-group col-md-1">
              <label >Unit's No.</label>
              <input type="number" id="addunits" class="form-control" name="app[no_units]" placeholder="">
            </div>

            <div class="form-group col-md-2">
              <label >Essentials</label>
              <input type="number" id="addessen" class="form-control" name="app[essentials]" placeholder="">
            </div>
            <div class="form-group col-md-2">
              <label >Non Essentials</label>
              <input type="number" id="addnonessen" class="form-control" name="app[non_essentials]" placeholder="">
            </div>
            <div class="form-group col-md-1">
              <label>Capitalization</label>
              <input type="text" id="addcap" name="app[capitalization]" class="form-control money">
               <input type="hidden" id="" name="app[ranks]" class="form-control" value="secondary">
            </div>
            </div> -->

              <table id="addnewline" class="table table-sm table-striped table-bordered">
              <thead>
                <tr>
                  <th colspan="8" class="w-100 text-align-center"> ADDITIONAL LINE OF BUSINESS</th>
                </tr>
              </thead>
              <tr>

                <th>Line of Business</th>
                <th>Code</th>
                <th>Date added</th>
                <th>Sub Category</th>
                <th>Essential</th>
                <th>Non Essential</th>
                <th>Capitalization</th>
                <!-- <td>Status</td> -->

              </tr>
              <tbody id ="add_bussline">
              </tbody>


          </table>
          <a class="btn btn-info" href="" >Submit</a>
        </div>
      </div>
    </div>
  </div>



	<!-- //////BPLO MODALS ALERT -->
  <div class="jumbotron">
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

          <table id="addnewline" class="table table-sm table-striped table-bordered">
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
      <button class="btn btn-primary btn-lg" id="btn_ammends" role="button">Change Details</button>

      <a class="btn btn-primary btn-lg" href="#" onclick="logout()" role="button">Log Out</a>
    </p>
  </div>

</div>

@endsection
