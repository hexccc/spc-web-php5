@extends('layouts.admin')
@section('title', 'News Editor')

@section('admincontent')


<div class="container-fluid">
<div class="container p-5">
<div class="row">
  <div class="container">
    <button href="#" class="btn btn-success text-right font-weight-bold font-italic p-2  align-baseline align-text-bottom" onclick="notif()">Notif</button>

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
            @foreach($users as $user)
              <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->title }}</td>
                  <td>{{ $user->subtitle }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>{{ $user->updated_at }}</td>
                  <td>
                    <button type="button" class="btn btn-primary" name="button">
                      Sample View
                    </button>
                  </td>
              </tr>
            @endforeach
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
<script type="text/javascript">


function notif() {
  setTimeout(function() {
                   $.bootstrapGrowl("Danger, Danger!", {
                       type: 'danger',
                       align: 'center',
                       width: 'auto',
                       allow_dismiss: true
                   });
               }, 2000);


}

$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
@stop
