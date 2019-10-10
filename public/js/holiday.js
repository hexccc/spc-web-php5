var datatable_holidays;
$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
        url : '/getHoliday',
        type : 'GET',
        dataType : 'json',
        success : function(res){
          var holiday_html = '';
          
           console.log(res);
           
            holiday_html += '<p class = "text-center" id = "holidaytitle">'+res[0].greetings+'</br><b style = "font-size:1rem;">'+res[0].title+' '+res[0].month+' '+res[0].day+' '+ new Date().getFullYear()+'</b></p>';
          
       
          $('#phil_holiday').html(holiday_html);
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }
      });
    




      $('#addHoliday').submit(function(e) {
        e.preventDefault();
       

        $.ajax({
            url: '/createHoliday',
            type: 'POST',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(res) {
         

                notif('Success ! Uploading Your Post \n ' + res.msg, 'success');
                $('#addHoliday')[0].reset();
                $('#inputHoliday').modal('hide');
                datatable_holidays.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#add_submit_holiday').show();
                datatable_holidays.ajax.reload();
            },
            error: function(){
             
            }
        });
    });

    $('#delete_holiday_form').submit(function(e) {
        e.preventDefault();
    
        $.ajax({
            url: '/deleteOneHoliday',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
        
                notif('Success ! Deleting Your Post \n ' + res.msg, 'success');
                $('#delete_holiday_form')[0].reset();
                $('#holidaydelete').modal('hide');
                datatable_holidays.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#update_submit_holiday').show();
                datatable_holidays.ajax.reload();
            },
            error: function(xhr) {
             
            }
        });
    });

    $('#updateholiday').submit(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/updateOneHoliday',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(res) {
          

                notif('Success ! Updating Your Post \n ' + res.msg, 'success');
             
                $('#updateholidaymodal').modal('hide');
                datatable_holidays.ajax.reload();
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 3000);
                $('#update_submit_holiday').show();
                datatable_holidays.ajax.reload();
            },
            error: function() {
          
            }
        });
    });



  


    datatable_holidays = $('#tb_holidays').DataTable({
        "ajax": {
            "url": '/getHolidays',
            dataSrc: 'data'
        },
        "columns": [{
            "data": "id"
        }, {
            "data": "title"
        }, {
            "data": "greetings"
        }, {
            "data": "date"
        },{
            "data": "btn"
        }]
    });

});

function holidayAction(id, action) {

    switch (action) {
        case 'view':

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getOneHoliday',
                type: 'POST',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function(res) {
                    res = res[0];
            
                    
                    $('#view_holiday_title').val(res.title);
                    $('#view_holiday_greetings').val(res.greetings);
                    $('#view_holiday_month').val(res.month);
                    $('#view_holiday_day').val(res.day);
                  
                   
                },
                error: function(xhr) {
                 
                }
            });
            $('#viewholidaymodal').modal('show');
            break;
        case 'update':
   
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getOneHoliday',
                type: 'POST',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function(res) {
                    res = res[0];
                    
                    $('#update_holiday_title').val(res.title);
                    $('#update_holiday_greetings').val(res.greetings);
                    $('#update_holiday_month').val(res.month);
                    $('#update_holiday_day').val(res.day);
                    $('#update_holiday_id').val(res.id);
                    
                },
                error: function(xhr) {
                
                }
            });
            $('#updateholidaymodal').modal('show');
            break;
        case 'delete':
       
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getOneHoliday',
                type: 'POST',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function(res) {
                    res = res[0];
                
                    $('#delete_title_holiday').html('Service Title : ' + res.title)
                    $('#delete_id_holiday').val(id);
                    $('#holidaydelete').modal('hide');
                },
                error: function(xhr) {
           
                }
            });
            $('#holidaydelete').modal('show');
            break;
        default:
    }
}