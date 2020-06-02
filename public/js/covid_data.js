$(Document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

$('#tb_news').DataTable({
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
            "data": "publish date"
        }, {
            "data": "btn"
        }]
    });
});


$("#")