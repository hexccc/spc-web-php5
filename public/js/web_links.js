$(Document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    web_links();
});

function web_links(){
    $('#web_links').DataTable({
        "ajax": {
            "method": "POST",
            "url": '/getWebLink',
            dataSrc: 'data'
        },
        "columns": [{
            "data": "name"
        }, {
            "data": "link"
        }, {
            "data": "btn"
        }]
    });

}


$("#addWebLink").submit(function(e){
    e.preventDefault();
   $.ajax({
       type: "POST",
       url: "/addWebLink",
       data: $(this).serialize(),
       dataType: "json",
       success: function (res) {
        $("#weblink").modal("hide");
        $("#web_links").dataTable().fnDestroy()
        web_links();
       }
   });

});


$("#update_web_link").submit(function(e){
   
    e.preventDefault();
    console.log($(this).serialize());
    $.ajax({
        type: "POST",
        url: "/update_one_link",
        data: $(this).serialize(),
        dataType: "json",
        success: function (res) {
            $("#updateweblink").modal("hide");
            $("#web_links").dataTable().fnDestroy()
            web_links();
        }
    });
});

function webAction(id, action) {
        
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
                url: '/get_one_link',
                type: 'POST',
                data: {'id': id},
                dataType: 'json',
                success: function(res) {
                    res = res[0];
               
                
                    $('#update_spc_web_name').val(res.name);
                    $('#update_spc_web_link').val(res.link);
                    $("#update_web_id").val(id);
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
            $('#updateweblink').modal('show');
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