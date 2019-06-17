@extends('layouts.app')
@section('title', 'Barangays')
@section('content')
  <div class="col-md-10 offset-md-1 pt-4">
    <h3 class="text-white p-2 mt-4">
      Barangays
    </h3>
    <div class="row">
      <div class="col-md-6">
        <div id="accordion">
          <div class="card">
           <div class="card-header">
             <a class="collapsed card-link" data-toggle="collapse" href="#districtOne">
               DISTRICT 1
             </a>
           </div>
           <div id="districtOne" class="collapse" data-parent="#accordion">
             <div class="col-md-12 my-2">
               @foreach ($brgys as $ls)
                 @if ($ls->brgy_district == "1")
                   <button
                      class="btn btn-primary btn-block"
                      type="button"
                      data-toggle="modal"
                      data-target="#modalBrgy"
                      data-title="{{$ls->brgy_name}}"
                      data-chairman="{{$ls->brgy_chairman}}"
                      data-contact="{{$ls->brgy_contact}}"
                      data-code="{{$ls->brgy_code}}">
                     {{ $ls->brgy_name }}
                   </button>
                 @endif
               @endforeach
             </div>
           </div>
          </div>

          <div class="card">
           <div class="card-header">
             <a class="collapsed card-link" data-toggle="collapse" href="#districtThree">
              DISTRICT 3
             </a>
           </div>
           <div id="districtThree" class="collapse" data-parent="#accordion">
             <div class="col-md-12 my-2">
               @foreach ($brgys as $ls)
                 @if ($ls->brgy_district == "3")
                   <button
                      class="btn btn-primary btn-block"
                      type="button"
                      data-toggle="modal"
                      data-target="#modalBrgy"
                      data-title="{{$ls->brgy_name}}"
                      data-chairman="{{$ls->brgy_chairman}}"
                      data-contact="{{$ls->brgy_contact}}"
                      data-code="{{$ls->brgy_code}}">
                     {{ $ls->brgy_name }}
                   </button>
                 @endif
               @endforeach
            </div>
           </div>
          </div>
          <div class="card">
           <div class="card-header">
             <a class="collapsed card-link" data-toggle="collapse" href="#districtFive">
               DISTRICT 5
             </a>
           </div>
           <div id="districtFive" class="collapse" data-parent="#accordion">
             <div class="col-md-12 my-2">
               @foreach ($brgys as $ls)
                 @if ($ls->brgy_district == "5")
                   <button
                      class="btn btn-primary btn-block"
                      type="button"
                      data-toggle="modal"
                      data-target="#modalBrgy"
                      data-title="{{$ls->brgy_name}}"
                      data-chairman="{{$ls->brgy_chairman}}"
                      data-contact="{{$ls->brgy_contact}}"
                      data-code="{{$ls->brgy_code}}">
                     {{ $ls->brgy_name }}
                   </button>
                 @endif
               @endforeach
            </div>
           </div>
          </div>
          <div class="card">
           <div class="card-header">
             <a class="collapsed card-link" data-toggle="collapse" href="#districtSeven">
               DISTRICT 7
             </a>
           </div>
           <div id="districtSeven" class="collapse" data-parent="#accordion">
             <div class="col-md-12 my-2">
               @foreach ($brgys as $ls)
                 @if ($ls->brgy_district == "7")
                   <button
                      class="btn btn-primary btn-block"
                      type="button"
                      data-toggle="modal"
                      data-target="#modalBrgy"
                      data-title="{{$ls->brgy_name}}"
                      data-chairman="{{$ls->brgy_chairman}}"
                      data-contact="{{$ls->brgy_contact}}"
                      data-code="{{$ls->brgy_code}}">
                     {{ $ls->brgy_name }}
                   </button>
                 @endif
               @endforeach
            </div>
           </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div id="accordion">
          <div class="card">
           <div class="card-header">
             <a class="collapsed card-link" data-toggle="collapse" href="#districtTwo">
               DISTRICT 2
             </a>
           </div>
           <div id="districtTwo" class="collapse" data-parent="#accordion">
             <div class="col-md-12 my-2">
               @foreach ($brgys as $ls)
                 @if ($ls->brgy_district == "2")
                   <button
                      class="btn btn-primary btn-block"
                      type="button"
                      data-toggle="modal"
                      data-target="#modalBrgy"
                      data-title="{{$ls->brgy_name}}"
                      data-chairman="{{$ls->brgy_chairman}}"
                      data-contact="{{$ls->brgy_contact}}"
                      data-code="{{$ls->brgy_code}}">
                     {{ $ls->brgy_name }}
                   </button>
                 @endif
               @endforeach
            </div>
           </div>
          </div>
          <div class="card">
           <div class="card-header">
             <a class="collapsed card-link" data-toggle="collapse" href="#districtFour">
              DISTRICT 4
             </a>
           </div>
           <div id="districtFour" class="collapse" data-parent="#accordion">
             <div class="col-md-12 my-2">
               @foreach ($brgys as $ls)
                 @if ($ls->brgy_district == "4")
                   <button
                      class="btn btn-primary btn-block"
                      type="button"
                      data-toggle="modal"
                      data-target="#modalBrgy"
                      data-title="{{$ls->brgy_name}}"
                      data-chairman="{{$ls->brgy_chairman}}"
                      data-contact="{{$ls->brgy_contact}}"
                      data-code="{{$ls->brgy_code}}">
                     {{ $ls->brgy_name }}
                   </button>
                 @endif
               @endforeach
            </div>
           </div>
          </div>
          <div class="card">
           <div class="card-header">
             <a class="collapsed card-link" data-toggle="collapse" href="#districtSix">
               DISTRICT 6
             </a>
           </div>
           <div id="districtSix" class="collapse" data-parent="#accordion">
             <div class="col-md-12 my-2">
               @foreach ($brgys as $ls)
                 @if ($ls->brgy_district == "6")
                   <button
                      class="btn btn-primary btn-block"
                      type="button"
                      data-toggle="modal"
                      data-target="#modalBrgy"
                      data-title="{{$ls->brgy_name}}"
                      data-chairman="{{$ls->brgy_chairman}}"
                      data-contact="{{$ls->brgy_contact}}"
                      data-code="{{$ls->brgy_code}}">
                     {{ $ls->brgy_name }}
                   </button>
                 @endif
               @endforeach
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <script src="/js/modal-brgy.js"></script>
  @extends('inc.modals')
@endsection
