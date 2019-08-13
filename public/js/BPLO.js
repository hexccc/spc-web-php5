var add_line_buss = [];




var global_url = 'http://32f3d634.ngrok.io';
var userSession = sessionStorage.getItem("user_id");
$(document).ready(function () {
  $('#logged').on('hide.bs.modal', function (e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
  });

    // console.log('success' + userSession);

    if(userSession !== null) {

      $.ajax({
        url : global_url+'/api/bplo_api/' + userSession,
        type : 'GET',
        dataType : 'json',
        success : function (res) {
          // console.log(res);
          content = res.content;

          if (content != null) {
            // console.log('not null');
            $('#buss_name').html('&nbsp; : ' + content[0].buss_name);
            $('#date_approve').html('&nbsp; : ' + (content[0].date_approve == null) ? '&nbsp; : Not Approve Yet' : content[0].date_approve);
            $('#owner_name').html('&nbsp; : ' + content[0].owner_name);
            $('#date_payment').html('&nbsp; : ' + (content[0].date_payment == null) ? '&nbsp; : Not Approve Yet' : content[0].date_payment);
            $('#buss_code').html('&nbsp; : ' + content[0].buss_code);
            $('#buss_line').html('&nbsp; : ' + content[0].buss_line);
            notify(res.msg,'success',500);
          }

        },
        error : function(xhr){
          // console.log(xhr.responseText);
        }
      });
      console.log('this is my '+userSession);

    }else{
      $('#logged').modal('show');
      console.log('null');
    }

    (userSession == 0) ? $('#logged').modal('show') : console.log('not null');


    $('#addnewbuss').submit(function(e){
      e.preventDefault();
      // add_line_buss.push();



      console.table($(this).serializeArray());
      // console.log();

    });

$('#addlineaddRow').click(function(){
  	add_line_buss.push({
  		'addline[busact_addline]': $('#addline').val(),
  		'addline[busact_addcode]': $('#addcode').val(),
  		'addline[busact_addsubcat]': $('#addsubcat').val(),
  		'addline[busact_addcap]': $('#addcap').val().replace(/,/g, ''),
  		'addline[rank]': 'secondary'
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
      url : global_url+'/api/spc_api/',
      type : 'POST',
      crossDomain: true,
      dataType: 'json',
      data :
        $(this).serializeArray()
      ,
      success : function(res){

    notify(res.msg, 'success',500)
    $('#addReg')[0].reset();

      },
      error: function()
        {
          notify('Regestration Failed', 'danger',500)

        }
    });
});

$('#signinReg').submit(function(e){

    e.preventDefault();
    console.log($(this).serializeArray());
   $.ajax({
     url : global_url+'/api/login_api/',
     type : 'POST',
     crossDomain: true,
     dataType: 'json',
     data :
       $(this).serialize()
     ,
     success : function(res){
       content = res.content;

       // console.log();
       // console.log(res);
      if(res.response == true){
        sessionStorage.setItem("user_id",content[0].user_id);
        console.log('123');
        window.location.href = "/bploform";
      }

      notify(res.msg, 'info',500)
     },
     error: function(msgres)
       {
         notify('Error in Logging in an Account', 'danger');
        // window.location = "/bploform";
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


  function logout() {
    sessionStorage.setItem("user_id",0);
      window.location.href = "/signin_requestor";
  }
