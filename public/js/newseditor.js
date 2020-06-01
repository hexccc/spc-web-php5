$(Document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

$('#tb_news').DataTable({
        "ajax": {
            "method": "POST",
            "url": '/getNews',
            dataSrc: 'data'
        },
        "columns": [{
            "data": "id"
        }, {
            "data": "title"
        }, {
            "data": "subtitle"
        }, {
            "data": "created_at"
        }, {
            "data": "updated_at"
        }, {
            "data": "btn"
        }]
    });


});