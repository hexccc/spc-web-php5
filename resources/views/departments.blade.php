@extends('layouts.app')
@section('title', 'Departments')

<div class="mx-auto col-md-10 offset-md-1 pt-4" style="width:100%">
    <h3 class=" text-white p-2 mt-4">
      Departments
    </h3>

    <div class="row">
    <div class="col-md-4 mt-2">

      <div class="input-group">
        <input class="form-control py-2 border-right-0 border" type="text" placeholder="Search Department..." aria-label="Search">
          <span class="input-group-append">
              <div class="input-group-text bg-transparent">
                <i class="fa fa-search">
                </i>
              </div>
          </span>
      </div>

    </div>
      <div class="col-md-8 mt-2">
        <ul class="float-right">

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Mayor's Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5">HON. LORETO S. AMANTE</dt>
                      <dd class="col-7">City Mayor</dd>

                      <dt class="col-5">PAUL MICHAEL CUADRA</dt>
                      <dd class="col-7">
                        <p>Head Executive Assistant
                        </br>Tel. No. (049) 521-0307</p>
                      </dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic" data-toggle="modal" data-target="#mayor_office">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  City Administrator’s Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5">VICENTE B. AMANTE, Ph. D.</dt>
                      <dd class="col-8">City Administrator</dd>

                      <dt class="col-4"></dt>
                      <dd class="col-8">
                        Window 8, One Stop Processing CenterCity Hall Cmpd., </br>
                         San Pablo City
                      </br>Tel. No. (049) 503-1522
                      </dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Accounting Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5">LOLITA G. CORNISTA</dt>
                      <dd class="col-7">Tel. No. 562-6577</dd>
                      <dd class="col-8">City Accountant/CGDH-1</dd>

                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Agriculture Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5">ELIZABETH M. ESEO</dt>
                      <dd class="col-7">Tel. No. 503-2229</dd>
                      <dd class="col-8">City Agriculturist/ CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Assesor Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5">MA. ELENITA RUBI B. DIAZ</dt>
                      <dd class="col-7">Tel. No. 521-0996</dd>
                      <dd class="col-8">City Assessor/ CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Budget Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Arthur B. Almario</dt>
                      <dd class="col-7">Tel. No. 562-6817</dd>
                      <dd class="col-8">City Budget Officer /CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Cooperative Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Concepcion M. Biglete</dt>
                      <dd class="col-7">Tel. No. 562-562-2866</dd>
                      <dd class="col-8">City Cooperative Officer/ CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Environment and Natural Resources Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Ramon R. De Roma</dt>
                      <dd class="col-7">Tel. No. 562-2822</dd>
                      <dd class="col-8">CENR Officer/ CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Engineering Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Engr. Jesus P. De Leon</dt>
                      <dd class="col-7">Tel. No. 521-0798</dd>
                      <dd class="col-8">City Engineer / CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  General Services Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Josefina S. Andal</dt>
                      <dd class="col-7">Tel. No. 562-2395</dd>
                      <dd class="col-8">City General Services Officer/ CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Human Resource Management Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Elsa M. Barcelona</dt>
                      <dd class="col-7">Tel. No. 561-2649</dd>
                      <dd class="col-8">Human Resource Mngmt. Officer IV</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Legal Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Atty. Dennis B. Co</dt>
                      <dd class="col-7">Tel. No. 562-0863</dd>
                      <dd class="col-8">City Legal Officer / CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Local Civil Registar
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Victoria G. Maloles</dt>
                      <dd class="col-7">Tel. No. 562-8119</dd>
                      <dd class="col-8">City Civil Registry Officer/CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Planning and Development Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Rafael S. Amante</dt>
                      <dd class="col-7">Tel. No. 562-4980</dd>
                      <dd class="col-8">Acting City Planning and Development Officer</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Population and Nutrition
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Filmin Segundo C. Torres</dt>
                      <dd class="col-7">Tel. No. 562-1030</dd>
                      <dd class="col-8">City Population and Nutrition Officer/CGDH1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Social Welfare and Development Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Grace D. Adap</dt>
                      <dd class="col-7">Tel. No. 562-1575</dd>
                      <dd class="col-8">CSWDO / CGDH -1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>


              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Tourism Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Ma. Donnalyn E. Bri¤as</dt>
                      <dd class="col-7">Tel. No. 562-1429</dd>
                      <dd class="col-8">City Tourism Officer / CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>


              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Treasurers Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Arjan V. Babanbi</dt>
                      <dd class="col-7">Tel. No. 562-6710</dd>
                      <dd class="col-8">City Treasure/ CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>


              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Veterinarian Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Dra. Fara Jayne C. Ursolino</dt>
                      <dd class="col-7">Tel. No. 562-8266</dd>
                      <dd class="col-8">City Veterinarian / CGDH-1</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>


              <div class="card border-primary mb-3">
                <h3 class="text-white card-title p-2 mb-0">
                  Vice Mayor Office
                </h3>
                  <div class="card-body text-primary col-12">
                    <dl class="row text-dark">
                      <dt class="col-5 text-uppercase">Hon. Angelita E. Yang</dt>
                      <dd class="col-7">Tel. No. 562-1575</dd>
                      <dd class="col-8">Vice Mayor</dd>
                    </dl>
                    <a href="#" class="float-right  font-weight-bold font-italic">View more>>></a>
                </div>
              </div>







          </ul>
        </div>
  </div>


</div>

@extends('inc.modals')
