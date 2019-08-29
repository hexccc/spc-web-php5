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


    //
    //   $.ajax({
    //     url : global_url+'/api/bplo_api/' + userSession,
    //     type : 'GET',
    //     dataType : 'json',
    //     success : function (res) {
    //       if (res != null) {
    //         data = "<tr>";
    //         for(var i = 0 ; i<res.length; i++){
    //           data += "<td>"+res.first_name+"</td>";
    //           data += "<td>"+res.buss_name+"</td>";
    //           data += "<td>"+res.tin_no+"</td>";
    //           data += "<td><button class='btn btn-primary' id='bussId_"+res.buss_id+"' data-toggle='modal' data-target='#approved_buss'>Select</button></td>";
    //           data += "</tr>";
    //         }
    //         $('#approved_business').html(data);
    //       }
    //     },
    //     error: function(xhr){
    //     }
    // });

$('#busi_add').click(function(){
  $('#approved_buss').modal('hide');
  $.ajax({
    url : global_url+'/api/bplo_api/searchbuss/' + userSession,
    type : 'GET',
    dataType : 'json',
    success : function (res) {
      console.log(res[0]);
      if (res[0] != null) {
        $('#ammend_address').val(res[0].address);
        $('#ammend_bussname').val(res[0].buss_name);
        $('#ammend_bussaddress').val(res[0].buss_address);
        $('#ammend_bussemail').val(res[0].buss_email);
        $('#ammend_telno').val(res[0].buss_telno);
        $('#ammend_phone').val(res[0].buss_phone);
        $('#ammend_postcode').val(res[0].buss_postcode);
        $('#ammend_totalemp').val(res[0].buss_total_emp);
      }
    },
    error: function(xhr){
    }
  });
  $('body,html').animate({
            scrollTop:parseInt($("#business_add").offset().top-100)
        }, 1000);
});


$('#ownership').click(function(){
  $('#approved_buss').modal('hide');

$('body,html').animate({
            scrollTop:parseInt($("#owners_div").offset().top-100)
        }, 1000);
            // ammenddisplay();
});

$('#busi_name').click(function(){
  $('#approved_buss').modal('hide');
  $('body,html').animate({
            scrollTop:parseInt($("#business_name").offset().top-100)
        }, 1000);
});


$('#owners_add').click(function(){
  $('#approved_buss').modal('hide');
  $('body,html').animate({
            scrollTop:parseInt($("#owners_address").offset().top-100)
        }, 1000);
});

$('#nature_busi').click(function(){
  $('#approved_buss').modal('hide');
  $('body,html').animate({
            scrollTop:parseInt($("#business_name").offset().top-100)
        }, 1000);
});

$('#change_org').click(function(){
  $('#approved_buss').modal('hide');
  $('body,html').animate({
            scrollTop:parseInt($("#change_organization").offset().top-100)
        }, 1000);
});

$('#change_emp').click(function(){
  $('#approved_buss').modal('hide');
  $('body,html').animate({
            scrollTop:parseInt($("#no_employees").offset().top-100)
        }, 1000);
});


  $('#approved_modal').click(function(){
    $('#approved_buss').modal('show');
  })


    if(userSession != 0) {

    var buss_profile ="bp.user_id,bp.buss_name,bp.tin_no,bp.buss_mop,bp.dt_apply,bp.tin_no,bp.refno,bp.dti_no,bp.dti_dt_reg,bp.buss_type";
    var buss_profile2 ="bp.gov_entity,bp.buss_area,bp.buss_total_emp,bp.male_emp,bp.female_emp,bp.unit_vehicle,bp.emp_in_lgu";
    var buss_profile3 ="bp.amendment,bp.amendment_to,bp.buss_email,bp.buss_telno,bp.buss_phone,bp.buss_address,bp.buss_postcode,bp.is_rented";
    var owners_profile ="op.first_name,op.last_name,op.middle_name,op.address,op.mobile,op.tel_no,op.emaill,op.postcode";
    var lessor ="lp.first_name as lessor_fname,lp.last_name as lessor_fname,lp.middle_name as lessor_mname,bp.address,lp.monthly_rental,lp.mobile_no,lp.tel_no,lp.email";
    var buss_line ="bl.buss_line,bl.buss_line_code,bl.sub_category,bl.no_units,bl.capitalization,bl.essential,bl.non_essential";
    var taxpayer = "tp.last_name as tax_lname,tp.first_name as tax_fname,tp.middle_name as tax_mname,tp.franchise";

     $.ajax({
       url : global_url+'/api/bplo_api/dynamic/',
       type : 'POST',
       data : {
       column_names : buss_profile,
       table_name : 'buss_profile bp',
       // "join[0]" : "owners_profile op",
       // "type[0]" :  "inner",
       // "ids[0]" : "bp.buss_id = op.buss_id",
       "where[0]" : "bp.user_id",
       "pars[0]" : userSession
     },
      dataType : 'json',
      success : function (res) {
      content = res.content;

      data = "<tr>";
      for(var i = 0 ; i<content.length; i++){
        const elem = content[i];
        data += "<td>"+elem.last_name+" "+elem.first_name+"</td>";
        data += "<td>"+elem.buss_name+"</td>";
        data += "<td>"+elem.tin_no+"</td>";
        data += "<td><button class='btn btn-primary' id='approved_modal'data-toggle='modal' data-target='#approved_buss' >Select</button></td>";
        data += "</tr>";
        // sessionStorage.setItem("ammendbuss_id",elem.buss_id);
        // data-toggle='modal' data-target='#approved_buss'
      }
      $('#approved_business').html(data);}

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
                console.log("acc");
          }
            notify(res.msg, 'info',500)
        },

        error: function(xhr)
        {
          console.log("error");
        }

  });
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


