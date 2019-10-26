

var datatable_events;
$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $("#signinTest").submit(function(e){
        e.preventDefault();
 
     
        $.ajax({
            url: '/logindatanow',
            type: 'POST',
  
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
         
                    console.log(res);
                

                    if(res == 'invalid'){

                        alert('Invalid Username And Password')
                    }else{
                            res = res[0]

                            switch (res.status) {
                                case 'Admin':
                                          window.location.href = "/pylon-admin";
                                    break;
                                    
                            
                                default:

                                    break;
                            }




                    }

                           
                // window.location.href = "/pylon-admin";
                // alert('username password error');
                // $('#username').val(null);
                // $('#password').val(null);

            },
            error: function(xhr) {
               
        console.log(xhr);
        
              
            }

        });
    });



   


   

    





});

// 