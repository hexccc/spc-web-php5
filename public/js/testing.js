$(document).ready(function() {
    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    $("#signinTest").submit(function(event) {
        event.preventDefault();
        console.log($("#signinTest").serializeArray());
        $.ajax({
            url: '/saveData',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                res = res[0];


                if (res == null) {
                    console.log('invalid username or password');
                    alert("Username or Password is wrong");

                } else {


                    switch (res.status) {
                        case 'Admin':
                            console.log('login');
                            window.location.href = "/pylon-admin";
                            break;


                        case null:
                            console.log('failed');
                            window.location.href = "/";
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