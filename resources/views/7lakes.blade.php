@extends('layouts.app')
@section('title', 'Important Cultural Properties')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div id="landmark" class="mx-auto col-md-10 offset-md-1 pt-4" style="width:100%;">
    <h3 class=" text-white p-2 mt-4" >
    Our Seven Lakes
    </h3>
  <div class="row px-2">
      <div class="media float-right mt-4 p-2">
        <img style="display:none" src="{{URL::asset('image/1 Sampalok.jpg')}}" alt="SPC" width="350px" class="float-right mr-2">
        <div class="media-body">
          <h5 class="mt-0 p-2 font-weight-bold" style="color:3490DC;background-color:#a9f2ff ">SAMPALOC LAKE</h5>
            <p id='landmarksText'>
 •	Nasasakupan: Barangay IV-A, IV-C, V-A, Concepcion, San Lucas 1<br>
 •	Lawak: 99.21 Hectares<br>
 •	Lalim: 27 Meters<br>
 •	Yamang Lawa: Dalag, Hito, Tilapia,Gurami, Hipon, Ayungin, Dulong, Big Head, Karpa, Bitoo, Kuhol<br>
 •	Atrakson: Ang Lawa ng Sampalok, Sampalok Lake Mini Parks, Museo ng San Pablo, Doña Leonila Park, Hagdang Bato, Bonifacio Monument, Trese Martirez Monument<br>
 •	Mga Akomodasyon: Ang Tahanan ni Aling Meding Hotel & Restaurant, Lake City Hotel<br>
 •	Tourist Arrivals: January 2019 – 72,134 | February 2019 – 14,863 | March 2019 – 16,027

            </p>
        </div>
      </div>

      <div class="col-12 media float-right mt-4 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 p-2 font-weight-bold p-2" style="color:3490DC;background-color:#a9f2ff">CALIBATO</h5>
            <p id='landmarksText'>
              •	Nasasakupan: Barangay Sto. Angel <br>
              •  Lawak: 27.18 Hectares<br>
              •	Lalim: 135 Meters (pinakamalalim sa 7 lawa) <br>
              •	Yamang Lawa: Dalag, Tilapia,Gurami, Hipon, Ayungin, Karpa, Bitoo, Kuhol, Big Head<br>
              •	Atrakson: Ang Lawa ng Kalibato  <br>
              •	Tourist Arrivals: January 2019 – 47 | February 2019 – 239 | March 2019 - 74
            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/2 Calibato.jpg')}}" alt="SPC" width="350px" class="float-right mr-2">
      </div>

      <div class="col-12 media float-right mt-4 p-2">
        <img style="display:none" src="{{URL::asset('image/3 Bunot.jpg')}}" alt="SPC" width="350px" class="float-right mr-2">
        <div class="media-body">

          <h5 class="mt-0 p-2 font-weight-bold" style="color:3490DC;">BUNOT</h5>
            <p id='landmarksText'>
               • 	Nasasakupan: Barangay Concepcion<br>
               • 	Lawak: 38.16 Hectares<br>
               • 	Lalim: 23 Meters<br>
             • 	Yamang Lawa: Dalag, Tilapia,Gurami, Hipon, Ayungin, Karpa, Bitoo, Kuhol<br>
               • 	Atrakson: Ang Lawa ng Bunot <br>
             • 	Mga Akomodasyon/Kainan: Cusina de Sabang 602, Bunot Lake Resort, Villa Muñoz Resort, Crisolaido’s Motorist Inn, NM Travellers Inn<br>
             • 	Tourist Arrivals: January 2019 – 1,824 | February 2019 – 2,358 | March 2019 – 2,160

            </p>
        </div>
      </div>

      <div class=" col-12 media float-right mt-4 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 p-2 font-weight-bold" style="color:3490DC;">MOHICAP</h5>
            <p id='landmarksText' >
               • 	Nasasakupan: Barangay San Buenaventura<br>
               • 	Lawak: 20.49 Hectares<br>
               • 	Lalim: 27 Meters<br>
               • 	Yamang Lawa: Dalag, Tilapia,Gurami, Hipon, Ayungin, Karpa, Bitoo, Kuhol <br>
               • 	Atrakson: Ang Lawa ng Muhikap, Boat Rafting with food service<br>
             • 	Mga Akomodasyon/Kainan: Star Lake Resort & Hotel <br>
             • 	Tourist Arrivals: January 2019 – 101 | February 2019 – 508 | March 2019 - 240

            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/4 Mohicap.jpg')}}" alt="SPC" width="350px" class="float-right mr-2">
      </div>

      <div class="col-12 media float-right mt-4 p-2">
        <img style="display:none" src="{{URL::asset('image/5 Palakpakin.jpg')}}" alt="SPC" width="350px" class="float-right mr-2">
        <div class="media-body">

          <h5 class="mt-0 p-2 font-weight-bold" style="color:3490DC;">PALAKPAKIN</h5>
            <p id='landmarksText'>
               • 	Nasasakupan: Barangay San Lorenzo, San Buenaventura, Dolores<br>
               • 	Lawak: 54.39 Hectares<br>
               • 	Lalim: 7.5 Meters<br>
               • 	Yamang Lawa: Dalag, Tilapia,Gurami, Hipon, Ayungin, Karpa, Bitoo, Kuhol, Aquarium Fish<br>
               • 	Atraksyon: Ang Lawa ng Palakpakin <br>
             • 	Tourist Arrivals: January 2019 – 26 | February 2019 – 246 | March 2019 - 53

            </p>
        </div>
      </div>
      <div class=" col-12 media float-right mt-4 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 p-2 font-weight-bold" style="color:3490DC;">PANDIN</h5>
            <p id='landmarksText' >
               • 	Nasasakupan: Barangay Sto. Angel, San Lorenzo<br>
               • 	Lawak: 23.54 Hectares<br>
               • 	Lalim: 63 Meters<br>
               • 	Yamang Lawa: Dalag, Tilapia,Gurami, Hipon,  Ayungin, Karpa, Bitoo, Kuhol, Hito <br>
               • 	Atraksyon: Ang Lawa ng Pandin, Boat Rafting  with food Services<br>
               • 	Tourist Arrivals: January 2019 – 2,647 | February 2019 – 2,905 | March 2019 – 5,651
            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/6 Pandin.jpg')}}" alt="SPC" width="350px" class="float-right mr-2">
      </div>

      <div class="col-12 media float-right mt-4 p-2">
        <img style="display:none" src="{{URL::asset('image/7 Yambo.jpg')}}" alt="SPC" width="350px" class="float-right mr-2">
        <div class="media-body">
          <h5 class="mt-0 p-2 font-weight-bold" style="color:3490DC;">YAMBO</h5>
            <p id='landmarksText'>
             • 	Nasasakupan: Barangay Sto. Angel, San Lorenzo<br>
             • 	Lawak: 36 Hectares<br>
               • 	Lalim: 40 Meters<br>
               • 	Yamang Lawa: Dalag, Tilapia,Gurami, Hipon, Ayungin, Karpa, Bitoo, Kuhol, Bakuli<br>
               • 	Atraksyon: Ang Lawa ng Yambo, Boat Rafting with food services<br>
             • 	Tourist Arrivals: January 2019 – 857 | February 2019 – 1,057 | March 2019 – 2,377
            </p>
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
        h5{
          background-color:#a9f2ff;
        }
      </style>

  </div>
</div>
