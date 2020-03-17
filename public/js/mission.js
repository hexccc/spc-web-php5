var datatable_mission;
$(document).ready(function () {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


                $.ajax({
                    type: "GET",
                    url: "/getmission",
                    data: "data",
                    dataType: "json",
                    success: function (res) {      
console.log(res);
res = res[0];
$('#missionarea').val(res.description);



                    }
                });
                $.ajax({
                    type: "GET",
                    url: "/updatemission",
                    data: "data",
                    dataType: "json",
                    success: function (res) {
                        console.log(res);
                        res = res[0];
                        $('#missionarea').val(1);



                    }
                });
                



})