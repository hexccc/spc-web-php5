@extends('layouts.admin')
@section('title', 'Events and Announcements')

@section('admincontent')



<div class="container-fluid">
  <div class="container p-5">
    <div class="row">

        <div class="card">

          <div class="card-body">
            
            <h3 class="mt-0 font-weight-bold" style="color:3490DC;">MISSION</h3>

            <textarea name="matext" id="missionarea" cols="100" rows="10"></textarea>


          </div>

          <div class="card-footer">

           <button href="#/updatemission" class="btn btn-success text-right font-weight-bold p-2  align-baseline align-text-bottom " >Update Mission</button>
    

          </div>
          
        </div>


    </div>
  </div>
</div>

<script>

</script>

<script src="/js/mission.js"></script>
@include('inc.admin-modal')
@include('inc.modals')
@stop