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


<div class="modal fade" id="event1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="event1">Event 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" class="fancybox">
          <img src="{{URL::asset('image/event3.jpg')}}" alt="Event 1" class="img-fluid">
          <div class="float-right">
            <button type="button" class="btn btn-outline-info text-dark btn-prev">< Prev</button>
            <button type="button" class="btn btn-outline-info text-dark btn-next">Next ></button>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="event2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
</div>

<div class="modal fade" id="mayor_office" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mayor_office">Mayor's Office </h5>
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




<div class="modal fade" id="inputnews" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="event1">Input News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


          <form id="addNews" enctype="multipart/form-data">

            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Sub Title</label>
              <input type="text" class="form-control" name="sub_title" id="exampleInputPassword1" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Content</label>
              <textarea class="form-control" name="content"  rows="8" cols="80"></textarea>
            </div>
            <div class="file-upload-wrapper">
              <label for="exampleInputPassword1">Thumbnail</label>
              <input type="file"  name="thumbnail" id="input-file-now" class="file-upload" />
            </div>
            <div class="file-upload-wrapper">
              <label for="exampleInputPassword1">Video</label>
              <input type="file" name="video"  id="input-file-now" class="file-upload" />
            </div>
                  <input type="hidden" name="created_by" value="sampleID_created_by">
                  <input type="hidden" name="updated_by" value="sampleID_updated_by">
                  <div class="container text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="submit" class="btn btn-danger">Clear All</button>
                  </div>

          </form>
      </div>
    </div>
  </div>
</div>
