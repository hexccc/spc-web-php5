var datable_news;
$(document).ready(function(){
    datable_news = $('#tb_news').DataTable({
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

    $('#delete_news_form').submit(function(e){
      e.preventDefault();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
        url : '/deleteOneNews',
        type : 'POST',
        data : $(this).serialize(),
        dataType : 'json',
        success : function(res){
          console.log(res);
          notif('Success ! Deleting Your Post \n ' + res.msg,'success');
          $('#delete_news_form')[0].reset();
          $('#newsdelete').modal('hide');
          datable_news.ajax.reload();
          setTimeout(function(){
            $('#exampleModal').modal('hide');
          },3000);
          $('#update_submit_news').show();
          datable_news.ajax.reload();
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }
      });
    });

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
          notif('Uploading Your Post \n This may take for a while if you have a video in your news','warning',);
          $('#add_submit_news').hide();
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
          $('#add_submit_news').show();
          datable_news.ajax.reload();
        },
        error : function(){
          console.log('Error in Adding News');
        }
      });
    });

    $('#update_btn_thumb').click(function(){
      $('#update_thumb_input').trigger('click');
    });

    $("#update_thumb_input").change(function(){

        readURL(this);

    });

    $('#update_paste_btn').click(function(e){
      navigator.clipboard.readText()
        .then(text => {
          var link = 'https://www.youtube.com/embed/'+getId(text);
          $('#update_news_video').val(link);
          $('#update_yt_frame').attr('src',link);
          var iframe = document.getElementById('update_yt_frame');
          iframe.src = iframe.src;
        });
    });

    $('#add_paste_btn').click(function(e){
      navigator.clipboard.readText()
        .then(text => {
          var link = 'https://www.youtube.com/embed/'+getId(text);
          $('#add_news_video').val(link);
          // $('#update_yt_frame').attr('src',link);
          // var iframe = document.getElementById('update_yt_frame');
          // iframe.src = iframe.src;
        });
    });


    $('#updatenews').submit(function(e){
      e.preventDefault();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
        url : '/updateOneNews',
        type : 'POST',
        data : new FormData(this),
        beforeSend: function(){
          notif('Updating Your Post \n This may take for a while','warning',);
          $('#update_submit_news').hide();
        },
        contentType: false,
        processData:false,
        dataType : 'json',
        success : function(res){
          console.log(res);

          notif('Success ! Updating Your Post \n ' + res.msg,'success');
          $('#updatenews')[0].reset();
          $('#updatenewsmodal').modal('hide');
          datable_news.ajax.reload();
          setTimeout(function(){
            $('#exampleModal').modal('hide');
          },3000);
          $('#update_submit_news').show();
          datable_news.ajax.reload();
        },
        error : function(){
          console.log('Error in Adding News');
        }
      });
    });
});

function getId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        return match[2];
    } else {
        return 'error';
    }
}

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();


        reader.onload = function (e) {
            $('#update_thumb').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function changeAction(id,action) {

  switch (action) {
    case 'view':
      console.log('view');
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url : '/getOneNews',
        type : 'POST',
        data : {
          'news_id' : id
        },
        dataType : 'json',
        success : function (res) {
          res = res[0];
          console.log(res);
          $('#view_thumb').attr('src','/image/'+res.thumbnail);
          $('#view_video').attr('src',res.video);
          $('#view_title').val(res.title);
          $('#view_subtitle').val(res.subtitle);
          $('#view_content').val(res.content);
          $('#view_created_by').val(res.created_by);
          $('#view_updated_by').val(res.updated_by);
          $('#view_created_at').html('Date and Time publish '+ res.created_at);
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }
      });
      $('#viewnewsmodal').modal('show');
      break;
    case 'update':
    console.log('update');
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
      $.ajax({
        url : '/getOneNews',
        type : 'POST',
        data : {
          'news_id' : id
        },
        dataType : 'json',
        success : function (res) {
          res = res[0];
          // $('#update_thumb_input').val(res.thumbnail);
          $('#update_created_at').html(' : Publish Date '+res.created_at);
          $('#update_thumb').attr('src','image/'+res.thumbnail);
          $('#update_yt_frame').attr('src',res.video);
          $('#update_news_video').val(res.video);
          $('#update_video').attr('src','videos/'+res.video);
          var iframe = document.getElementById('update_yt_frame');
          iframe.src = iframe.src;
          $('#update_title').val(res.title);
          $('#update_subtitle').val(res.subtitle);
          $('#update_content').val(res.content);
          $('#update_created_by').val(res.created_by);
          $('#update_updated_by').val(res.updated_by);
          $('#update_news_id').val(res.id);
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }
      });
      $('#updatenewsmodal').modal('show');
      break;
    case 'delete':
    console.log('delete');
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
      $.ajax({
        url : '/getOneNews',
        type : 'POST',
        data : {
          'news_id' : id
        },
        dataType : 'json',
        success : function (res) {
          res = res[0];
          console.log(res);
          $('#delete_title_news').html('News Title : '+res.title)
          $('#delete_id_news').val(id);
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }
      });
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
