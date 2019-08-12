var add_line_buss = [];

$(document).ready(function () {


  $('#logged').on('hide.bs.modal', function (e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
  });
  // $.ajaxSetup({
  //   headers: {
  //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   }
  // });
    console.log('success');
    $('#addnewbuss').submit(function(e){
      e.preventDefault();

      console.log(add_line_buss);
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
          console.log(res[37].name1);
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
    // console.log($('#addReg').serializeArray());
    // $.ajax({
    //   url:'/addReg',
    //   type:'POST',
    //   data: $(this).serialize(),
    //   datatype: 'json',
    //   success : function(res)
    //   {
    //     console.log(res);
    //       notify('Added Successfully', 'success');
    //   },
    //   error : function()
    //   {
    //     console.log("error");
    //     notify('Error in Adding Account', 'danger');
    //
    //   }
    // });

     console.log($(this).serialize());
    $.ajax({
      url : 'http://192.168.100.207:8080/api/spc_api/',
      type : 'POST',
      crossDomain: true,
      dataType: 'json',
      data :
        $(this).serialize()
      ,
      success : function(res){
        console.log(res);
      },
      error: function()
        {
          console.log("error");
        }
    });
});

$('#signinReg').submit(function(e){
    e.preventDefault();
    console.log($(this).serialize());
   $.ajax({
     url : 'http://192.168.100.207:8080/api/login_api/',
     type : 'POST',
     crossDomain: true,
     dataType: 'json',
     data :
       $(this).serialize()
     ,
     success : function(res){
       console.log(res);
     },
     error: function()
       {
         console.log("error");
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
