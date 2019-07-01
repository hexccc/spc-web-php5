<<<<<<< HEAD
$(document).ready(function(){
    console.log('Admin JS Here');
});
=======

$(document).ready(function(){
    console.log('Admin JS Here');
    functionName();
    $('#addNews').submit(function(e){
      e.preventDefault();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
        url : '/createNews',
        type : 'POST',
        data : new FormData(this),
        beforeSend: function(){
        console.log('Sending.. loading could be here waiting for UI');
          $('#exampleModal').modal('show');
          $('#msg_status').html('Uploading Your Post');
          $('#msg_content').html('This may take for a while if you have a video in your news');
        },
        contentType: false,
        processData:false,
        dataType : 'json',
        success : function(res){
          console.log(res);
          // $('#exampleModal').modal('hide');
          $('#exampleModal').modal('show');
          $('#msg_status').html('Success ! Uploading Your Post');
          $('#msg_content').html(res.msg);
          $('#addNews')[0].reset();

          setTimeout(function(){
            $('#exampleModal').modal('hide');
          },3000);
        },
        error : function(){
          console.log('Error in Adding News');
        }
      });
    });

});

function functionName() {

    console.log('clicked');
    $.ajax({
      url : '/getNews',
      type : 'GET',
      dataType : 'json',
      success : function(res){
        console.log(res);
      },
      error : function(xhr){
        console.log(xhr.responseText);
      }
    });

}
>>>>>>> 095665e2effb3d98d1324c458b510a4bd9d0b83c
