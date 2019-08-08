  $(document).ready(function(){


console.log('success');
    $('#addnewbuss').submit(function(e){
      e.preventDefault();

      $.ajaxSetup({

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Access-Control-Allow-Credentials' : true,
        'Access-Control-Allow-Origin':'*',
        'Access-Control-Allow-Methods':'POST',
        'Access-Control-Allow-Headers':'application/json'
      }
    });
      console.log($(this).serializeArray());
      $.ajax({
        url : 'https://0dd5f128.ngrok.io/api/NewBussiness_API',
        type : 'GET',
        crossDomain: true,
        dataType: 'jsonp',
        data : $(this).serialize(),
        // dataType : 'json',
        success : function(res){
          console.log(res);
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }
      });
//       console.log('good');

// });
// $.ajax({
//   url : '/addnewbuss',
//   type : 'POST',
//   data : $(this).serialize(),
//   dataType : 'json',
//   success : function(res){
//   console.log(res);
//
//   },
//   error : function(xhr){
//     console.log(xhr.responseText);
//   }
// });



    });




  });
