  // Load All News
  $(document).ready(function(){
    // Looad the latest news
    $.ajax({
      url : '/getLatestNews',
      type : 'GET',
      dataType : 'json',
      success : function(res){
        // console.log(res);
        var news_html = '';
        for (var i = 0; i < res.length; i++) {
          // res[i]
          news_html += '<div class="col-sm-3">'+
            '<img class="align-middle img-thumbnail rounded" onclick="viewNews('+res[i].id+')" src="/image/'+res[i].thumbnail+'" >'+
              '<p>'+res[i].subtitle+'</p>'+
            '</div>';
        }
        // console.log(news_html);
        $('#news_headlines').html(news_html);
      },
      error : function(xhr){
        console.log(xhr.responseText);
      }
    });
  });

  function viewNews(id) {
    $('#newCli_thumbnail').attr('src','#noImage');
    $('#newCli_content').html('');
    $('#showClientNews').modal('show');
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
        // console.log(res);
        $('#newCli_title').html(res.title);
        $('#newCli_thumbnail').attr('src','/image/'+res.thumbnail);
        $('#newCli_content').html(res.content) ;
        // $('#view_video').attr('src',res.video);
        // $('#view_title').val(res.title);
        // $('#view_subtitle').val(res.subtitle);
        // $('#view_content').val(res.content);
        // $('#view_created_by').val(res.created_by);
        // $('#view_updated_by').val(res.updated_by);
        // $('#view_created_at').html('Date and Time publish '+ res.created_at);
      },
      error : function(xhr){
      
      }
    });



    // $('#newCli_thumbnail').attr('src',img);



  }
