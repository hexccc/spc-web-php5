@extends('layouts.app')
@section('title', 'Gallery')
@section('content')
  <div class="mx-auto col-md-12 offset-md-1 py-4" style="width:100%">
      <h3 class="text-white p-2 my-2">
        Gallery
      </h3>
      <div class="container page-top">
        <div class="row" id="galler-area">


            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{URL::asset('image/slake1.jpg')}}" class="fancybox" rel="ligthbox">
                    <img  src="{{URL::asset('image/slake1.jpg')}}" class="zoom img-fluid "  alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a href="{{URL::asset('image/hagdangbato.png')}}" class="fancybox" rel="ligthbox">
                  <img  src="{{URL::asset('image/hagdangbato.png')}}" class="zoom img-fluid "  alt="">
              </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a href="{{URL::asset('image/old_spc.jpg')}}" class="fancybox" rel="ligthbox">
                  <img  src="{{URL::asset('image/old_spc.jpg')}}" class="zoom img-fluid "  alt="">
              </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a href="{{URL::asset('image/c_hall.jpg')}}" class="fancybox" rel="ligthbox">
                  <img  src="{{URL::asset('image/c_hall.jpg')}}" class="zoom img-fluid "  alt="">
              </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a href="{{URL::asset('image/cathedral.jpg')}}" class="fancybox" rel="ligthbox">
                  <img  src="{{URL::asset('image/cathedral.jpg')}}" class="zoom img-fluid "  alt="">
              </a>
           </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="{{URL::asset('image/cathedral_2.jpeg')}}" class="fancybox" rel="ligthbox">
                   <img  src="{{URL::asset('image/cathedral_2.jpeg')}}" class="zoom img-fluid "  alt="">
               </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="{{URL::asset('image/farcon.jpg')}}" class="fancybox" rel="ligthbox">
                   <img  src="{{URL::asset('image/farcon.jpg')}}" class="zoom img-fluid "  alt="">
               </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="{{URL::asset('image/dlsp1.jpg')}}" class="fancybox" rel="ligthbox">
                   <img  src="{{URL::asset('image/dlsp1.jpg')}}" class="zoom img-fluid "  alt="">
               </a>
            </div>


       </div>

       <script>
       $(document).ready(function(){
         $(".fancybox").fancybox({
               openEffect: "none",
               closeEffect: "none"
           });

           $(".zoom").hover(function(){

       		$(this).addClass('transition');
       	}, function(){

       		$(this).removeClass('transition');
       	});
       });
       </script>



    </div>
    </div>

@endsection
