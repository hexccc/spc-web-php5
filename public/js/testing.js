

var datatable_events;
$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $("#signinTest").submit(function(event) {
        event.preventDefault();
     
        $.ajax({
            url: '/saveData',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                res = res[0];

          
                if (res == null) {
             
                    alert("Username or Password is wrong");

                } else {


                    switch (res.status) {
                        case 'Admin':
                        
                            window.location.href = "/pylon-admin";
                            break;


                        case null:
                        
                            window.location.href = "/";
                            break;
                    }
                }


            },
            error: function(xhr) {
             
            }

        });
    });


   


   

    





});

// 