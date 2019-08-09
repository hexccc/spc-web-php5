@extends('layouts.app')
@section('title', 'Important Cultural Properties')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div id="landmark" class="mx-auto col-md-10 offset-md-1 pt-4" style="width:100%;">
    <h3 class=" text-white p-2 mt-4" >
      San Pablo City Famous Landmarks
    </h3>
  <div class="row px-2">
      <div class="media float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/cathedral.jpg')}}" alt="SPC" height="150px" class="float-right mr-2">
        <div class="media-body">
          <h5 class="mt-0 font-weight-bold" style="color:3490DC;">SAN PABLO CITY CATHEDRAL</h5>
            <p id='landmarksText'>
              Construction of the bricks and stones church started in 1680 and finished in 1721.
              The detailed affluent, ecclesiastical ornamentation were made by artist Juan de los
              Santos under Father Hernando Cabrera’s direction (1618-1629) who mandated that all
              payments and tributes to the church be made in the form of gold, silver and other metals.
              It was used as prison /garrison during the second world war by the invading Japanese forces
              between 1941-1945.
            </p>
        </div>
      </div>
    <br>
      <div class="media float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 font-weight-bold" style="color:3490DC;">FARCON RESIDENCE</h5>
            <p id='landmarksText'>
              Constructed in the early 1950s.  Design  is a fusion of Hispanic and American-Colonial building styles.
              Home of Municipal President (1945) Don Alfonso Farcon.

            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/farcon.jpg')}}" alt="SPC" height="150px" class="float-right mr-2">
      </div>

      <div class="media float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/plaza1.jpg')}}" alt="SPC" height="150px" class="float-right mr-2">
        <div class="media-body">

          <h5 class="mt-0 font-weight-bold" style="color:3490DC;">THE CITY PLAZA</h5>
            <p id='landmarksText'>
              *Rizal Monument was installed in 1911<br>
              *Plaza fountain was constructed between 1916-1918 during the term of Don Feliano Exconde<br>
              *Lamp posts in the plaza circle and islands along Rizal Ave. were erected  by Mun. President Crispin Calabia (1928-1931)<br>
              *The Mango Tree was believed to have been there since 1899.<br>
            </p>
        </div>
      </div>

      <div class="media float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 font-weight-bold" style="color:3490DC;">SAN PABLO CITY HALL</h5>
            <p id='landmarksText' >
              The Old City Hall.  Building was inaugurated in March 30, 1940.  Construction was undertaken during the term of MP Cristeto Brion.  It was designed by Architect Antonio Toledo. The 3rd and 4th floors are currently used as home of the San Pablo City Museum.

            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/c_hall.jpg')}}" alt="SPC" height="150px" class="float-right mr-2">
      </div>

      <div class="media float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/hagdangbato.png')}}" alt="SPC" height="150px" class="float-right mr-2">
        <div class="media-body">

          <h5 class="mt-0 font-weight-bold" style="color:3490DC;">HAGDANG BATO</h5>
            <p id='landmarksText'>
              Constructed in 1915 under MP Marcial Alimario. It has five
               sections with a total of 89 steps. It serves as an access
                to Sampalok Lake from the view deck/Bonifacio Shrine.
                The lot was part of Dona Leonila Park which was donated by Cabesang Sixto Bautista.
            </p>
        </div>
      </div>
    </div>
      <h3 class=" text-white p-2 mt-4" style=" background-color: #ff4554;">
        Artifacts
      </h3>
    <div class="row px-2">
      <div class="media float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/cathedral.jpg')}}" alt="SPC" display="none" height="150px" class="float-right mr-2">
        <div class="media-body">
          <h5 class="mt-0 font-weight-bold" style="color:#ff4554;">Artifacts</h5>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        $(window).bind("load", function() {
          $('#landmarkPic').css('display', 'none')
          $('h3').fadeIn();
          $("h5").fadeIn('slow');
          $('div').find('img').fadeIn('slow');
          $('div').delay('slow').find('p').slideDown(3000);
        });
      });

    </script>
      <style media="screen">
        h5, h3, #landmarksText{
          display: none;
        }
      </style>
  </div>
</div>
