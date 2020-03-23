{-- ADMIN PANEL --}}
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
                          <input type="text" class="form-control" name="update_news_title" id="update_news_title" aria-describedby="emailHelp" >
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




{{-- EVENTS AND ANNOUCEMENTS --}}
<div class="modal fade" id="inputEventsAndAnnouncements" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Add Events and Announcements</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
            <form id="addEvents" enctype="multipart/form-data">
  
              <div class="form-group">
                <label for="exampleInputEmail12">Title</label>
                <input type="text" class="form-control" name="eventTitle" id="exampleInputEmail12" aria-describedby="emailHelp" >
              </div>
              
              <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                  <div class="file-upload-wrapper">
                    <label for="input-file-now2">Thumbnail</label>
                    <input type="file"  name="eventThumbnail" id="input-file-now2" class="file-upload" />
                  </div>
                </div>
              </div>
  
                    {{--  <input type="hidden" name="created_by" value="sampleID_created_by">
                    <input type="hidden" name="updated_by" value="sampleID_updated_by">  --}}
                    <div class="container text-center pt-3">
                        <button type="submit" id="add_submit_events" class="btn btn-primary">Submit</button>
                        <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
                    </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="eventsdelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-top" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
    <div class="">
      <p>Are you sure you want to Delete?
        <span id="delete_title_events"></span>
      </p>
    </div>
  
                <div class="container text-center">
  
                  <form id="delete_events_form">
                    <input type="hidden" name="delete_id" value="" id="delete_id_events">
                    <button type="submit" class="btn btn-danger" >Yes</button>
                    <button type="reset" data-dismiss="modal" class="btn btn-primary">No</button>
                  </form>
  
  
                </div>
  
    </div>
  </div>
  </div>
  </div>
  
  
  <div class="modal fade" id="updateeventsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mayor_office">Update Events and Announcements  <span id="update_created_at"></span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <form id="updateevents" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-12">
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
                            <div class="col-12 text-center">
                            </div>
                          </div>
                        </div>
  
                        <div class="col-12 pt-4">
                          <div class="form-group ">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="update_title" id="update_title" aria-describedby="emailHelp" >
                              </div>
                        </div>
                        <input type="hidden" name="update_events_id" id="update_events_id" value="">
  
                            {{-- <input type="text" name="update_created_by" id="update_created_by" value="sampleID_created_by">
                            <input type="text" name="update_updated_by" id="update_updated_by" value="sampleID_updated_by"> --}}
  
                            <div class="container text-center">
                                <button type="submit" id="update_submit_events" class="btn btn-primary">Update</button>
                                    <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
                            </div>
                        </div>
                    </form>
  
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="vieweventsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mayor_office">View Events and Announcements <span id="view_created_at"></span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <form id="viewnews" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src="image/20190701055237_thumb.jpg"   id="view_thumb" width="100%" height="100%" alt="">
                          </div>
                        
                          <div class="col-12 pt-4">
                            <div class="form-group ">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control" name="title" id="view_title"  aria-describedby="emailHelp" readonly >
                                </div>
                          </div>
  
                            {{-- <input type="hidden" name="created_by" id="view_created_by"  value="admin" readonly>
                            <input type="hidden" name="updated_by" id="view_updated_by"  value="admin" readonly> --}}
  
                            <div class="container text-center">
                              <button type="reset" data-dismiss="modal" class="btn btn-info" >Close</button>
                            </div>
                        </div>
                    </form>
  
        </div>
      </div>
    </div>
  </div>
  
  {{-- Services --}}
  
  <div class="modal fade" id="inputService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Add Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
            <form id="addService" enctype="multipart/form-data">
  
              <div class="form-group">
                <label for="exampleInputEmail13">Title</label>
                <input type="text" class="form-control" name="serviceTitle" id="exampleInputEmail3" aria-describedby="emailHelp" >
              </div>
  
              <div class="form-group">
                <label for="exampleInputEmail13">Link</label>
                
                
                <input type="text" class="form-control" name="serviceLink" id="exampleInputEmail3" aria-describedby="emailHelp" >
              </div>
              </div>
              
              
  
                    {{--  <input type="hidden" name="created_by" value="sampleID_created_by">
                    <input type="hidden" name="updated_by" value="sampleID_updated_by">  --}}
                    <div class="container text-center pt-3">
                        <button type="submit" id="add_submit_service" class="btn btn-primary">Submit</button>
                        <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
                    </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="servicedelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-top" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
    <div class="">
      <p>Are you sure you want to Delete?
        <span id="delete_title_service"></span>
      </p>
    </div>
  
                <div class="container text-center">
  
                  <form id="delete_service_form">
                    <input type="hidden" name="delete_id" value="" id="delete_id_service">
                    <button type="submit" class="btn btn-danger" >Yes</button>
                    <button type="reset" data-dismiss="modal" class="btn btn-primary">No</button>
                  </form>
  
  
                </div>
  
    </div>
  </div>
  </div>
  </div>
  
  
  <div class="modal fade" id="updateservicemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mayor_office">Update Service <span id="update_created_at"></span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <form id="updateservice" enctype="multipart/form-data">
                      <div class="row">
                        
                      
  
                        <div class="col-12 pt-4">
                          <div class="form-group ">
                            <label for="update_title">Title</label>
                            <input type="text" class="form-control" name="update_service_title" id="update_service_title" aria-describedby="emailHelp" >
                              </div>
                        </div>
                        <div class="col-12 pt-4">
                          <div class="form-group ">
                            <label for="update_title">Link</label>
                            <input type="text" class="form-control" name="update_service_link" id="update_service_link" aria-describedby="emailHelp" >
                              </div>
                        </div>
                        <input type="hidden" name="update_service_id" id="update_service_id" value="">
  
                            {{-- <input type="text" name="update_created_by" id="update_created_by" value="sampleID_created_by">
                            <input type="text" name="update_updated_by" id="update_updated_by" value="sampleID_updated_by"> --}}
  
                            <div class="container text-center">
                                <button type="submit" id="update_submit_service" class="btn btn-primary">Update</button>
                                    <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
                            </div>
                        </div>
                    </form>
  
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="viewservicemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mayor_office">View Service <span id="view_created_at"></span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <form id="viewservice" enctype="multipart/form-data">
                      <div class="row">
                          
                          <div class="col-12 pt-4">
                            <div class="form-group ">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control" name="view_service_title" id="view_service_title"  aria-describedby="emailHelp" readonly >
                                </div>
                          </div>
                          <div class="col-12 pt-4">
                            <div class="form-group ">
                              <label for="exampleInputEmail1">Link</label>
                              <input type="text" class="form-control" name="view_service_link" id="view_service_link"  aria-describedby="emailHelp" readonly >
                                </div>
                          </div>
  
                            {{-- <input type="hidden" name="created_by" id="view_created_by"  value="admin" readonly>
                            <input type="hidden" name="updated_by" id="view_updated_by"  value="admin" readonly> --}}
  
                            <div class="container text-center">
                              <button type="reset" data-dismiss="modal" class="btn btn-info" >Close</button>
                            </div>
                        </div>
                    </form>
  
        </div>
      </div>
    </div>
  </div>
  
  
  {{-- Holidays --}}
  
  <div class="modal fade" id="inputHoliday" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Add Holiday</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
            <form id="addHoliday" enctype="multipart/form-data">
  
              <div class="form-group">
                <label for="exampleInputEmail13">Title </label>
                <input type="text" class="form-control" name="holidayTitle" id="exampleInputEmail3" aria-describedby="emailHelp" >
              </div>
  
              <div class="form-group">
                <label for="exampleInputEmail13">Greetings </label>
                <input type="text" class="form-control" name="holidayGreetings" id="exampleInputEmail3" aria-describedby="emailHelp" >
              </div>
              <div class = "row">
                <div class = "col-md-6 col-xs-12 col-sm-12">
                    <div class="form-group">
                        <label for="exampleInputEmail13">Date</label>
                        <select class="form-control" name="holidayMonth" id="exampleInputEmail3" aria-describedby="emailHelp" >
                          <option value="January">January</option>
                          <option value="Febuary">Febuary</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="October">October</option>
                          <option value="November">November</option>
                          <option value="December">December</option>
                        </select>
                      </div>
                </div>
                <div class = "col-md-6 col-xs-12 col-sm-12"> 
                  <div class="form-group">
                    <label for="exampleInputEmail13">Day</label>
                    <select class="form-control" name="holidayDay" id="exampleInputEmail3" aria-describedby="emailHelp" >
                        @for ($i = 1; $i < 32; $i++)
                            <option value =  '{{ $i }}'>{{$i}}</option>
                         @endfor
                    </select>
                  </div>
                </div>
              </div>
                    {{--  <input type="hidden" name="created_by" value="sampleID_created_by">
                    <input type="hidden" name="updated_by" value="sampleID_updated_by">  --}}
                    <div class="container text-center pt-3">
                        <button type="submit" id="add_submit_holiday" class="btn btn-primary">Submit</button>
                        <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
                    </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="holidaydelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-top" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
    <div class="">
      <p>Are you sure you want to Delete?
        <span id="delete_title_holiday"></span>
      </p>
    </div>
  
                <div class="container text-center">
  
                  <form id="delete_holiday_form">
                    <input type="hidden" name="delete_id" value="" id="delete_id_holiday">
                    <button type="submit" class="btn btn-danger" >Yes</button>
                    <button type="reset" data-dismiss="modal" class="btn btn-primary">No</button>
                  </form>
  
  
                </div>
  
    </div>
  </div>
  </div>
  </div>
  
  
  <div class="modal fade" id="updateholidaymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mayor_office">Update Holiday <span id="update_created_at"></span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <form id="updateholiday" enctype="multipart/form-data">
                      <div class="row">
                        
                      
  
                        <div class="col-12 pt-4">
                          <div class="form-group ">
                            <label for="update_title">Title</label>
                            <input type="text" class="form-control" name="update_holiday_title" id="update_holiday_title" aria-describedby="emailHelp" >
                              </div>
                        </div>
                        <div class="col-12 pt-4">
                          <div class="form-group ">
                            <label for="update_title">Greetings</label>
                            <input type="text" class="form-control" name="update_holiday_greetings" id="update_holiday_greetings" aria-describedby="emailHelp" >
                              </div>
                        </div>
                        <div class = "row">
                            <div class = "col-md-6 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail13">Date</label>
                                    <select class="form-control" name="update_holiday_month" id="update_holiday_month" aria-describedby="emailHelp" >
                                      <option value="January">January</option>
                                      <option value="Febuary">Febuary</option>
                                      <option value="March">March</option>
                                      <option value="April">April</option>
                                      <option value="May">May</option>
                                      <option value="June">June</option>
                                      <option value="July">July</option>
                                      <option value="August">August</option>
                                      <option value="September">September</option>
                                      <option value="October">October</option>
                                      <option value="November">November</option>
                                      <option value="December">December</option>
                                    </select>
                                  </div>
                            </div>
                            <div class = "col-md-6 col-xs-12 col-sm-12"> 
                              <div class="form-group">
                                <label for="exampleInputEmail13">Day</label>
                                <select class="form-control" name="update_holiday_day" id="update_holiday_day" aria-describedby="emailHelp" >
                                    @for ($i = 1; $i < 32; $i++)
                                        <option value =  '{{ $i }}'>{{$i}}</option>
                                     @endfor
                                </select>
                              </div>
                            </div>
                          </div>
                        <input type="hidden" name="update_holiday_id" id="update_holiday_id" value="">
  
                            {{-- <input type="text" name="update_created_by" id="update_created_by" value="sampleID_created_by">
                            <input type="text" name="update_updated_by" id="update_updated_by" value="sampleID_updated_by"> --}}
  
                            <div class="container text-center">
                                <button type="submit" id="update_submit_holiday" class="btn btn-primary">Update</button>
                                    <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
                            </div>
                        </div>
                    </form>
  
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="viewholidaymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mayor_office">View Holiday <span id="view_created_at"></span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <form id="viewholiday" enctype="multipart/form-data">
                      <div class="row">
                          
                          <div class="col-12 pt-4">
                            <div class="form-group ">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control" name="view_holiday_title" id="view_holiday_title"  aria-describedby="emailHelp" readonly >
                                </div>
                          </div>
                          <div class="col-12 pt-4">
                            <div class="form-group ">
                              <label for="exampleInputEmail1">Greetings</label>
                              <input type="text" class="form-control" name="view_holiday_greetings" id="view_holiday_greetings"  aria-describedby="emailHelp" readonly >
                                </div>
                          </div>
                          <div class = "row">
                              <div class = "col-md-6 col-xs-12 col-sm-12">
                                  <div class="form-group">
                                      <label for="exampleInputEmail13">Date</label>
                                      <select class="form-control" name="viewholidaymonth" id="viewholidaymonth" aria-describedby="emailHelp" >
                                        <option value="January">January</option>
                                        <option value="Febuary">Febuary</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                      </select>
                                    </div>
                              </div>
                              <div class = "col-md-6 col-xs-12 col-sm-12"> 
                                <div class="form-group">
                                  <label for="exampleInputEmail13">Day</label>
                                  <select class="form-control" name="viewholidayday" id="viewholidayday" aria-describedby="emailHelp" >
                                      @for ($i = 1; $i < 32; $i++)
                                          <option value =  '{{ $i }}'>{{$i}}</option>
                                       @endfor
                                  </select>
                                </div>
                              </div>
                            </div>
  
                            {{-- <input type="hidden" name="created_by" id="view_created_by"  value="admin" readonly>
                            <input type="hidden" name="updated_by" id="view_updated_by"  value="admin" readonly> --}}
  
                            <div class="container text-center">
                              <button type="reset" data-dismiss="modal" class="btn btn-info" >Close</button>
                            </div>
                        </div>
                    </form>
  
        </div>
      </div>
    </div>
  </div>
  