function ammenddisplay()
{
  var bussId = sessionStorage.getItem("bussId");
  var buss_id = $('#buss_id').val();

  var buss_profile ="bp.user_id,bp.buss_name,bp.tin_no,bp.buss_mop,bp.dt_apply,bp.tin_no,bp.refno,bp.dti_no,bp.dti_dt_reg,bp.buss_type";
  var buss_profile2 ="bp.gov_entity,bp.buss_area,bp.buss_total_emp,bp.male_emp,bp.female_emp,bp.unit_vehicle,bp.emp_in_lgu";
  var buss_profile3 ="bp.amendment,bp.amendment_to,bp.buss_email,bp.buss_telno,bp.buss_phone,bp.buss_address,bp.buss_postcode,bp.is_rented";
  var owners_profile ="op.first_name,op.last_name,op.middle_name,op.address,op.mobile,op.tel_no,op.emaill,op.postcode";
  var lessor ="lp.first_name as lessor_fname,lp.last_name as lessor_fname,lp.middle_name as lessor_mname,bp.address,lp.monthly_rental,lp.mobile_no,lp.tel_no,lp.email";
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
          "pars[0]" : bussId,
          "where[1]" : "bl.ranks",
          "pars[1]" : "primary"
        },
        dataType : 'json',
        success : function (res) {
          console.log(res);

           content = res.content;
           console.log(content);
           if (res.response == true)
           {
           $('#renewal_form').modal('show');
           for (var i = 0; i < content.length; i++) {
             const res = content[i];

 ////////////////////////
 // owners information
 ////////////////////////
           $('#ammend_lastname').val( res.last_name);
           $('#ammend_firstname').val( res.first_name);
           $('#ammend_midname').val( res.middle_name);
           $('#ammend_address').val( res.address);
           $('#ammend_email').val( res.email);
           $('#ammend_tel').val( res.tel_no);
           $('#ammend_mobile').val( res.mobile);
           // $('#owner_area').val( res.buss_area);
           // $('#owner_emp').val( res.buss_total_emp);
           // $('#owner_unit').val( res.unit_vehicle);
           // $('#total_emp').val( res.male_emp);
           //



 //
 //           $('#modepayment').html('&nbsp; : ' + res.buss_mop);
 //           $('#date_application').html('&nbsp; : ' + res.dt_apply);
 //           $('#tin_no').html('&nbsp; : ' + res.tin_no);
 //           $('#dti_sec').html('&nbsp; : ' + res.dti_dt_reg);
 //           $('#dti_sec_no'). html('&nbsp; : ' + res.dti_no);
 //           $('#reference'). html('&nbsp; : ' + res.refno);
 //           $('#busstype'). html('&nbsp; : ' + res.buss_type);
 //           $('#ammendfrom'). html('&nbsp; : ' + res.amendment);
 //           $('#ammento'). html('&nbsp; : ' + res.amendment_to);
 // ////////////////////////
 // // bussiness information
 // ////////////////////////
 //           $('#taxpayer_name'). html('&nbsp; : ' + res.tax_lname +" "+ res.tax_fname);
 //           // $('#taxpayer_mname'). html('&nbsp; : ' + res.tax_fname);
 //           $('#franchise'). html('&nbsp; : ' + res.franchise);
 //           $('#busisness_name'). html('&nbsp; : ' + res.buss_name);
 //           $('#buss_address'). html('&nbsp; : ' + res.buss_address);
 //           $('#buss_postal'). html('&nbsp; : ' + res.buss_postcode);
 //           $('#buss_email'). html('&nbsp; : ' + res.buss_email);
 //           $('#buss_tel'). html('&nbsp; : ' + res.buss_telno);
 //           $('#buss_mobile'). html('&nbsp; : ' + res.buss_phone);
  /////////////////////////
 ////////// business line
 ////////////////////////

 //           var data = "<td>"+res.buss_line+"</td>";
 //           data += "<td>"+res.buss_line_code+"</td>";
 //           data += "<td>"+res.sub_category+"</td>";
 //           data += "<td>"+res.no_units+"</td>";
 //           data += "<td>"+res.capitalization+"</td>";
 //         $('#business_act').html(data);
 //
 //
 //         $.ajax({
 //           url : global_url+'/api/bplo_api/dynamic/',
 //           type : 'POST',
 //           data : {
 //             column_names : buss_line+","+buss_profile,
 //             table_name : 'buss_profile bp',
 //             "join[0]" : "buss_line bl",
 //             "type[0]" : "inner",
 //             "ids[0]" : "bp.buss_id = bl.buss_id",
 //             "where[0]" : "bp.buss_id",
 //             "pars[0]" : bussId,
 //             "where[1]" : "bl.ranks",
 //             "pars[1]" : "secondary"
 //           },
 //           dataType : 'json',
 //           success : function (res) {
 //             console.log(res);
 //
 //              var content = res.content;
 //              for( var i = 0; i<content.length; i++ ){
 //               const res = content[i];
 //              var data = "<td>"+res.buss_line+"</td>";
 //              data += "<td>"+res.buss_line_code+"</td>";
 //              data += "<td>"+res.sub_category+"</td>";
 //              data += "<td>"+res.no_units+"</td>";
 //              data += "<td>"+res.essential+"</td>";
 //              data += "<td>"+res.non_essential+"</td>";
 //              data += "<td>"+res.capitalization+"</td>";
 //              // data += "<td>"+res.capitalization+"</td>";
 //            $('#add_bussline').html(data);
 //             }
 //           }
 //         })
 //
 // ////////////////////////
 // // Lessor's information
 // ////////////////////////
 //         if(res.is_rented == 1){
 //         $('#lessors').show();
 //         $.ajax({
 //           url : global_url+'/api/bplo_api/dynamic/',
 //           type : 'POST',
 //           data : {
 //             column_names : lessor_profile,
 //             // column_names : "*",
 //             table_name : 'buss_profile bp',
 //             "join[0]" : "lessor_profile op",
 //             "type[0]" : "inner",
 //             "ids[0]" : "bp.buss_id = op.buss_id",
 //             "where[0]" : "bp.buss_id",
 //             "pars[0]" : bussId
 //           },
 //           dataType : 'json',
 //           success : function (res) {
 //             console.log(res);
 //              var res = res[0];
 //              $('#lessor_name'). html('&nbsp; : ' + res.last_name +" "+ res.first_name + " ");
 //              $('#lessor_address'). html('&nbsp; : ' + res.address);
 //              $('#monthly_rental'). html('&nbsp; : ' + res.email);
 //              $('#lessor_email'). html('&nbsp; : ' + res.tel_no);
 //              $('#lessor_tel'). html('&nbsp; : ' + res.mobile);
 //              $('#lessor_mobile'). html('&nbsp; : ' + res.buss_area);
 //              $('#lessor_emerg'). html('&nbsp; : ' + res.buss_total_emp);
 //              $('#emerg_contact'). html('&nbsp; : ' + res.unit_vehicle);
 //           }
 //         })
 //       }
 //       else {
 //         $('#lessors').hide();
 //       }}}
 //
}}
},
        error: function(xhr)
        {
          console.log("error");
        }
      });

 }
