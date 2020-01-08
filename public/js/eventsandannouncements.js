var datatable_events;
$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



      //Add Events and Announcement 

        $.ajax({
        url : '/getEventsAndAnnouncement1',
        type : 'GET',
        dataType : 'json',
        success : function(res){

      


             var latest_events_html = '';
           
            latest_events_html += '<img src= "/image/'+res[0].thumbnail+'" alt = "event1" class = "img-responsive" style = "width:230px; height: 100%;" data-toggle="modal" data-target = "#event1">';
            
       
            $('#latestEventAndAnnouncement').html(latest_events_html);
        },
        error : function(xhr){
         
        }
        });

        $.ajax({
            url : '/getEventsAndAnnouncement2',
            type : 'GET',
            dataType : 'json',
            success : function(res){

            
            var events_modal_html = '';
            
             for (var i = 0; i < res.length; i++) {
               var  x = 1;
                x = x + i;
                events_modal_html +='<div class="modal fade" id="event'+ x +'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">'+
                '<div class="modal-dialog modal-lg modal-dialog-centered" role="document">'+
                '<div class="modal-content">'+
                '<div class="modal-header">'+
                '<h5 class="modal-title" id="event'+ x +'">'+res[i].title+'</h5>'+
                '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '</div><div class="modal-body" class="fancybox">'+
                '<img src="/image/'+res[i].thumbnail+'" alt="Event 1" class="img-fluid">'+
                '<div class="float-right"><button type="button" class="btn btn-outline-info text-dark btn-prev">Prev</button>'+
                '<button type="button" class="btn btn-outline-info text-dark btn-next">Next</button>'+
                '</div></div></div> </div> </div>';
                
                }
           
              $('#g').html(events_modal_html);
            },
            error : function(xhr){
            

            }
            });

        $('#seeEvents').click(function(e) {
            e.preventDefault();

            
            $.ajax({
                url : '/getAllEvents',
                type : 'GET',
                dataType : 'json',
                success : function(res){

                
                var seeAllEvents_html = '';

                for (var i = 0; i < res.length; i++) {
                //   
                seeAllEvents_html +=                   '<div class="card">'+
                                    '<div class="card-body">'+
                                    '<h5 class = "card-title">'+ res[i].title +'</h5>'+
                                        '<img src="/image/'+res[i].thumbnail+'" alt="Event 1" class="img-fluid">'+
                                    '</div>'+
                                '</div>';
            
                $('#eventsandannouncements').html(seeAllEvents_html);
                $('#seeAllEvents').modal('show');
                }
                },
                error : function(xhr){
                

                }
                });
        });

        $('#seeNews').click(function(e) {
            e.preventDefault();
    
            
            $.ajax({
                url : '/getAllNews',
                type : 'GET',
                dataType : 'json',
                success : function(res){
    
                
                var seeAllNews_html = '';
    
                for (var i = 0; i < res.length; i++) {

                    seeAllNews_html += '<div class="card">'+
                                            '<div class="card-body">'+
                                            '<h5 class = "card-title">'+res[i].title+'</h5>'+
                                                '<img src="/image/'+res[i].thumbnail+'" alt="Event 1" class="img-fluid">'+
                                            '<p>'+res[i].content+'</p>'+
                                            '</div>'+
                                        '</div>';

                    
          
            
                $('#news').html(seeAllNews_html);
                $('#seeAllNews').modal('show');
                }
                },
                error : function(xhr){
                
    
                }
                });
        });
    


    
      $('#addEvents').submit(function(e) {
        e.preventDefault();
    

        $.ajax({
            url: '/createEvents',
            type: 'POST',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            processData: false,
            beforeSend: function() {
                notif('Uploading Your Post \n This may take for a while if you have a video in your events', 'warning', );
                $('#add_submit_events').hide();
            },
            success: function(res) {
         

                notif('Success ! Uploading Your Post \n ' + res.msg, 'success');
                $('#addEvents')[0].reset();
                $('#inputEventsAndAnnouncements').modal('hide');
                datatable_events.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#add_submit_events').show();
                datatable_events.ajax.reload();
            },
            error: function(){
           
            }
        });
    });

    $('#delete_events_form').submit(function(e) {
        e.preventDefault();
    
        $.ajax({
            url: '/deleteOneEvents',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
         
                notif('Success ! Deleting Your Post \n ' + res.msg, 'success');
                $('#delete_events_form')[0].reset();
                $('#eventsdelete').modal('hide');
                datatable_events.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#update_submit_events').show();
                datatable_events.ajax.reload();
            },
            error: function(xhr) {
            
            }
        });
    });

    $('#updateevents').submit(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/updateOneEvents',
            type: 'POST',
            data: new FormData(this),
            beforeSend: function() {
                notif('Updating Your Post \n This may take for a while', 'warning', );
                $('#update_submit_events').hide();
            },
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(res) {
          

                notif('Success ! Updating Your Post \n ' + res.msg, 'success');
                $('#updateevents')[0].reset();
                $('#updateeventsmodal').modal('hide');
                datatable_events.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#update_submit_events').show();
                datatable_events.ajax.reload();
            },
            error: function() {
               
            }
        });
    });



   


    datatable_events = $('#tb_events').DataTable({
        "ajax": {
            "url": '/getEvents',
            dataSrc: 'data'
        },
        "columns": [{
            "data": "id"
        }, {
            "data": "title"
        }, {
            "data": "created_at"
        }, {
            "data": "updated_at"
        }, {
            "data": "btn"
        }]
    });

});

function eventAction(id, action) {
        
    switch (action) {
        case 'view':
  
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getOneEvents',
                type: 'POST',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function(res) {
                    res = res[0];
               
                    $('#view_thumb').attr('src', '/image/' + res.thumbnail);
                    $('#view_title').val(res.title);
                    
                },
                error: function(xhr) {
                  
                }
            });
            $('#vieweventsmodal').modal('show');
            break;
        case 'update':
         
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getOneEvents',
                type: 'POST',
                data: {'id': id},
                dataType: 'json',
                success: function(res) {
                    res = res[0];
               
                    // $('#update_thumb_input').val(res.thumbnail);
                    $('#update_thumb').attr('src', 'image/' + res.thumbnail);
                    $('#update_title').val(res.title);
                    $('#update_events_id').val(id);
                },
                error: function(xhr) {
               
                }
            });
            $('#updateeventsmodal').modal('show');
            break;
        case 'delete':
           
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getOneEvents',
                type: 'POST',
                data: {'id': id},
                dataType: 'json',
                success: function(res) {
                    res = res[0];
            
                    $('#delete_title_events').html('Events Title : ' + res.title)
                    $('#delete_id_events').val(id);
                },
                error: function(xhr) {
           
                }
            });
            $('#eventsdelete').modal('show');
            break;
        default:
    }
}