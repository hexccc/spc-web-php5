@extends('layouts.app')

@section('content')
<div class="col-md-10 offset-md-1 p-4">

	<!-- //////BPLO MODALS ALERT -->
  <div class="jumbotron">
    <h1 class="display-4">BPLO FORM
      <span><img class="align-middle float-right " src="{{URL::asset('svg/ubilis 1.0.svg')}}" style="height:85px"></span>
    </h1>


        <div class="form-group col-md-12">
          <select class = "form-control w-50 mb-3">
            <option id ="buss_name">Businesses</option>
          </select>
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
      <a class="btn btn-primary btn-lg" href="#" onclick="logout()" role="button">Log Out</a>
    </p>
  </div>

</div>

@endsection
