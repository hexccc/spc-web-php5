@extends('layouts.admin')
@section('title', 'SPC Covid 19 Data')

@section('admincontent')


<div class="container-fluid">
<div class="container p-5">
<div class="row">
  <div class="container">
    <button href="#" class="btn btn-success text-right font-weight-bold p-2  align-baseline align-text-bottom" data-toggle="modal" data-target="#inputnews">Today's Case</button>
  </div>

<div class="container card py-4">
  <table id="covid_data_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Active Case</th>
                  <th>Recoveries</th>
                  <th>Death</th>
                  <th>Publish Date</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>

          </tbody>
          <tfoot>
              <tr>
                <th>Active Case</th>
                <th>Recoveries</th>
                <th>Death</th>
                <th>Publish Date</th>
                <th>Action</th>
              </tr>
          </tfoot>
      </table>
</div>
</div>
</div>
</div>
@include('inc.admin-modal')
@include('inc.modals')
@stop
