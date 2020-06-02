$(Document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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
});


$("#")