

  $(document).ready(function(){
console.log('success');
    $('#addnewbuss').submit(function(e){
      e.preventDefault();
    
    

      console.log($(this).serializeArray());
      $.ajax({
        url : 'http://192.168.100.207:8080/api/spc_api/',
        type : 'POST',
        crossDomain: true,
        dataType: 'json',
        data : {
          'test[name1]' : '122dasds1',
          'test[name2]' : '22asdas21'
        },
    
        success : function(res){
          res = res[0];
          console.log(res[37].name1);
    
        }
       
      });


    });




  });
