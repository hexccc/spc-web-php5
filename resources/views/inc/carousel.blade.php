
<div class="col-lg-10 c-wrapper">
<div id="demo" class="carousel slide shadow" data-ride="carousel" style="margin-top:110px;">
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon aria-hidden="true""></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style=" z-index:1;">
    <span class="carousel-control-next-icon aria-hidden="true""></span>
  </a>
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="{{URL::asset('image/vic-bday.jpg')}}" alt="mayor" height="450vh" width="100%">
      <div class="carousel-caption">
        <div class="float-right" style="text-align: right;">
          <div class="mx-3 mt-3 ">
      
          </div>
        </div>
        <div class="mask rgba-purple-slight"></div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{URL::asset('image/csc-banner.png')}}" alt="Sampaloc Lake" height="450" width="100%">
      <div class="carousel-caption">
        <div class="float-right" style="text-align: right;">
          <div class="mx-3 mt-3 ">
            <h5 class="font-weight-bold"></h5>
            <p></p>
          </div>
        </div>
        <div class="mask rgba-purple-slight"></div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{URL::asset('image/slake1.jpg')}}" alt="Sampaloc Lake" height="450" width="100%">
      <div class="carousel-caption">
        <div class="float-right" style="text-align: right;">
          <div class="mx-3 mt-3 ">
            <h5 class="font-weight-bold shadow-sm">SAMPALOC LAKE</h5>
            <p>&copy;Yen Baet</p>
          </div>
        </div>
        <div class="mask rgba-purple-slight"></div>
      </div>
    </div>

    <div class="carousel-item" style="position:relative">
      <img src="{{URL::asset('image/slake2.jpg')}}" alt="Sampaloc Lake" height="450" width="100%">
        <div class="carousel-caption">
          <div class="float-right" style="text-align: right;">
            <div class="mx-3 mt-3">
              <h5 class="font-weight-bold shadow-sm" style="position: relative;z-index:3; color:white;">SAN PABLO CITY HALL</h5>
              <p>City of Seven Lakes</p>
            </div>
          </div>
          <div class="mask rgba-purple-slight"></div>
        </div>
    </div>

    <div class="carousel-item">
      <img src="{{URL::asset('image/cathedral_2.jpeg')}}" alt="Sampaloc Lake" height="450" width="100%">
      <div class="carousel-caption">
        <div class="float-right" style="text-align: right;">
          <div class="mx-3 mt-3">
            <h5 class="font-weight-bold shadow-sm">SAN PABLO CITY CATHEDRAL</h5>
            <p>San Pablo City Plaza</p>
          </div>
        </div>
        </div>
      </div>


    </div>

</div>
</div>
<style media="screen">
div.c-wrapper{
    width: 80%; /* for example */
    margin: auto;
}

.carousel-inner > .item > img, 
.carousel-inner > .item > a > img{
width: 100%; /* use this, or not */
margin: auto;
position: relative;
margin-top: 60px;
}
</style>
