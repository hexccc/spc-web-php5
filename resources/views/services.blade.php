@extends('layouts.admin')
@section('title', 'Events and Announcements')

@section('admincontent')


<div class="col container-fluid p-0">
<div class="container py-5">

  <div class="container">
    <button href="#" class="btn btn-success text-right font-weight-bold p-2  align-baseline align-text-bottom" data-toggle="modal" data-target="#inputService">Add Service</button>
  </div>

<div class="container card py-4">
  <table id="tb_services" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Link</th>
                  <th >Created_at</th>
                  <th >Updated_at</th>
                  <th >Action</th>
              </tr>
          </thead>
          <tbody>

          </tbody>
          <tfoot>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Link</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
              </tr>
          </tfoot>
      </table>
</div>
</div>
</div>

@include('inc.admin-modal')
@include('inc.modals')
@stop
