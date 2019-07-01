$(document).ready(function(){
    var datable_news = $('#tb_news').DataTable({
      "ajax" : {
        "url" : '/getNews',
        dataSrc : 'data'
      },
      "columns" : [{
          "data" : "id"
      }, {
          "data" : "title"
      }, {
          "data" : "subtitle"
      }, {
          "data" : "created_at"
      }, {
          "data" : "updated_at"
      }, {
          "data" : "btn"
      }]
    });
    console.log('Admin JS Here');

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
          notif('Uploading Your Post \n This may take for a while if you have a video in your news','warning',)
        },
        contentType: false,
        processData:false,
        dataType : 'json',
        success : function(res){
          console.log(res);

          notif('Success ! Uploading Your Post \n ' + res.msg,'success');
          $('#addNews')[0].reset();
          $('#inputnews').modal('hide');
          datable_news.ajax.reload();
          setTimeout(function(){
            $('#exampleModal').modal('hide');
          },3000);
        },
        error : function(){
          console.log('Error in Adding News');
        }
      });
    });

    $('#action_btn').change(function(){
      switch ($('#action_btn').val()) {
        case 'view':
          $('#viewnewsmodal').modal('show');
          break;
        case 'update':
          $('#updatenewsmodal').modal('show');
          break;
        case 'delete':
          $('#newsdelete').modal('show');
          break;
        default:
      }
    });

});

function changeAction(id) {
  switch ($('#action_btn').val()) {
    case 'view':
      console.log(id);
      $('#viewnewsmodal').modal('show');
      break;
    case 'update':
      console.log(id);
      $('#updatenewsmodal').modal('show');
      break;
    case 'delete':
      console.log(id);
      $('#newsdelete').modal('show');
      break;
    default:
  }
}
function notif(msg,type,responseTime) {
  setTimeout(function() {
                   $.bootstrapGrowl(msg, {
                       type: type,
                       align: 'center',
                       width: 'auto',
                       allow_dismiss: true
                   });
               }, responseTime);


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
