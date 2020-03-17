@extends('layouts.app')
@section('title', 'Mission & Vision')
<style media="screen">
  body{
    overflow-x: hidden;
  }
</style>
  <div class="misvispic">
    <div class="ptext">
       <div class="row d-flex justify-content-around">
          <span class="col-4 border">
            MISSION
           <p style="font-size:11;letter-spacing:2px;text-align:justify;">
             To uplift the quality of the life of San Pablenos through effective and efficeient delivery of
             public service in partnership with the private.
           </p>
          </span>
          <span class="col-4 border">
            VISION <p style="font-size:11;letter-spacing:2px;text-align:justify;">San Pablo, the City of Seven lakes-premier tourist destination,
             light industrial and education hub in CALABARZON, commited
             to good governance and sustainable development.</p>
          </span>
      </div>
    </div>
  </div>

  <section class="section section-light">
  <li class="media mt-2 p-2">
        <div class="media-body">
          <h3 class="mt-0 font-weight-bold" style="color:3490DC;">
            Our 15-point service standards for clients</h3>
            <p>
            1. When we go to work, we will come in complete uniform and display our identification cards.
            </p>
            <p>
            2. We will greet our clients with a sincere smile.
            </p>
            <p>
            3. When you enter our offce premises, we will introduce ourselves to you so that you can address usback in an appropriate manner.
            </p>
            <p>
            4. We will attend our clients’  inquiries within three(3)minutes.
            </p>
            <p>
            5. Approriate action will immediately follow your queries and you will be referred accordingly.
            </p>
            <p>
            6. We will make you comfortable inside our facilities while you wait for your service request.
            </p>
            <p>
            7. Express/special lanes are provided for Senior Citivens, pregnant women and People with Disablilites.
            </p>
            <p>
            8. We will teach the clients, needed requiremnts that can expedite their service request.
            </p>
            <p>
            9. We will promptly return your denied request and explain to you the reason for such, which in turn will allow us to reprocess it.
            </p>
            <p>
            10. Our service stations will be properly labeled that will include our organizational chart and service ow chart.
            </p>
            <p>
            11. Directional signs will be displayed conspicuously as guide so that you can establish familiarity with our work place.
            </p>
            <p>
            12. Information and complaint desk is at your service in strategic locations.
            </p>
            <p>
            13. An information and hotline service is available 24/7 for anyone who has queries.
            </p>
            <p>
            14. No noon-break policy is followed and we are to serve beyond office hours if need.
            </p>
            <p>
            15. A satisfied client is our happiness in the government service.
            </p>
        </div>
      </li>
  </section>
  <section class="section-dark">
  <div class="d-flex justify-content-center row p-4">
    <div class="mt-2">
        <h3 class="font-weight-bold" style="color:3490DC;">Performance Pledge</h3>
        <p>
        We, the officials and employees of the City Government of San Pablo commit to: <br>
        <b style="font-size: 20px;">A </b>ssist every client and visitors with utmost courtesy and smile. <br>
        <b style="font-size: 20px;">M </b>onitor our own ranks to ensure that services are delivered ontime. <br>
        <b style="font-size: 20px;">A </b>dequate care shall be accorded to Senior Citizens, pregnant women, children and Persons with Disabilities(PWDs) that comes our door. <br>
        <b style="font-size: 20px;">N </b>urture each day as a gift of opportunity to serve others.<br>
        <b style="font-size: 20px;">T </b>rustworthiness shall be epitome of our service delays with explanations. <br>
        <b style="font-size: 20px;">E </b>nsure happy clients by addressing service delays with explanations. To all this we pledge and commit, keeping in mind that we are at all times accountable to the people that we serve.
      </p>
    </div>
  </section>
  <section class="section section-light">
    <div class="row">
      <div class="col-6 mt-2">
        <h3 class="mt-0 font-weight-bold" style="color:3490DC;">Agency Mandate</h3>
          <p style="text-align:justify;">
            All employees both rank and file and personnel holding key positions in different departments of the local governmaent are mandated to deliver quality service through the implementation of its programs to make them efficient and sustainable that have been developed in partnership with the private sector.
          </p>
      </div>
      <div class="col-6">
        <li class="media mt-2 p-2">
          <div class="media-body" style="text-align:justify;">
            <h3 class="mt-0 font-weight-bold" style="color:3490DC;">
              Strategic Directions</h3>
              <p>
              These directions can be realized by strictly following:
              </p>
              <p>
              1. Existing policies of the city/agency have to be reviewed and revisited by the implementing offce.
              </p>
              <p>
              2. Implementation of recuitment, selection and promotion plan, along with the performance management plan, learning and development strategy and rewards and recognition policies have to be strictly observed by the city and to be upheld by the city’s implementing officials/offcers at all times.
              </p>
              <p>
              3. Monitor day-to-day activities of all employees.
              </p>
              <p>
              4. Public service has to be the top most priority of all employees
              </p>
            </div>
        </li>
      </div>
    </div>
  </div>
  </section>




<style>
.misvispic{
  position:relative;
  opacity:0.70;
  background-position:center;
  background-size:cover;
  background-repeat:no-repeat;

  /*
    fixed = parallax
    scroll = normal
  */
  background-attachment:fixed;
}

.misvispic{
  background-image:url('image/1 Sampalok.jpg');
  min-height:100%;
  width:100%;
}


.section{
  text-align:center;
  padding:50px 80px;
}

.section-light{
  background-color:#f4f4f4;
  color:#666;
}

.section-dark{
  background-color:#282e34;
  color:#ddd;
}

.ptext{
  position:absolute;
  top:50%;
  width:100%;
  text-align:center;
  color:#000;
  font-size:27px;
  letter-spacing:8px;
  text-transform:uppercase;
}

.ptext .border{
  background-color:#111;
  color:#fff;
  padding:20px;
}

.ptext .border.trans{
  background-color:transparent;
}

@media(max-width:568px){
  .pimg1, .pimg2, .pimg3{
    background-attachment:scroll;
  }
}
</style>
