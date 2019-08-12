@extends('layouts.app')

@section('content')
<div class="col-md-10 offset-md-1 p-4">

	<!-- //////BPLO MODALS ALERT -->
  <div class="jumbotron">
    <h1 class="display-4">BPLO FORM
      <span><img class="align-middle float-right " src="{{URL::asset('svg/ubilis 1.0.svg')}}" style="height:85px"></span>
    </h1>

    <p>Business Name:</p>
    <p>Business No.:</p>
    <p>Owner's Name:</p>
    <p>Mainline of Business:</p>
    <p>Date of Payment:</p>
    <p>Date Approved:</p>

    <hr class="my-4">
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="{{url('form')}}" role="button">Request Form</a>
    </p>
  </div>

</div>

@endsection
