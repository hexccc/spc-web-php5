var add_line_buss = [];




var global_url = 'http://192.168.100.207:8080';
var userSession = sessionStorage.getItem("user_id");
$(document).ready(function () {
  $('#logged').on('hide.bs.modal', function (e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
  });

    console.log('success' + userSession);

    if(userSession != 0) {
      $('#userid').val(userSession);

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

    }else{
      // $('#logged').modal('show');
    }


    $('#addnewbuss').submit(function(e){
      e.preventDefault();
      // console.log($(this).serializeArray());
      var buss_id;
      $.ajax({
        url : global_url + '/api/bplo_api',
        type : 'POST',
        crossDomain: true,
        dataType: 'json',
        data : $(this).serialize(),
        success : function(res){
          console.log(res);
          console.log(add_line_buss);
          // replace(/-/g,'')

          if (res.response) {

            buss_id = res.buss_id;

            for (var i = 0; i < add_line_buss.length; i++) {
              console.log(add_line_buss[i]);
              $.ajax({
                url : global_url + '/api/bplo_api',
                type : 'POST',
                crossDomain: true,
                dataType: 'json',
                data : {
                  'addline[buss_line]' : add_line_buss[i].busact_addline,
                  'addline[buss_line_code]' : add_line_buss[i].busact_addcode,
                  'addline[sub_category]' : add_line_buss[i].busact_addsubcat,
                  'addline[capitalization]' : add_line_buss[i].busact_addcap.replace(/,/g,''),
                  'addline[essential]' : 0,
                  'addline[non_essential]' : 0,
                  'addline[ranks]' : 'secondary',
                  'addline[buss_id]' : buss_id
                },
                success : function(res){
                  console.log(res);
                },
                error : function(xhr){

                }
              });
            }
            notify(res.msg,'success',500);
          }

        },
        error : function(xhr){
          console.log(xhr.responseText);
        }
      });



    });

$('#addlineaddRow').click(function(){
  	add_line_buss.push({
  		'busact_addline': $('#addline').val(),
  		'busact_addcode': $('#addcode').val(),
  		'busact_addsubcat': $('#addsubcat').val(),
  		'busact_addcap': $('#addcap').val().replace(/,/g, ''),
  		'rank': 'secondary'
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
    $('#addline').val('');
    $('#addcode').val('');
    $('#addsubcat').val('');
    $('#addcap').val('');


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
       sessionStorage.setItem("user_id",content[0].user_id);
       console.log(res);
      if(res.response == true){
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
