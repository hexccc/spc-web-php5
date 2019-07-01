@extends('layouts.admin')
@section('title', 'News Editor')

@section('admincontent')


<div class="container-fluid">
<div class="container p-5">
<div class="row">
  <div class="container">
    <button href="#" class="btn btn-success text-right font-weight-bold font-italic p-2  align-baseline align-text-bottom" data-toggle="modal" data-target="#updatenewsmodal">Notif</button>
    <button href="#" class="btn btn-warning text-right font-weight-bold font-italic p-2  align-baseline align-text-bottom" data-toggle="modal" data-target="#newsdelete">Delete</button>

  </div>

<button href="#" class="btn btn-success text-right font-weight-bold font-italic p-2  align-baseline align-text-bottom" data-toggle="modal" data-target="#inputnews">Create News</button>

<div class="container">
  <table id="tb_news" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Publish Date</th>
                  <th>Updated Date</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
          
          </tbody>
          <tfoot>
              <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
              </tr>
          </tfoot>
      </table>
</div>
</div>
</div>
</div>
@include('inc.modals')
@stop
