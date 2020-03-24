<div class="modal fade" id="bploForm" tabindex="-1" aria-labelledby="bploFormlbl" aria-hidden="true" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header float-none">
        <h4 id="bploFormlbl">Fill Up Forms</h4>
        <button class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a class="btn btn-info" href="{{URL::asset('docs/BUSINESS PERMIT APPLICATION FORM.docx')}}" download>Download Business Registration Form</a>
        <a class="btn btn-info" href="signin_requestor/">Online BPLO Fill Up</a>

        
      </div>
    </div>
  </div>
</div>


  


<div class="modal fade logged" id="logged" tabindex="-1" role="dialog" aria-labelledby="logged" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header float-none">
        <h3>Log In</h3>
				<button class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
        <form id="signinReg" enctype="multipart/form-data">
        <div class="r-form-group">
          <input type="text" placeholder="Username" name="user[username]" id="username" required/>
        </div>
        <div class="r-form-group">
          <input type="password" placeholder="Password" name="user[password]" id="password" required/>
        </div>
        <div class="r-form-group">
          <button type="submit" >Log in</button>
        </div>

        </form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="bploForm" tabindex="-1" aria-labelledby="bploFormlbl" aria-hidden="true" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header float-none">
          <h4 id="bploFormlbl">Fill Up Forms</h4>
          <button class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a class="btn btn-info" href="{{URL::asset('docs/BUSINESS PERMIT APPLICATION FORM.docx')}}" download>Download Business Registration Form</a>
          <a class="btn btn-info" href="form">Online BPLO Fill Up</a>
        </div>
      </div>
    </div>
</div>


{{-- BARANGGAY MODAL --}}
<div class="modal fade" id="modalBrgy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id='mChMan'></p>
        <p id='mCont'></p>
        <p id='mBrgyCode'></p>
      </div>
    </div>
  </div>
</div>

{{-- MODAL NEWS --}}
<div class="modal fade" id="seeAllNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered p-2" role="document">
      <div class="modal-content">
  
        <div class="modal-header mb-0">
          <h5 class="modal-title">ALL NEWS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
  
       
  
        <div class="modal-body" class="fancybox">
            <div  id = "newssss" >
              


              
              
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>




{{-- EVENT MODALS --}}


<div class="modal fade" id="seeAllEvents" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="">EVENTS AND ANNOUNCEMENTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     

      <div class="modal-body" class="fancybox">
          <div class = "row" >
            {{--  <div clas = "col-xl-12 col-md-12 col-sm-12">  --}}
              <div id = "eventsandannouncements">
                    <div class="card">
                     <div class="card-body">
                       <h5 class = "card-title">{{-- TITLE --}}</h5>
                          <img src=""{{-- IMAGE --}} alt="Event 1" class="img-fluid">
                     </div>
                   </div> 
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div id = "g">
</div>



{{-- LOCAL OFFICIAL --}}

<div class="modal fade" id="mayor_office" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mayor_office">Mayors Office </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <dl class="row text-dark">
          <dt class="col-6">HON. LORETO S. AMANTE</dt>
          <dd class="col-6">City Mayor</dd>

          <dt class="col-6">PAUL MICHAEL CUADRA</dt>
          <dd class="col-6">
            <p>CGDH -I
            </br>Tel. No. (049) 521-0307</p>
          </dd>
          <dt class="col-6 text-uppercase">Rodel B. Biglete</dt>
          <dd class="col-6">Head, Records Section </dd>
          <dt class="col-6 text-uppercase">Emilio I. Tirones</dt>
          <dd class="col-6">Head, Urban Housing Coordinator </dd>
          <dt class="col-6 text-uppercase">Percival F. Alvero</dt>
          <dd class="col-6">Head, Business Permit Office and Liscense Division </dd>
          <dt class="col-6 text-uppercase">Melinda P. Bondad</dt>
          <dd class="col-6">Head, Public Employment Service Office</dd>
        </dl>
        <hr>
        <dl class="row text-dark">
          <dt class="col-6">Office Location </dt>
          <dd class="col-6">3rd Flr., 8th Storey Bldg.</dd>
        </dl>
      </div>
    </div>
  </div>
</div>


