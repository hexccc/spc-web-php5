var datatable_events;
$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $("#signinTest").on('submit', function(e){
        e.preventDefault();
       
     
        $.ajax({
            url: '/logindatanow',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                    console.log(res);
                

                    if(res == 'invalid'){

                        alert('Invalid Username And Password')
                    }else{
                            res = res[0]

                            switch (res.status) {
                                case '0':
                                        window.location.href = "/pylon-admin";
                                    break;
                                    case '1':
                                        window.location.href = "/pylon-admin";
                                        case '2':
                                        window.location.href = "/pylon-admin";
                                  break;
                                    
                            }


                    }
            },
            error: function(xhr) {
               
         console.log(xhr);
        
              
            }

        });
    });




});

// 