@extends('layouts.app')
@section('title', 'Local Officials')

<div class="mx-auto col-md-10 offset-md-1 pt-4" style="width:100%">
    <h3 class=" text-white p-2 mt-4">
      Local Officials
    </h3>

    <div class="row">
    <div class="col-md-4 mt-2">
      <div class="input-group">
        <input class="form-control py-2 border-right-0 border" type="text" placeholder="Search Barangay..." aria-label="Search">
          <span class="input-group-append">
              <div class="input-group-text bg-transparent">
                <i class="fa fa-search">
                </i>
              </div>
          </span>
      </div>
    </div>
      <div class="col-md-8" >
        <ul>
            <li class="media float-right border border-primary rounded mt-2 p-2">
              <img class="align-self-start mr-3 " src="{{URL::asset('image/2x2.jpg')}}" alt="Generic placeholder image" height="100px">
              <div class="media-body">
                <h5 class="mt-0 font-weight-bold" style="color:3490DC;">Gertudes Penalin V. Gapaz</h5>
                  <p>
                    Barangay Chairman of Barangay I-A
                  </p>
                  <p>
                    Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                  </p>
              </div>
            </li>
          <li class="media float-right border border-primary rounded mt-2 p-2" style="width: 100%;">
            <img class="align-self-start mr-3" src="{{URL::asset('image/2x2.jpg')}}" alt="Generic placeholder image" height="100px">
              <div class="media-body">
                <h5 class="mt-0 font-weight-bold" style="color:3490DC;">
                  Ricardo B. San Diego
                </h5>
                  <p>
                  Barangay Chairman of Barangay I-B
                  </p>
                  <p>
                    Total Population: 566
                  </p>
                  <p>
                    Land Area: 11.19 Hectars
                  </p>
              </div>
            </li>
            <li class="media float-right border border-primary rounded mt-2 p-2">
              <img class="align-self-start mr-3" src="{{URL::asset('image/2x2.jpg')}}" alt="Generic placeholder image" height="100px">
                <div class="media-body">
                  <h5 class="mt-0 font-weight-bold" style="color:3490DC;">
                    Bernardo Q. Ramos
                  </h5>
                    <p>
                    Barangay Chairman of Barangay I-C
                    </p>
                    <p>
                      Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                </div>
              </li>
          </ul>
        </div>


  </div>
</div>
