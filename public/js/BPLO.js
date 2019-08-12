var add_line_buss = [];

$(document).ready(function () {
  $('#logged').on('hide.bs.modal', function (e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
  });

    console.log('success');
    $('#addnewbuss').submit(function(e){
      e.preventDefault();

      // console.log(add_line_buss);
      // console.log($(this).serializeArray());
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
          console.log(res.msg);

          
        },
        error: function()
          {
            console.log("error");
          }
      });


    });

$('#addlineaddRow').click(function(){
  	add_line_buss.push({
  		'new[busact_addline]': $('#addline').val(),
  		'new[busact_addcode]': $('#addcode').val(),
  		'new[busact_addsubcat]': $('#addsubcat').val(),
  		'new[busact_addcap]': $('#addcap').val().replace(/,/g, ''),
  		'new[rank]': 'secondary'
  	});

      // console.log(add_line_buss);

    "use strict";
    var table = document.getElementById("addnewline");

    var row = document.createElement("tr");
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
    var td3 = document.createElement("td");
    var td4 = document.createElement("td");
    var td5 = document.createElement("td");

    td1.innerHTML = document.getElementById("addline").value;
    td2.innerHTML = document.getElementById("addcode").value;
    td3.innerHTML = document.getElementById("addsubcat").value;
    td4.innerHTML = document.getElementById("addcap").value;
    // onclick="addlinerowdelete(this)
    // id ="addlinerowdelete"
    td5.innerHTML = '<a class="btn btn-sm btn-warning" onclick="addlinerowdelete(this)" >Delete</a>';

    row.appendChild(td1);
    row.appendChild(td2);
    row.appendChild(td3);
    row.appendChild(td4);
    row.appendChild(td5);

    table.children[0].appendChild(row);
    $('#addnewbuss')[0].reset();


});

$('#addReg').submit(function(e){
    e.preventDefault();

     console.log($(this).serialize());
    $.ajax({
      url : 'http://192.168.100.207:8080/api/spc_api/',
      type : 'POST',
      crossDomain: true,
      dataType: 'json',
      data :
        $(this).serializeArray()
      ,
      success : function(res){
<<<<<<< HEAD
    notify(res.msg, 'success',500) 
    $('#addReg')[0].reset();
  
      },
      error: function()
        {
          notify('Regestration Failed', 'danger',500) 
    
=======
        console.log(res);
          notify('Registration Done. Please check your email for verification.', 'success');

      },
      error: function()
        {
          console.log("error");
          notify('Error in Adding an Account', 'danger');
>>>>>>> 678562c3f11bf389754eb26378f9b73a39dd9621
        }
    });
});         

$('#signinReg').submit(function(e){

    e.preventDefault();
    console.log($(this).serializeArray());
   $.ajax({
     url : 'http://192.168.100.207:8080/api/login_api/',
     type : 'POST',
     crossDomain: true,
     dataType: 'json',
<<<<<<< HEAD
     data :
       $(this).serialize()

     ,
     success : function(res){


      if(res.response == true){
        console.log('123');
        
        window.location.href = "/bploform";
      }

      notify(res.msg, 'info',500) 
=======
     data :$(this).serializeArray(),
     success : function(res){
       console.log(res);
       notify('Login Successfully', 'success');
       // $('#logged').modal('hide');
>>>>>>> 678562c3f11bf389754eb26378f9b73a39dd9621
     },
     error: function(msgres)
       {
<<<<<<< HEAD
  
    
=======
         notify('Error in Logging in an Account', 'danger');
        // window.location = "/bploform";
>>>>>>> 678562c3f11bf389754eb26378f9b73a39dd9621
       }
   });
});


});

  function addlinerowdelete(r){
  var i = r.parentNode.parentNode.rowIndex;
   document.getElementById("addnewline").deleteRow(i);
   add_line_buss.splice(i-1,1);
   // delete add_line_buss[i];
   console.log(i);
}

function notify(msg, type,responseTime) {
	setTimeout(function () {
		$.bootstrapGrowl(msg, {
			type: type,
			align: 'right',
			width: 'auto',
			allow_dismiss: false
		});
	}, responseTime);}



