$(Document).ready(function(){

    datatable_holidays = $('#tb_holidays').DataTable({
        "ajax": {
            "method": "POST",
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

