var datatable_events;
$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $("#signinTest").submit(function(e){
        e.preventDefault();
        console.log($(this).serialize());
     
        $.ajax({
            url: '/logindatanow',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data) {
                    console.log(data);
                    if(data.message == "loginSuccess")
                    {
                      switch (data.role) {
                        case "0":
                                window.location.href = "/pylon-admin";
                            break;
                           
                            
                    }
                    }
                    else if(data.message == "usernameError")
                    {
                      Swal.fire({
                        icon: 'error',
                        title: 'Username Error',
                        text: 'Please Enter the Correct Username',
                        
                      })
                    }
                    else if(data.message == "passwordError")
                    {
                      Swal.fire({
                        icon: 'error',
                        title: 'Password Error',
                        text: 'Please Enter the Correct Password',
                        
                      })
                    }
                    else if(data.message == "accountLocked")
                    {
                      Swal.fire({
                        icon: 'error',
                        title: 'Account is still locked',
                        text: 'Please wait for the Barangay Employee to unlock your account',
                        
                      })
                    }
                    else{
                      Swal.fire({
                        icon: 'error',
                        title: 'Server Error',
                        text: 'Something went wrong!',
                        footer: 'Report this issue'
                      })
                    }

                  
            },
            error: function(xhr) {
               
         console.log(xhr);
        
              
            }

        });
    });




});

// 