{{-- NEWS --}}
  <div class="modal fade" id="viewnewsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mayor_office">View News <span id="view_created_at"></span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <form id="viewnews" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-lg-6 col-md-12 col-sm-12">
                            <img src="image/20190701055237_thumb.jpg"   id="view_thumb" width="100%" height="100%" alt="">
                          </div>
                          <div class="col-lg-6 col-md-12 col-sm-12">
  
                            <iframe width="100%" id="view_video" height="100%" src="https://www.youtube.com/embed/CAHyQRC75c4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
                          </div>
                          <div class="col-12 pt-4">
                            <div class="form-group ">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control" name="title" id="view_title"  aria-describedby="emailHelp" readonly >
                                </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Sub Title</label>
                              <input type="text" class="form-control" name="sub_title" id="view_subtitle"  readonly>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Content</label>
                              <textarea class="form-control" name="content" id="view_content"   rows="8" cols="80" readonly></textarea>
                            </div>
                          </div>
  
                            <input type="hidden" name="created_by" id="view_created_by"  value="admin" readonly>
                            <input type="hidden" name="updated_by" id="view_updated_by"  value="admin" readonly>
  
                            <div class="container text-center">
                              <button type="reset" data-dismiss="modal" class="btn btn-info" >Close</button>
                            </div>
                        </div>
                    </form>
  
        </div>
      </div>
    </div>
  </div>
  
  
      <div class="modal fade" id="newsdelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-top" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="">Delete</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
        <div class="">
          <p>Are you sure you want to Delete?
            <span id="delete_title_news"></span>
          </p>
        </div>
  
                    <div class="container text-center">
  
                      <form id="delete_news_form">
                        <input type="hidden" name="delete_id" value="" id="delete_id_news">
                        <button type="submit" class="btn btn-danger" >Yes</button>
                        <button type="reset" data-dismiss="modal" class="btn btn-primary">No</button>
                      </form>
  
  
                    </div>
  
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div class="modal fade" id="inputnews" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Input News</h5>
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
              <div class="row">
  
                <div class="col-lg-6 col-md-6 col-xs-12">
                  <div class="file-upload-wrapper">
                    <label for="exampleInputPassword1">Thumbnail</label>
                    <input type="file"  name="thumbnail" id="input-file-now" class="file-upload" />
                  </div>
                </div>
  
                <div class="col-lg-6 col-md-6 col-xs-12">
                  <div class="row">
                    <div class="col-4">
                      <button type="button" id="add_paste_btn" name="button" class="btn btn-danger">
                        <i class="fas fa-paste"></i>
                        &nbsp; Paste
                      </button>
                    </div>
                    <div class="col-8">
                      <input type="text" class="form-control" name="add_news_video" id="add_news_video" value="" readonly>
                    </div>
                  </div>
                </div>
              </div>
  
                    <input type="hidden" name="created_by" value="sampleID_created_by">
                    <input type="hidden" name="updated_by" value="sampleID_updated_by">
                    <div class="container text-center pt-3">
                        <button type="submit" id="add_submit_news" class="btn btn-primary">Submit</button>
                        <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
                    </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- For News Modal View Client Side -->
  <div class="modal fade" id="showClientNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="title_client">Input News</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row text-center">
            <div class="col-12">
              <h4 id="newCli_title">
              </h4>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-12">
              <img width="100%" class="img img-thumbnail" src="#" alt="New Thumbnail not found" id="newCli_thumbnail">
            </div>
          </div>
          <div class="row text-center">
            <div class="col-12">
              <p id="newCli_content">
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  {{-- Engineering FORM --}}
  
  <div class="modal fade" id="inputEngineeringForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Add Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
            <form id="addForm" enctype="multipart/form-data">
  
              <div class="form-group">
                <label for="exampleInputEmail13">Title</label>
                <input type="text" class="form-control" name="formTitle" id="exampleInputEmail3" aria-describedby="emailHelp" >
              </div>
  
                <div class="file-upload-wrapper">
                  <label for="input-file-now2">File</label>
                  <input type="file"  name="formFile" id="input-file-now2" class="file-upload" />
                </div>
              
              
  
                    {{--  <input type="hidden" name="created_by" value="sampleID_created_by">
                    <input type="hidden" name="updated_by" value="sampleID_updated_by">  --}}
                    <div class="container text-center pt-3">
                        <button type="submit" id="add_submit_form" class="btn btn-primary">Submit</button>
                        <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
                    </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="formdelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-top" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
    <div class="">
      <p>Are you sure you want to Delete?
        <span id="delete_title_form"></span>
      </p>
    </div>
  
                <div class="container text-center">
  
                  <form id="delete_engineering_form">
                    <input type="hidden" name="delete_id" value="" id="delete_id_form">
                    <button type="submit" class="btn btn-danger" >Yes</button>
                    <button type="reset" data-dismiss="modal" class="btn btn-primary">No</button>
                  </form>
  
  
                </div>
  
    </div>
  </div>
  </div>
  </div>
  
  
  <div class="modal fade" id="updateformmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mayor_office">Update Form <span id="update_created_at"></span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <form id="updateform" enctype="multipart/form-data">
                      <div class="row">
                        
                      
  
                        <div class="col-12 pt-4">
                          <div class="form-group ">
                            <label for="update_title">Title</label>
                            <input type="text" class="form-control" name="update_form_title" id="update_form_title" aria-describedby="emailHelp" >
                              </div>
                        </div>
                        <div class="col-12 pt-4">
                          <div class="file-upload-wrapper">
                            <label for="input-file-now2">File</label>
                            <input type="file"  name="update_form_file" id="input-file-now2" class="file-upload" />
                          </div>
                        </div>
                        <input type="hidden" name="update_form_id" id="update_form_id" value="">
  
                            {{-- <input type="text" name="update_created_by" id="update_created_by" value="sampleID_created_by">
                            <input type="text" name="update_updated_by" id="update_updated_by" value="sampleID_updated_by"> --}}
  
                            <div class="container text-center">
                                <button type="submit" id="update_submit_form" class="btn btn-primary">Update</button>
                                    <button type="reset" data-dismiss="modal" class="btn btn-danger" >Clear All</button>
                            </div>
                        </div>
                    </form>
  
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="viewformmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mayor_office">View Form <span id="view_created_at"></span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <form id="viewform" enctype="multipart/form-data">
                      <div class="row">
                          
                          <div class="col-12 pt-4">
                            <div class="form-group ">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control" name="view_form_title" id="view_form_title"  aria-describedby="emailHelp" readonly >
                                </div>
                          </div>
                          <div class="col-12 pt-4">
                            <div class="form-group ">
                              <label for="exampleInputEmail1">Link</label>
                              <input type="text" class="form-control" name="view_form_link" id="view_form_link"  aria-describedby="emailHelp" readonly >
                                </div>
                          </div>
  
                            {{-- <input type="hidden" name="created_by" id="view_created_by"  value="admin" readonly>
                            <input type="hidden" name="updated_by" id="view_updated_by"  value="admin" readonly> --}}
  
                            <div class="container text-center">
                              <button type="reset" data-dismiss="modal" class="btn btn-info" >Close</button>
                            </div>
                        </div>
                    </form>
  
        </div>
      </div>
    </div>
  </div>
  