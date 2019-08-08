  $(document).ready(function(){
console.log('success');
    $('#addnewbuss').submit(function(e){
      e.preventDefault();

      console.log($(this).serializeArray());
      $.ajax({
        url : 'http://192.168.100.207:8080/api/api/',
        type : 'POST',
        crossDomain: true,
        dataType: 'json',
        data : {
          name1 : 'tes123123ting',
          name2 : 'as1231232d'
        },
    
        success : function(res){
          console.log(res);
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }
      });


    });




  });
