var add_line_buss = [];

// var global_url = 'http://192.168.100.207:8080';
var global_url = 'http://795a28e3.ngrok.io/';

var userSession = sessionStorage.getItem("user_id");
$(document).ready(function () {
  $('#logged').on('hide.bs.modal', function (e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
  });

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
            var data = '';
              $('#buss_list').html('');
            // data = "<option value=''>Businesses</option>";
            for(var i = 0 ; i<content.length; i++){
              const elem = content[i];
              data += "<option value='"+elem.id+"'>"+elem.buss_name+"</option>";
            }
            $('#buss_list').html(data);

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

  }
    else{
      // $('#logged').modal('show');
    }

    $('#btn_ammends').click(function(){
      var userSession = sessionStorage.getItem("user_id");
          $.ajax({
            url : global_url+'/api/bplo_api/' + userSession,
            type : 'GET',
            dataType : 'json',
            success : function (res) {
              content = res.content;
              console.log(res);
              window.location.href = "/ammendments";

              if (res.reponse == true){
                // sessionStorage.setItem("user_id",content.user_id);
           
          }
            notify(res.msg, 'info',500)
        },

        error: function(xhr)
        {
         
        }

  });
});

$('#btn_renewal').click(function(){
 var bussId = sessionStorage.getItem("bussId");
 var buss_id = $('#buss_id').val();

 var buss_profile ="bp.user_id,bp.buss_name,bp.tin_no,bp.buss_mop,bp.dt_apply,bp.tin_no,bp.refno,bp.dti_no,bp.dti_dt_reg,bp.buss_type";
 var buss_profile2 ="bp.gov_entity,bp.buss_area,bp.buss_total_emp,bp.male_emp,bp.female_emp,bp.unit_vehicle,bp.emp_in_lgu";
 var buss_profile3 ="bp.amendment,bp.amendment_to,bp.buss_email,bp.buss_telno,bp.buss_phone,bp.buss_address,bp.buss_postcode,bp.is_rented";
 var owners_profile ="op.first_name,op.last_name,op.middle_name,op.address,op.mobile,op.tel_no,op.emaill,op.postcode";
 var buss_line ="bl.buss_line,bl.buss_line_code,bl.sub_category,bl.no_units,bl.capitalization,bl.essential,bl.non_essential";
 var taxpayer = "tp.last_name as tax_lname,tp.first_name as tax_fname,tp.middle_name as tax_mname,tp.franchise";

     $.ajax({
       url : global_url+'/api/bplo_api/dynamic/',
       type : 'POST',
       data : {
         column_names : buss_profile+","+buss_profile2+","+buss_profile3+","+owners_profile+","+buss_line+","+taxpayer,
         // column_names : "*",
         table_name : 'buss_profile bp',
         "join[0]" : "owners_profile op",
         "type[0]" : "inner",
         "ids[0]" : "bp.buss_id = op.buss_id",
         "join[1]" : "buss_line bl",
         "type[1]" : "inner",
         "ids[1]" : "bp.buss_id = bl.buss_id",
         "join[2]" : "tax_payer tp",
         "type[2]" : "inner",
         "ids[2]" : "bp.buss_id = tp.buss_id",
         "where[0]" : "bp.buss_id",
         "pars[0]" : buss_id,
         "where[1]" : "bl.ranks",
         "pars[1]" : "primary"
       },
       dataType : 'json',
       success : function (res) {

          content = res.content;
          if (res.response == true)
          {
          $('#renewal_form').modal('show');
          for (var i = 0; i < content.length; i++) {
            const res = content[i];


          $('#modepayment').html('&nbsp; : ' + res.buss_mop);
          $('#date_application').html('&nbsp; : ' + res.dt_apply);
          $('#tin_no').html('&nbsp; : ' + res.tin_no);
          $('#dti_sec').html('&nbsp; : ' + res.dti_dt_reg);
          $('#dti_sec_no'). html('&nbsp; : ' + res.dti_no);
          $('#reference'). html('&nbsp; : ' + res.refno);
          $('#busstype'). html('&nbsp; : ' + res.buss_type);
          $('#ammendfrom'). html('&nbsp; : ' + res.amendment);
          $('#ammento'). html('&nbsp; : ' + res.amendment_to);
////////////////////////
// bussiness information
////////////////////////
          $('#taxpayer_name'). html('&nbsp; : ' + res.tax_lname +" "+ res.tax_fname);
          // $('#taxpayer_mname'). html('&nbsp; : ' + res.tax_fname);
          $('#franchise'). html('&nbsp; : ' + res.franchise);
          $('#busisness_name'). html('&nbsp; : ' + res.buss_name);
          $('#buss_address'). html('&nbsp; : ' + res.buss_address);
          $('#buss_postal'). html('&nbsp; : ' + res.buss_postcode);
          $('#buss_email'). html('&nbsp; : ' + res.buss_email);
          $('#buss_tel'). html('&nbsp; : ' + res.buss_telno);
          $('#buss_mobile'). html('&nbsp; : ' + res.buss_phone);
////////////////////////
// owners information
////////////////////////
          $('#owner_name'). html('&nbsp; : ' + res.last_name +" "+ res.first_name + " ");
          $('#owner_address'). html('&nbsp; : ' + res.address);
          $('#owner_email'). html('&nbsp; : ' + res.email);
          $('#owner_tel'). html('&nbsp; : ' + res.tel_no);
          $('#owner_mobile'). html('&nbsp; : ' + res.mobile);
          $('#owner_area'). html('&nbsp; : ' + res.buss_area);
          $('#owner_emp'). html('&nbsp; : ' + res.buss_total_emp);
          $('#owner_unit'). html('&nbsp; : ' + res.unit_vehicle);
          $('#total_emp'). html('&nbsp; Male : ' + res.male_emp +' &nbsp; Female : ' + res.female_emp );
/////////////////////////
////////// business line
////////////////////////
          var data = "<td>"+res.buss_line+"</td>";
          data += "<td>"+res.buss_line_code+"</td>";
          data += "<td>"+res.sub_category+"</td>";
          data += "<td>"+res.no_units+"</td>";
          data += "<td>"+res.capitalization+"</td>";
        $('#business_act').html(data);

        $.ajax({
          url : global_url+'/api/bplo_api/dynamic/',
          type : 'POST',
          data : {
            column_names : buss_line+","+buss_profile,
            table_name : 'buss_profile bp',
            "join[0]" : "buss_line bl",
            "type[0]" : "inner",
            "ids[0]" : "bp.buss_id = bl.buss_id",
            "where[0]" : "bp.buss_id",
            "pars[0]" : bussId,
            "where[1]" : "bl.ranks",
            "pars[1]" : "secondary"
          },
          dataType : 'json',
          success : function (res) {

             var content = res.content;
              var data = "<tr>"
             for( var i = 0; i<content.length; i++ ){
              const res = content[i];

             data += "<tr><td>"+res.buss_line+"</td>";
             data += "<td>"+res.buss_line_code+"</td>";
             data += "<td>"+res.sub_category+"</td>";
             data += "<td>"+res.no_units+"</td>";
             data += "<td>"+res.essential+"</td>";
             data += "<td>"+res.non_essential+"</td>";
             data += "<td>"+res.capitalization+"</td>";
             // data += "<td>"+res.capitalization+"</td>";
             data += "<tr>";
            }
                 $('#add_bussline').html(data);
          }
        });


////////////////////////
// Lessor's information
////////////////////////
    if(res.is_rented == 1){
      var lessor_profile ="lp.email as lessor_email,lp.first_name,lp.last_name,lp.middle_name,lp.address,lp.monthly_rental,lp.mobile_no,lp.tel_no";
            $('#lessors').show();
            $.ajax({
            url : global_url+'/api/bplo_api/dynamic/',
            type : 'POST',
            data : {
              column_names :lessor_profile,
              table_name : 'lessor_profile lp',
              "where[0]" : "lp.buss_id",
              "pars[0]" : bussId
            },
            dataType : 'json',
            success : function (res) {

              for (var i = 0; i < content.length; i++) {
                const res = content[i];
               $('#lessor_name'). html('&nbsp; : ' + res.first_name +" "+ res.last_name );
               $('#lessor_address'). html('&nbsp; : ' + res.address);
               $('#monthly_rental'). html('&nbsp; : ' + res.monthly_rental);
               $('#lessor_email'). html('&nbsp; : ' + res.email);
               $('#lessor_tel'). html('&nbsp; : ' + res.telno);
               $('#lessor_mobile'). html('&nbsp; : ' + res.mobile);
               $('#lessor_emerg'). html('&nbsp; : ' + res.buss_total_emp);
               $('#emerg_contact'). html('&nbsp; : ' + res.unit_vehicle);
            }
          },
          error: function(xhr)
          {
       
            
          }
        });
        }
        else {
        $('#lessors').hide();
   
        
      }
    }
    }
    },
       error: function(xhr)
       {
    
        
       }
     });

});

//DISPLAY BUSSINESS LISTS
$("#buss_list").on("click keyup",function(){
      var buss = $(".buss_list option:selected").val();
      $('#buss_id').val(buss);
      $('#userid').val(userSession);

      $.ajax({
        url : global_url+'/api/bplo_api/' + userSession,
        type : 'GET',
        dataType : 'json',
        success : function (res) {

          content = res.content;
          // console.log(res);
          for (var i = 0; i < content.length; i++) {
            const elem = content[i];
            if($("#buss_list").val() == elem.id){
              sessionStorage.setItem("bussId",elem.id);
              $('#buss_name').html('&nbsp; : ' + elem.buss_name);
              $('#date_approve').html('&nbsp; : ' + elem.date_approve);
              $('#owner_name').html('&nbsp; : ' + elem.owner_name);
              $('#date_payment').html('&nbsp; : ' + elem.date_payment);
              $('#buss_code').html('&nbsp; : ' + elem.buss_code);
              $('#buss_line').html('&nbsp; : ' + elem.buss_line);
            }
          }
          if (content != null) {
            //
          }
        },
        error : function(xhr){
          // console.log(xhr.responseText);
        }
      });

      var bussId = $('#buss_id').val();
          $.ajax({
          url: "/bploform",
          method: "GET",
          data: {bussId:$('#buss_id').val()},
          datatype:'JSON',
          success: function(res){
          },
          error: function (res)
          {
            console.log(res);
            console.log("aw");
          }
        });
        $.get('/bploform',function($user){
        });

    });

//ADDITIONAL LINE OF BUSINESS
$('#addlineRenewRow').click(function(){
  	add_line_buss.push({
  		'busact_addline': $('#addline').val(),
  		'busact_addcode': $('#addcode').val(),
  		'busact_addsubcat': $('#addsubcat').val(),
  		'busact_addcap': $('#addcap').val().replace(/,/g, ''),
  		'rank': 'secondary'
  	});

  console.log(add_line_buss);

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
    $('#addunits').val('');
    $('#addsubcat').val('');
    $('#addcap').val('');


    });

$('#renewbuss').submit(function(e){
  e.preventDefault();
  console.log($(this).serializeArray());

    $.ajax({
      url:'/renewal',
      type:'POST',
      data : $(this).serializeArray(),
      success : function(res){
      console.log(res);},
      error: function(xhr)
      {
        console.log("error");
      }
    })

});
});
//end of document ready function


function notify(msg, type,responseTime) {
	setTimeout(function () {
		$.bootstrapGrowl(msg, {
			type: type,
			align: 'right',
			width: 'auto',
			allow_dismiss: false
		});
	}, responseTime);}
