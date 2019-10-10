@extends('layouts.admin')
@section('title', 'Events and Announcements')

@section('admincontent')


<div class="container-fluid">
<div class="container p-5">
<div class="row">
  <div class="container">
    <button href="#" class="btn btn-success text-right font-weight-bold p-2  align-baseline align-text-bottom" data-toggle="modal" data-target="#inputHoliday">Add Holiday</button>
  </div>

<div class="container card py-4">
  <table id="tb_holidays" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Greetings</th>
                  <th>Date</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>

          </tbody>
          <tfoot>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Greetings</th>
                <th>Date</th>
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
