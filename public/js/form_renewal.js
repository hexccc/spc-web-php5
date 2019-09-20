var add_line_buss = [];

// var global_url = 'http://192.168.100.207:8080';
// var global_url = 'http://795a28e3.ngrok.io/';

var userSession = sessionStorage.getItem("user_id");
$(document).ready(function () {
  $('#logged').on('hide.bs.modal', function (e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
  });
  $('#btn_renewal').prop('disabled', true);
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
          }
            notify(res.msg, 'info',500)
        },

        error: function(xhr)
        {
          console.log("error");
        }
  });
});

$('#btn_renewal').click(function(){
 var bussId = sessionStorage.getItem("bussId");
 var buss_id = $('#buss_id').val();

 var buss_profile ="bp.user_id,bp.buss_name,bp.tin_no,bp.buss_mop,bp.dt_apply,bp.tin_no,bp.refno,bp.dti_no,bp.dti_dt_reg,bp.buss_type";
 var buss_profile2 ="bp.gov_entity,bp.buss_area,bp.buss_total_emp,bp.male_emp,bp.female_emp,bp.unit_vehicle,bp.emp_in_lgu";
 var buss_profile3 ="bp.buss_curr_gross,bp.amendment,bp.amendment_to,bp.buss_email,bp.buss_telno,bp.buss_phone,bp.buss_address,bp.buss_postcode,bp.is_rented";
 var owners_profile ="op.first_name,op.last_name,op.middle_name,op.address,op.mobile,op.tel_no,op.emaill,op.postcode";
 var buss_line ="bl.id as bussline_id,bl.buss_line,bl.buss_line_code,bl.sub_category,bl.no_units,bl.capitalization,bl.essential,bl.non_essential";
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
          $('#owner_email'). html('&nbsp; : ' + res.emaill);
          $('#owner_tel'). html('&nbsp; : ' + res.tel_no);
          $('#owner_mobile'). html('&nbsp; : ' + res.mobile);
          $('#owner_area'). html('&nbsp; : ' + res.buss_area);
          $('#owner_emp'). html('&nbsp; : ' + res.buss_total_emp);
          $('#owner_unit'). html('&nbsp; : ' + res.unit_vehicle);
          $('#total_emp'). html('&nbsp; Male : ' + res.male_emp +' &nbsp; Female : ' + res.female_emp );

          $('#curr_gross'). html('&nbsp; : ' + res.buss_curr_gross);

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
              var data = "<tr id ='tr_"+res.bussline_id+"'>"
             for( var i = 0; i<content.length; i++ ){
              const res = content[i];

              data += "<td><input type='text' id='bussline"+res.bussline_id+"' name='renew[upbuss_line]' class='form-control as_text' value = '"+res.buss_line+"' ></td>";
              data += "<td><input type='text' id='bussline_code"+res.bussline_id+"' name='renew[upbuss_line_code]' class='form-control as_text' value = '"+res.buss_line_code+"' readonly></td>";
              data += "<td><input type='text' id='sub"+res.bussline_id+"' name='renew[upsub_category]' class='form-control as_text' value = '"+res.sub_category+"' readonly></td>";
              data += "<td><input type='text' id='unt"+res.bussline_id+"' name='renew[upno_units]' class='form-control as_text' value = '"+res.no_units+"' readonly></td>";
              data += "<td><input type='text' id='ess"+res.bussline_id+"' name='renew[upessential]' class='form-control as_text' value = '"+res.essential+"' readonly></td>";
              data += "<td><input type='text' id='noness"+res.bussline_id+"' name='renew[upnon_essential]' class='form-control as_text' value = '"+res.non_essential+"' readonly></td>";
              data += "<td><input type='text' id='cap"+res.bussline_id+"' name='renew[upcapitalization]' class='form-control as_text' value = '"+res.capitalization+"' readonly></td>";

             data += "<td><input type='button' role ='button' class='w-100 btn btn-primary btn-sm edit_renew'  id='"+res.bussline_id+"' value = 'Edit'>";
             data += "<input type='button' role='button' class='w-100 btn btn-primary btn-sm del_renew' id='"+res.bussline_id+"' value = 'Delete'></td>";
             data += "<tr>";
            }
            $('#add_bussline').html(data);
             // onclick='return confirm('Are You Sure You Want to Delete this Business?')'
          }
        });
