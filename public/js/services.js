




var datatable_service;
$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url : '/getLatestServices',
        type : 'GET',
        dataType : 'json',
        success : function(res){
          var services_html = '';
          for (var i = 0; i < res.length; i++) {
            // res[i]
            services_html += '<a href = "'+ res[i].link+'" class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">'+res[i].title +'</a>';
          }
          // console.log(news_html);
          $('#gov_services').html(services_html);
        },
        error : function(xhr){

        }
      });



      $('#addService').submit(function(e) {
        e.preventDefault();
        console.log($(this).serializeArray());

        $.ajax({
            url: '/createService',
            type: 'POST',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(res) {
                console.log(res);

                notif('Success ! Uploading Your Post \n ' + res.msg, 'success');
                $('#addService')[0].reset();
                $('#inputService').modal('hide');
                datatable_service.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#add_submit_service').show();
                datatable_service.ajax.reload();
            },
            error: function(){
                console.log();
            }
        });
    });

    $('#delete_service_form').submit(function(e) {
        e.preventDefault();
    
        $.ajax({
            url: '/deleteOneService',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                console.log(res);
                notif('Success ! Deleting Your Post \n ' + res.msg, 'success');
                $('#delete_service_form')[0].reset();
                $('#servicedelete').modal('hide');
                datatable_service.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#update_submit_service').show();
                datatable_service.ajax.reload();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });

    $('#updateservice').submit(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/updateOneService',
            type: 'POST',
            data: new FormData(this),
            beforeSend: function() {
                notif('Updating Your Post \n This may take for a while', 'warning', );
                $('#update_submit_service').hide();
            },
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(res) {
                console.log(res);

                notif('Success ! Updating Your Post \n ' + res.msg, 'success');
                $('#updateservice')[0].reset();
                $('#updateservicemodal').modal('hide');
                datatable_service.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#update_submit_service').show();
                datatable_service.ajax.reload();
            },
            error: function() {
        
            }
        });
    });

    

  


    datatable_service = $('#tb_services').DataTable({
        "ajax": {
            "url": '/getService',
            dataSrc: 'data'
        },
        "columns": [{
            "data": "id"
        }, {
            "data": "title"
        }, {
            "data": "link"
        }, {
            "data": "created_at"
        }, {
            "data": "updated_at"
        }, {
            "data": "btn"
        }],
        scrollX: true,
        columnDefs: [
            {
                render: function(data, type, full, meta) {
                    return `<td>` + data + `</td>`
                },
                targets: 2
            }
        ]
    });

});

function serviceAction(id, action) {

    switch (action) {
        case 'view':
         
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getOneService',
                type: 'POST',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function(res) {
                    res = res[0];
                
                    
                    $('#view_service_title').val(res.title);
                    $('#view_service_link').val(res.link);
                  
                   
                },
                error: function(xhr) {
                   
                }
            });
            $('#viewservicemodal').modal('show');
            break;
        case 'update':
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getOneService',
                type: 'POST',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function(res) {
                    res = res[0];
                    
                    $('#update_service_title').val(res.title);
                    $('#update_service_link').val(res.link);
                    $('#update_service_id').val(res.id);
                    
                },
                error: function(xhr) {
                   
                }
            });
            $('#updateservicemodal').modal('show');
            break;
        case 'delete':
       
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getOneService',
                type: 'POST',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function(res) {
                    res = res[0];
                
                    $('#delete_title_service').html('Service Title : ' + res.title)
                    $('#delete_id_service').val(id);
                },
                error: function(xhr) {
                  
                }
            });
            $('#servicedelete').modal('show');
            break;
        default:
    }
}