$(document).ready(function(){
    $('#tb_news').DataTable();
    console.log('Admin JS Here');
    // functionName();
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
          notif('Uploading Your Post \n This may take for a while if you have a video in your news','warning')
        },
        contentType: false,
        processData:false,
        dataType : 'json',
        success : function(res){
          console.log(res);

          notif('Success ! Uploading Your Post \n ' + res.msg,'success');
          $('#addNews')[0].reset();
          data_table.ajax.reload();
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
function notif(msg,type) {
  setTimeout(function() {
                   $.bootstrapGrowl(msg, {
                       type: type,
                       align: 'center',
                       width: 'auto',
                       allow_dismiss: true
                   });
               }, 1000);


}

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
