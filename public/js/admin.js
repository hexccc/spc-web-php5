
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
        },
        contentType: false,
        processData:false,
        dataType : 'json',
        success : function(res){
          console.log(res);
          alert(res.msg);
          $('#addNews')[0].reset();
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