////////////////////////
// Lessor's information
////////////////////////
    if(res.is_rented == 1){
      var lessor_profile ="lp.email as lessor_email,lp.first_name as lessor_fname,lp.last_name as lessor_lname,lp.middle_name as lessor_mname,lp.address as lessor_address,lp.monthly_rental,lp.mobile_no,lp.tel_no as lessor_telno,lp.mobile_no as lessor_mobile";
      var emergency_contacts ="ec.first_name as emerg_fname,ec.last_name as emerg_lname,ec.contact_no as emerg_contact";
            $('#lessors').show();
            $.ajax({
            url : global_url+'/api/bplo_api/dynamic/',
            type : 'POST',
            data : {
              column_names :lessor_profile+","+emergency_contacts,
              table_name : 'lessor_profile lp',
              "join[0]" : "emergency_contacts ec",
              "type[0]" : "inner",
              "ids[0]" : "lp.buss_id = ec.owner_id",
              "where[0]" : "lp.buss_id",
              "pars[0]" : bussId
            },
            dataType : 'json',
            success : function (res) {

              const r = res.content[0];
               $('#lessor_name'). html('&nbsp; : ' + r.lessor_fname +" "+ r.lessor_lname );
               $('#lessor_address'). html('&nbsp; : ' + r.lessor_address);
               $('#monthly_rental'). html('&nbsp; : ' + r.monthly_rental);
               $('#lessor_email'). html('&nbsp; : ' + r.lessor_email);
               $('#lessor_tel'). html('&nbsp; : ' + r.lessor_telno);
               $('#lessor_mobile'). html('&nbsp; : ' + r.lessor_mobile);
               $('#lessor_emerg'). html('&nbsp; : ' + r.emerg_fname+" "+r.emerg_lname);
               $('#emerg_contact'). html('&nbsp; : ' + r.emerg_contact);
          },
          error: function(xhr)
          {
            console.log(xhr.responseText);
          }
        });
        }
        else {
        $('#lessors').hide();
      }}}},
       error: function(xhr)
       {
         console.log("error");
       }
     });
});


   /////////////
   //DELETE ALB
   /////////////
$(document).on('click', '.del_renew', function(event){
  event.preventDefault();
  if(confirm("Are you sure you want to delete this?"))
  {
    var id = [];

   var bussline_id = $(this).attr("id");
   sessionStorage.setItem("bussline_id_del", bussline_id);
   var buss_id = sessionStorage.getItem("bussId");
   var buss_del = sessionStorage.getItem("bussline_id_del");

   $("input[name = 'renew[userid]']").val(userSession);
   $("input[name = 'renew[line_id]']").val(buss_del);
   $("input[name = 'renew[bussid]']").val(buss_id);

   $.ajax({
     url : global_url+'/api/bplo_api/deleteAdditionalLineBuss/',
     type : 'POST',
     data :{
        "renew[line_id]": $("input[name = 'renew[line_id]']").val(),
        "renew[buss_id]":   $("input[name = 'renew[bussid]']").val(),
        "renew[request_type]": "Delete Additional Line of Business"
   },
   dataType : 'json',
   success : function (res) {
    notify(res.msg,'success',500);
      $(this).parents('tr').fadeOut('slow');
   },
   error:function(xhr)
   {
    console.log(xhr.responseText);
   }
   });
 }
 else {
   return false;
 }
 });

$(document).on('click', '.edit_renew', function(event){
  event.preventDefault();
   var buss_line ="bl.ranks,bl.id as bussline_id,bl.buss_line,bl.buss_line_code,bl.sub_category,bl.no_units,bl.capitalization,bl.essential,bl.non_essential";
   var bussline_id = $(this).attr("id");
   sessionStorage.setItem("bussline_id", bussline_id);
   var buss_id = sessionStorage.getItem("bussId");

   $('#edit_bussline').fadeIn(200);
   $("option").remove(".newoption");
   $('.renewbuss_line option:selected').removeAttr('selected');

   $.ajax({
     url : global_url+'/api/bplo_api/dynamic/',
     type : 'POST',
     data : {
       column_names : buss_line,
       table_name : 'buss_line bl',
       "where[0]" : "bl.id",
       "pars[0]" : bussline_id,
       "where[1]" : "bl.ranks",
       "pars[1]" : "secondary"
     },
     dataType : 'json',
     success : function (res) {
        var content = res.content;
        for (var i = 0; i < content.length; i++) {
          const elem = content[i];

          $("input[name = 'renew[capital]']").val(elem.capitalization);
          $("input[name = 'renew[essen]']").val(elem.essential);
          $("input[name = 'renew[no_unt]']").val(elem.no_units);
          $("input[name = 'renew[non_essen]']").val(elem.non_essential);
          $("input[name = 'renew[subcat]']").val(elem.sub_category);

          $(".renewbuss_line option[value='"+elem.buss_line+"']").attr("selected","selected");

          var newOption = $('<option>');
          newOption.attr('value', elem.buss_line_code).text(elem.buss_line_code).addClass("newoption");
          $(".renewbuss_code").append(newOption);
          $(".renewbuss_code option[value='"+elem.buss_line_code+"']").attr("selected", "selected");

        }

     }
   });
   });

