$(Document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    covidTable();
});

function covidTable(){
    $('#covid_data_table').DataTable({
        "ajax": {
            "method": "POST",
            "url": '/getCovid',
            dataSrc: 'data'
        },
        "columns": [{
            "data": "active"
        }, {
            "data": "recoveries"
        }, {
            "data": "death"
        }, {
            "data": "total_cases"
        },{
            "data": "publish_date"
        }, {
            "data": "btn"
        }]
    });

}


$("#addCovid").submit(function(e){
    e.preventDefault();
   $.ajax({
       type: "POST",
       url: "/addCovid",
       data: $(this).serialize(),
       dataType: "json",
       success: function (res) {
        $("#coviddata").modal("hide");
        $("#covid_data_table").dataTable().fnDestroy()
        covidTable();
       }
   });

});


$("#updateCovid").submit(function(e){
   
    e.preventDefault();
    console.log($(this).serialize());
    $.ajax({
        type: "POST",
        url: "/update_one_covid",
        data: $(this).serialize(),
        dataType: "json",
        success: function (res) {
            $("#updatecoviddata").modal("hide");
            $("#covid_data_table").dataTable().fnDestroy()
        covidTable();
        }
    });
});

function covidAction(id, action) {
        
    switch (action) {
        case 'view':
  
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/get_one_covid',
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
                url: '/get_one_covid',
                type: 'POST',
                data: {'id': id},
                dataType: 'json',
                success: function(res) {
                    res = res[0];
               
                
                    $('#update_active_case').val(res.active_cases);
                    $('#update_recoveries').val(res.recoveries);
                    $('#update_death').val(res.deaths);
                    $('#update_total_cases').val(res.total_cases);
                    $("#update_covid_id").val(id);
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
            $('#updatecoviddata').modal('show');
            break;
        case 'delete':
           
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/get_one_covid',
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