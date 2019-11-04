




var datatable_form;
$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url : '/get_engr_form',
        type : 'GET',
        dataType : 'json',
        success : function(res){
          var form_html = '';
          for (var i = 0; i < res.length; i++) {
            // res[i]
            form_html += '<a style="font-size:16px; fontweight:bold; border-radius:50px;"'+
                            'href="/docs/'+res[i].link+'" target="_blank"'+
                            'class="btn btn-outline-success text-dark btn-block btn-sm my-2" aria-disabled="true" >'+res[i].title+
                            '</a>';
          }
          // console.log(news_html);
          $('#engr-bldg-form').html(form_html);
        },
        error : function(xhr){

        }
      });



      $('#addForm').submit(function(e) {
        e.preventDefault();
        console.log($(this).serializeArray());

        $.ajax({
            url: '/create_form',
            type: 'POST',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(res) {
                console.log(res);

                notif('Success ! Uploading Your Post \n ' + res.msg, 'success');
                $('#addForm')[0].reset();
                $('#inputEngineeringForm').modal('hide');
                datatable_form.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#add_submit_form').show();
                datatable_form.ajax.reload();
            },
            error: function(){
                console.log();
            }
        });
    });

    $('#delete_engineering_form').submit(function(e) {
        e.preventDefault();
    
        $.ajax({
            url: '/delete_one_form',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                console.log(res);
                notif('Success ! Deleting Your Post \n ' + res.msg, 'success');
                $('#delete_engineering_form')[0].reset();
                $('#formdelete').modal('hide');
                datatable_form.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#update_submit_form').show();
                datatable_form.ajax.reload();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });

    $('#updateform').submit(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/update_one_form',
            type: 'POST',
            data: new FormData(this),
            beforeSend: function() {
                notif('Updating Your Post \n This may take for a while', 'warning', );
                $('#update_submit_form').hide();
            },
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(res) {
                console.log(res);

                notif('Success ! Updating Your Post \n ' + res.msg, 'success');
                $('#updateform')[0].reset();
                $('#updateformmodal').modal('hide');
                datatable_form.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#update_submit_form').show();
                datatable_form.ajax.reload();
            },
            error: function() {
        
            }
        });
    });

    

  


    datatable_form = $('#tb_engr_form').DataTable({
        "ajax": {
            "url": '/get_form',
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
        }]
    });

});    

function formaction(id, action) {

    switch (action) {
        case 'view':
         
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/get_one_form',
                type: 'POST',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function(res) {
                    res = res[0];
                
                    
                    $('#view_form_title').val(res.title);
                    $('#view_form_link').val(res.link);
                  
                   
                },
                error: function(xhr) {
                   
                }
            });
            $('#viewformmodal').modal('show');
            break;
        

        case 'update':
                    
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/get_one_form',
                type: 'POST',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function(res) {
                    res = res[0];
                    
                    $('#update_form_title').val(res.title);
                    $('#update_form_link').val(res.link);
                    $('#update_form_id').val(res.id);
                    
                },
                error: function(xhr) {
                
                }
            });
            $('#updateformmodal').modal('show');
            break;
        case 'delete':

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/get_one_form',
                type: 'POST',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function(res) {
                    res = res[0];
                
                    $('#delete_title_form').html('Service Title : ' + res.title)
                    $('#delete_id_form').val(id);
                },
                error: function(xhr) {
                
                }
            });
            $('#formdelete').modal('show');
            break;
        default:
        }
    
}