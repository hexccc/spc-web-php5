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

        <!-- <a class="btn btn-info" href="form/name=Session::get('username'))">Online BPLO Fill Up</a> -->
        <!-- <a class="btn btn-info text-white" data-toggle="modal" data-target="#regForm" data-dismiss="modal" >Online BPLO Fill Up</a> -->
      </div>
    </div>
  </div>
</div>


  
    <div class="modal logged" id="myModal"  tabindex="-1"role="dialog" data-backdrop="static" data-keyboard="false" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            
            <div class="modal-body">
              
              <div class="form-group mt-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam odio omnis reprehenderit commodi! Incidunt corrupti voluptatem animi iure optio blanditiis laudantium cum ratione deserunt, voluptatibus debitis aut neque saepe nemo!
              </div>
              <div class="form-group mb-0">
                <input type="checkbox"  
                onchange="document.getElementById('acceptTerms').disabled = !this.checked;" name='checkTerms' 
                id='checkTerms'/>
                <label class="form-check-label" for="exampleCheck1">
                  Accept Terms and Conditions
                </label>
                  
                <button id="acceptTerms" name="acceptTerms"  class="close" data-dismiss="modal"  aria-label="Close" disabled><span aria-hidden="true">Accept</span>
                </button>
              </div>
              </form>
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
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
  
        <div class="modal-header">
          <h5 class="modal-title" id="">NEWS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
  
       
  
        <div class="modal-body" class="fancybox">
            <div class = "row" >
              {{--  <div clas = "col-xl-12 col-md-12 col-sm-12">  --}}
                <div id = "news">
  
                      //<div class="card">
                      //  <div class="card-body">
                       //   <h5 class = "card-title">{{-- TITLE --}}</h5>
                       //     <img src=""{{-- IMAGE --}} alt="Event 1" class="img-fluid">
                       // </div>
                    //  </div> 
                      
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>


{{-- <div id='newsModals'></div> --}}
{{-- <div class="modal" id="modalNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id='nTitle'></p>
        <img id="nThumbnail" alt="news-thumbnail">
        <p id='nSubtitle'></p>
        <p id='nContent'></p>

        <iframe id="nVideo" width="" height=""></iframe>
        </video>
      </div>
    </div>
  </div>
</div> --}}

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

                    //<div class="card">
                    //  <div class="card-body">
                     //   <h5 class = "card-title">{{-- TITLE --}}</h5>
                     //     <img src=""{{-- IMAGE --}} alt="Event 1" class="img-fluid">
                     // </div>
                  //  </div> 
                    
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div id = "g">

  
</div>
{{-- <div class="modal fade" id="event1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="event1">Event 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" class="fancybox">
          <img src="{{URL::asset('image/event3.jpg)}}" alt="Event 1" class="img-fluid">
          <div class="float-right">
            <button type="button" class="btn btn-outline-info text-dark btn-prev">< Prev</button>
            <button type="button" class="btn btn-outline-info text-dark btn-next">Next ></button>
          </div>
      </div>
    </div>
  </div>
</div> --}}

{{-- <div class="modal fade" id="event2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="event2">Event 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" class="fancybox">
          <img src="{{URL::asset('image/event3.jpg')}}" alt="Event 2" class="img-fluid">
          <div class="float-right">
            <button type="button" class="btn btn-outline-info text-dark btn-prev">< Prev</button>
            <button type="button" class="btn btn-outline-info text-dark btn-next">Next ></button>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="event3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="event3">Event 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" class="fancybox">
          <img src="{{URL::asset('image/carousel4.jpg')}}" alt="Event 3" class="img-fluid">
          <div class="float-right">
            <button type="button" class="btn btn-outline-info text-dark btn-prev">< Prev</button>
            <button type="button" class="btn btn-outline-info text-dark btn-next">Next ></button>
          </div>
      </div>
    </div>
  </div>
</div> --}}

{{-- END OF EVENTS MODAL --}}


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

<!-- For News -->
{{-- ADMIN PANEL --}}
<div class="modal fade" id="updatenewsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mayor_office">Update News  <span id="update_created_at"></span> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                  <form id="updatenews" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-6">
                        <div class="row">
                          <div class=" text-center col-12">
                            <img src="image/20190701055237_thumb.jpg" id="update_thumb"  width="100%" height="100%" alt="No Image thumbnail found in the database">
                            <input type="file" style="display:none;" name="update_thumbnail" id="update_thumb_input" value="">
                          </div>

                          <div class="text-center col-12 pt-3">
                            <button type="button" id="update_btn_thumb" class="btn btn-primary" name="button">
                              <i class="fas fa-upload"></i>
                              Upload New Thumbnail
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="row">
                          <div class=" text-center col-12">
                              <iframe id="update_yt_frame" width="100%" style="min-height: 42vh;"  src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>

                        <div class="text-center col-12 pt-3">
                            <div class="row">
                              <div class="col-4">
                                <button type="button" id="update_paste_btn" name="button" class="btn btn-danger">
                                  <i class="fas fa-paste"></i>
                                  &nbsp; Paste
                                </button>
                              </div>
                              <div class="col-8">
                                <input type="text" class="form-control" name="update_news_video" id="update_news_video" value="" readonly>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 text-center">
                          </div>
                        </div>
                      </div>

                      <div class="col-12 pt-4">
                        <div class="form-group ">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control" name="update_title" id="update_title" aria-describedby="emailHelp" >
                            </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Sub Title</label>
                          <input type="text" class="form-control" name="update_sub_title" id="update_subtitle" >
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Content</label>
                          <textarea class="form-control" name="update_content" id="update_content"  rows="8" cols="80"></textarea>
                        </div>
                      </div>
                      <input type="hidden" name="update_news_id" id="update_news_id" value="">
                          <input type="hidden" name="update_created_by" id="update_created_by" value="sampleID_created_by">
                          <input type="hidden" name="update_updated_by" id="update_updated_by" value="sampleID_updated_by">
                          <div class="container text-center">
                              <button type="submit" id="update_submit_news" class="btn btn-primary">Update</button>
                                  <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
                          </div>
                      </div>
                  </form>

      </div>
    </div>
  </div>
</div>