//ADDITIONAL LINE OF BUSINESS
$('#addlineaddRowRenew').click(function(){
  	add_line_buss.push({
  		'busact_addline': $('#addline').val(),
  		'busact_addcode': $('#addcode').val(),
      'busact_addsubcat': $('#addsubcat').val(),
  		'busact_addunit': $('#addunits').val(),
      'busact_addcap': $('#addcap').val().replace(/,/g, ''),
      'bussact_essential': $('#addessen').val().replace(/,/g, ''),
  		'bussact_nonessential': $('#addnonessen').val().replace(/,/g, ''),
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
    var td6 = document.createElement("td");
    var td7 = document.createElement("td");
    var td8 = document.createElement("td");

    td1.innerHTML = "<input type ='text' class = 'form-control' value='"+$('#addline').val()+"' name = 'renew[buss_line]' id=''> ";
    td2.innerHTML = "<input type ='text' class = 'form-control' value='"+$('#addcode').val()+"' name = 'renew[buss_line_code]' id=''> ";
    td3.innerHTML = "<input type ='text' class = 'form-control' value='"+$('#addsubcat').val()+"' name = 'renew[sub_category]'> ";
    td4.innerHTML = "<input type ='text' class = 'form-control' value='"+$('#addunits').val()+"' name = 'renew[no_units]'> ";
    td5.innerHTML = "<input type ='text' class = 'form-control' value='"+$('#addcap').val()+"' name = 'renew[capitalization]'> ";
    td6.innerHTML = "<input type ='text' class = 'form-control' value='"+$('#addessen').val()+"' name = 'renew[essential]'> ";
    td7.innerHTML = "<input type ='text' class = 'form-control' value='"+$('#addnonessen').val()+"' name = 'renew[non_essential] '> ";

    td8.innerHTML = '<a class="btn btn-sm btn-warning" onclick="addlinerowdelete(this)" >Delete</a>';

    row.appendChild(td1);
    row.appendChild(td2);
    row.appendChild(td3);
    row.appendChild(td4);
    row.appendChild(td5);
    row.appendChild(td6);
    row.appendChild(td7);
    row.appendChild(td8);

    table.children[0].appendChild(row);
    $('#addline').val('');
    $('#addcode').val('');
    $('#addunits').val('');
    $('#addsubcat').val('');
    $('#addessen').val('');
    $('#addnonessen').val('');
    $('#addcap').val('');

});
//DISPLAY BUSSINESS LISTS
$("#buss_list").on("click keyup",function(){
  $('#btn_renewal').prop('disabled', false);
      var buss = $(".buss_list option:selected").val();
      sessionStorage.setItem("buss",buss);
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
          }
        });
        $.get('/bploform',function($user){
        });

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

   $("#editbussline").on("click",function(){
     var bussline_id = sessionStorage.getItem("bussline_id");
      var bussline= $(".renewbuss_line option:selected").val();
      var busscode= $(".renewbuss_code option:selected").val();
      var subcat=  $("input[name = 'renew[subcat]']").val();
      var unt=  $("input[name = 'renew[no_unt]']").val();
      var cap= $("input[name = 'renew[capital]']").val();
      var essen=  $("input[name = 'renew[essen]']").val();
      var nonesses=  $("input[name = 'renew[non_essen]']").val();

      $("#bussline"+bussline_id+"").val(bussline);
      $("#bussline_code"+bussline_id+"").val(busscode);
      $("#sub"+bussline_id+"").val(subcat);
      $("#unt"+bussline_id+"").val(unt);
      $("#cap"+bussline_id+"").val(cap);
      $("#ess"+bussline_id+"").val(essen);
      $("#noness"+bussline_id+"").val(nonesses);
   });


$("#close_edtbussline").click(function(){
    $("#edit_bussline").slideUp(200);
});


$("#submit_renewal").click(function(){
  var buss_profile ="bp.user_id";
  var user ="us.id,us.username";
  var buss_line ="bl.id as bussline_id,bl.buss_line,bl.buss_line_code,bl.sub_category,bl.no_units,bl.capitalization,bl.essential,bl.non_essential";
  var bussline_id = sessionStorage.getItem("bussline_id");
  var buss_id = $('#buss_id').val();
  $("input[name = 'renew[msg]']").val("Gross of your business profile Successfully Updated");
     $.ajax({
       url : global_url+'/api/bplo_api/dynamic/',
       type : 'POST',
       data : {
         column_names : buss_line+","+buss_profile+","+user,
         table_name : 'buss_profile bp',
         "join[0]" : "buss_line bl",
         "type[0]" : "inner",
         "ids[0]" : "bp.buss_id = bl.buss_id",
         "join[1]" : "user us",
         "type[1]" : "inner",
         "ids[1]" : "bp.user_id = us.id",
         "where[0]" : "bp.buss_id",
         "pars[0]" : buss_id,
         "where[1]" : "bl.ranks",
         "pars[1]" : "secondary"
       },
       dataType : 'json',
       success : function (res) {
          var content = res.content;
          for (var i = 0; i < content.length; i++) {
            const elem = content[i];
            $("input[name = 'renew[userid]']").val(userSession);
            $("input[name = 'renew[busslineid]']").val(elem.bussline_id);
            $("input[name = 'renew[upline_id]']").val(elem.bussline_id);
            $("input[name = 'renew[bussid]']").val(buss_id);
            $("input[name = 'renew[upranks]']").val("secondary");
            $("input[name = 'renew[updated_by]']").val(elem.username);

/////////////////////////////////
//UPDATE EXISTING ADDITIONAL PAGE
/////////////////////////////////
        $.ajax({
          url : global_url+'/api/bplo_api/updateAddtionalLineBuss/',
          type : 'POST',
          data :{
             "renew[upbuss_line]" :    $("#bussline"+elem.bussline_id+"").val(),
             "renew[upbuss_line_code]" :  $("#bussline_code"+elem.bussline_id+"").val(),
             "renew[upsub_category]" : $("#sub"+elem.bussline_id+"").val(),
             "renew[upno_units]" :  $("#unt"+elem.bussline_id+"").val(),
             "renew[upcapitalization]" :  $("#cap"+elem.bussline_id+"").val(),
             "renew[upessential]" :  $("#ess"+elem.bussline_id+"").val(),
             "renew[upnon_essential]" :  $("#noness"+elem.bussline_id+"").val(),
             "renew[upranks]" :  $("input[name = 'renew[upranks]']").val(),
             // "renew[user_id]" :    $("input[name = 'renew[userid]']").val(),
             "renew[upline_id]": $("input[name = 'renew[upline_id]']").val(),
             "renew[buss_id]":   $("input[name = 'renew[buss_id]']").val(),
             "renew[updated_by]":   $("input[name = 'renew[updated_by]']").val(),
             // "renew[request_type]": "Renew Additional Line of Business"
            },
             dataType : 'json',
             success : function (res) {
               console.log(res);
               // notify(res.msg,'success',500);
             },
             error:function(xhr)
             {
               console.log(xhr.responseText);
             }
            });
          }
        },
        error : function(res)
        {
          console.log("ress");
        }
        });

///////////////////
//change gross_sales
///////////////////
          $.ajax({
            url : global_url+'/api/bplo_api/changeGross/',
            type : 'POST',
            data :{
               "renew[buss_curr_gross]" : $("input[name ='renew[buss_curr_gross]']").val(),
               "renew[user_id]" :    $("input[name = 'renew[userid]']").val(),
               "renew[bussline_id]": $("input[name = 'renew[busslineid]']").val(),
               "renew[buss_id]":   $("input[name = 'renew[buss_id]']").val(),
               // "renew[request_type]": "Renew Gross Sales",
               "renew[msg]" :  $("input[name = 'renew[msg]']").val()
        },
         dataType : 'json',
         success : function (res) {
           console.log(res);
           // notify($("input[name = 'renew[msg]']").val(),'success',500);
         },
         error:function(xhr)
         {
           console.log(xhr.responseText);
         }
        });



///////////////////////////////
///insert  ADDITIONAL PAGE
///////////////////////////////
        for (var i = 0; i < add_line_buss.length; i++) {

          $.ajax({
            url : global_url + '/api/bplo_api/add_additional_lineBuss',
            type : 'POST',
            crossDomain: true,
            dataType: 'json',
            data : {
              'renew[buss_line]' : add_line_buss[i].busact_addline,
              'renew[buss_line_code]' : add_line_buss[i].busact_addcode,
              'renew[sub_category]' : add_line_buss[i].busact_addsubcat,
              'renew[capitalization]' : add_line_buss[i].busact_addcap.replace(/,/g,''),
              'renew[essential]' : add_line_buss[i].bussact_essential.replace(/,/g,''),
              'renew[non_essential]' : add_line_buss[i].bussact_nonessential.replace(/,/g,''),
              'renew[buss_id]' : $("input[name = 'renew[buss_id]']").val(),
              'renew[user_id]' : $("input[name = 'renew[userid]']").val()
            },
            success : function(res){
              console.log(res);
            },
            error : function(xhr){
            }
          });
        }

});

var bussiness_id = sessionStorage.getItem("buss");
console.log();
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

  var bussId = sessionStorage.getItem("bussId");
function buss_renewEdit(r){
  var i = r.parentNode.parentNode.rowIndex;
  var id = document.getElementById(i);
  // console.log(name);
  // console.log(i);
  console.log(name);

}
