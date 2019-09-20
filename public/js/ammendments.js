var add_line_buss = [];

var global_url = 'http://192.168.100.207:8080';
// var global_url = 'http://795a28e3.ngrok.io/';
// var global_url = 'http://localhost:8000';
var userSession = sessionStorage.getItem("user_id");
var bussid_ammend =  sessionStorage.setItem("ammendbuss_id","0");

$(document).ready(function () {
  // $('#ammend_info').DataTable();

  $(".hidden").prop("hidden", true);
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 100) {
          $('#return').fadeIn(200);
      } else {
          $('#return').fadeOut(200);
      }
  });
  $('[data-toggle="popover"]').popover({
      placement : 'top',
      trigger : 'hover'
  });
  $('#return').click(function() {
       $("html, body").animate({ scrollTop: 50 }, 1000);
       sessionStorage.setItem("ammendbuss_id","0");
       $('#ammend_update')[0].reset();
       $('.req').fadeOut(200);

       if($("option").hasClass('newoption'))
       {$("option").remove(".newoption");}
      });
  $('#logged').on('hide.bs.modal', function (e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
  });

$('#busi_add').click(function(){
  $('#approved').modal('hide');
  $( "[name^='ammend']" ).prop('readonly', true);
  ammenddisplay();
  businessinfo = Array("ammend_bussadd","ammend_house","ammend_bussbldg","ammend_bussunit","ammend_street","ammend_brgy","ammend_subd","ammend_postal");
  businessinfo.forEach(function(bussinfo){
  document.getElementById(bussinfo).readOnly = false;
  $('#save_bussadd').fadeIn(200);
});
$("#save_bussadd").prop("hidden", false);
$("#save_bussadd").on("click",function(){
  $.ajax({
  url : global_url+'/api/bplo_api/changeBussAddress/',
  type : 'POST',
  data : {
      "ammend[buss_address]":$('#ammend_house').val()+"-"+$('#ammend_bussbldg').val()+" "+$('#ammend_bussunit').val()+" "+$('#ammend_street').val()+" "+$('#ammend_brgy').val()+" "+$('#ammend_subd').val(),
      'ammend[buss_id]': $('#ammendbussid').val(),
      'ammend[request_type]': "Change of Business Address"
  },
  dataType : 'json',
  success : function (res) {
  console.log(res);
  },
  error:function(xhr)
  {
    console.log(xhr.responseText);
  }
});
//   $.ajax({
//   url : global_url+'/api/bplo_api/dynamicUpdate/',
//   type : 'POST',
//   data : {
//     table_name : 'building_specs',
//     "where[0] ":  "bus_id",
//     "pars[0]" : bussid_ammend,
//     "col_names[houseno]" : $('#ammend_house').val(),
//     "col_names[bldg_no]" : $('#ammend_bussbldg').val(),
//     "col_names[unit_no]" : $('#ammend_bussunit').val(),
//     "col_names[street_no]" : $('#ammend_street').val(),
//     "col_names[brgy]" : $('#ammend_brgy').val(),
//     "col_names[subdivision]" : $('#ammend_subd').val()
//   },
//   dataType : 'json',
//   success : function (res) {
//   }
// });
//
// $.ajax({
// url : global_url+'/api/bplo_api/dynamicUpdate/',
// type : 'POST',
// data : {
//   table_name : 'buss_profile',
//   "where[0] ":  "buss_id",
//   "pars[0]" : bussid_ammend,
//   "col_names[buss_address]" : $('#ammend_bussadd').val(),
//   "col_names[buss_postcode]" : $('#ammend_postal').val()
// },
// dataType : 'json',
// success : function (res) {
// }
// });
});
  $('body,html').animate({scrollTop:parseInt($("#business_add").offset().top-100)}, 1000);
});


$('#ownership').click(function(){
$('#approved').modal('hide');
$('.buss_line').attr('disabled', true);
$( "[name^='ammend']" ).prop('readonly', true);
ammenddisplay();
ownerinfo = Array("ammend_lastname","ammend_firstname","ammend_midname");
ownerinfo.forEach(function(ownerinfo){
document.getElementById(ownerinfo).readOnly = false;
})
$('#save_owner').fadeIn(200);

$("#save_owner").prop("hidden", false);
$("#save_owner").on("click",function(){
    $.ajax({
    url : global_url+'/api/bplo_api/changeOwnership/',
    type : 'POST',
    data : {
        "ammend[first_name]": $('#ammend_firstname').val(),
        'ammend[middle_name]':  $('#ammend_midname').val(),
        'ammend[last_name]':  $('#ammend_lastname').val(),
        'ammend[user_id]':  $('#ammenduserid').val(),
        'ammend[buss_id]':  $('#ammendbussid').val(),
        'ammend[owners_id]':  $('#ammendownerid').val(),
        'ammend[request_type]': "Change of Business Name"
    },
    dataType : 'json',
    success : function (res) {
      console.log(res);
    },
    error:function(xhr)
    {
      console.log(xhr.responseText);
    }

  });


//   $.ajax({
//   url : global_url+'/api/bplo_api/dynamicUpdate/',
//   type : 'POST',
//   data : {
//     table_name : 'owners_profile',
//     "where[0] ":  "buss_id",
//     "pars[0]" : bussid_ammend,
//     "col_names[last_name]" : $('#ammend_lastname').val(),
//     "col_names[first_name]" : $('#ammend_firstname').val(),
//     "col_names[middle_name]" : $('#ammend_midname').val()
//   },
//   dataType : 'json',
//   success : function (res) {
//     console.log("success");
//   }
// });
});
$('body,html').animate({scrollTop:parseInt($("#owners_div").offset().top-100)}, 1000);
});


$('#busi_name').click(function(){
  $('#approved').modal('hide');
  $('.buss_line').attr('disabled', true);
  $( "[name^='ammend']" ).prop('readonly', true);
  ammenddisplay();
  document.getElementById("ammend_bussname").readOnly = false;
  $('#save_bussname').fadeIn(200);
  $("#save_bussname").prop("hidden", false);
  $("#save_bussname").on("click",function(){

    $.ajax({
    url : global_url+'/api/bplo_api/changeBussName/',
    type : 'POST',
    data :{
        "ammend[buss_name]" : $('#ammend_bussname').val(),
        'ammend[buss_id]':  $('#ammendbussid').val(),
        "ammend[user_id]":  $('#ammenduserid').val()
        // "ammend[request_type]": "Change of Business Name"
  },
    dataType : 'json',
    success : function (res) {
      console.log(res);
    },
    error:function(xhr)
    {
      console.log(xhr.responseText);
    }

  });


  //   $.ajax({
  //   url : global_url+'/api/bplo_api/dynamicUpdate/',
  //   type : 'POST',
  //   data : {
  //     table_name : 'buss_profile',
  //     "where[0] ":  "buss_id",
  //     "pars[0]" : bussid_ammend,
  //     "col_names[buss_name]" : $('#ammend_bussname').val()
  //   },
  //   dataType : 'json',
  //   success : function (res) {
  //     console.log(res);
  //   }
  // });
  });
  $('body,html').animate({scrollTop:parseInt($("#business_name").offset().top-100)}, 1000);
});

$('#owners_add').click(function(){
  $('#approved').modal('hide');
  $('.buss_line').attr('disabled', true);
  $( "[name^='ammend']" ).prop('readonly', true);
  ammenddisplay();
  owneraddress = Array("owneradd","ownerhouseno","ownerbldg","ownerunit","ownerstreet","ownerbrgy","ownersubd","ownerpostal");
  owneraddress.forEach(function(ownerinfo){
  document.getElementById(ownerinfo).readOnly = false;
  });
  $('#save_owneradd').fadeIn(200);
  $("#save_owneradd").on("click",function(){
    $.ajax({
    url : global_url+'/api/bplo_api/changeOwnersAddress/',
    type : 'POST',
    data :{
        "ammend[address]" : $('#ownerhouseno').val()+"-"+$('#ownerbldg').val()+" "+$('#ownerunit').val()+" "+$('#ownerstreet').val()+" "+ $('#ownerbrgy').val()+" "+$('#ownersubd').val(),
        "ammend[buss_id]":  $('#ammendbussid').val(),
        "ammend[request_type]": "Change of Owners Address"
      },
    dataType : 'json',
    success : function (res) {
      console.log(res);
    },
    error:function(xhr)
    {
      console.log(xhr.responseText);
    }

  });

});
$('body,html').animate({scrollTop:parseInt($("#owners_address").offset().top-100)}, 1000);

});
  // $("#nature_busi").on("click",function(){
  //   var bussline = $(".addlinebuss option:selected").val();
  //   console.log(bussline);
    $('#nature_busi').click(function(){
      $('#approved').modal('hide');
      $('.buss_line').attr('disabled', false);
      $( "[name^='ammend']" ).prop('readonly', true);
      ammenddisplay();
      bussline = Array("ammendsubcategory","ammendno_units","ammend_essen","ammendno_nonessen","ammendcapitalization");
      bussline.forEach(function(bussline){
      document.getElementById(bussline).readOnly = false;
      });
      $('#save_naturebusi').fadeIn(200);

      $("#save_naturebusi").on("click",function(){
    $.ajax({
    url : global_url+'/api/bplo_api/changeMainLineBussiness/',
    type : 'POST',
    data :{
      "ammend[buss_line]" : $('#ammendbuss_line').val(),
      "ammend[buss_line_code]" : $('#ammendbuss_code').val(),
      "ammend[sub_category]" : $('#ammendsubcategory').val(),
      "ammend[no_units]" : $('#ammendno_units').val(),
      "ammend[capitalization]" : $('#ammendcapitalization').val(),
      "ammend[essential]" : $('#ammend_essen').val(),
      "ammend[non_essential]" : $('#ammendno_nonessen').val(),
      "ammend[bussline_id]": $('#ammendbusslineid').val(),
      "ammend[buss_id]": $('#ammendbussid').val(),
      "ammend[user_id]": $('#ammenduserid').val(),
      "ammend[request_type]": "Change of Nature of Business"
  },
    dataType : 'json',
    success : function (res) {
      console.log(res);
    },
    error:function(xhr)
    {
      console.log(xhr.responseText);
    }

  });

});
$('body,html').animate({scrollTop:parseInt($("#naturebuss").offset().top-100)}, 1000);

});

$('#change_org').click(function(){
  $('#approved').modal('hide');
  $('.buss_line').attr('disabled', true);
  $( "[name^='ammend']" ).prop('readonly', true);
  ammenddisplay();
  document.getElementsByName("ammend[kind_org]").readOnly = false;
  $('#save_changeorg').fadeIn(200);
  $("#save_changeorg").on("click",function(){
    var kind_org = $("input[name='ammend[kind_org]']:checked").val();
    console.log(kind_org);

    $.ajax({
    url : global_url+'/api/bplo_api/changeOrg/',
    type : 'POST',
    data :{
        "ammend[kind_org]" : $("input[name='ammend[kind_org]']:checked").val(),
        "ammend[buss_id]":  $('#ammendbussid').val(),
        "ammend[request_type]": "Change of Organization"
      },
    dataType : 'json',
    success : function (res) {
      console.log(res);
    },
    error:function(xhr)
    {
      console.log(xhr.responseText);
    }

  });

    var organization = "o.kod";
    var buss_profile = "bp.kind_org";
    $.ajax({
      url : global_url+'/api/bplo_api/dynamic/',
      type : 'POST',
      data : {
        column_names : buss_profile+","+organization,
        table_name : 'buss_profile bp',
        "join[0]" : "organization o",
        "type[0]" : "inner",
        "ids[0]" : "bp.kind_org = o.id",
        "where[0]" : "bp.kind_org",
        "pars[0]" : kind_org
      },
      dataType : 'json',
      success : function (res) {
        content = res.content;
        if (res.response == true)
        {
          // console.log(content[0].kod);
        }},
});
});

  $('body,html').animate({scrollTop:parseInt($("#change_organization").offset().top-150)}, 1000);
});

$('#change_emp').click(function(){
  $('#approved').modal('hide');
  $('.buss_line').attr('disabled', true);
  $( "[name^='ammend']" ).prop('readonly', true);
  ammenddisplay();
  // ammend_noemp
  changeemp = Array("ammend_male","ammend_female");
  changeemp.forEach(function(changeemp){
  document.getElementById(changeemp).readOnly = false;
  });
  $('#save_changeorg').fadeIn(200);
  $("#save_changeorg").on("click",function(){
  $.ajax({
  url : global_url+'/api/bplo_api/changeTotalEmployee/',
  type : 'POST',
  data :{
      "ammend[male_emp]" : $('#ammend_male').val(),
      "ammend[female_emp]" : $('#ammend_female').val(),
      'ammend[buss_id]':  $('#ammendbussid').val(),
      "ammend[user_id]":  $('#ammenduserid').val(),
      "ammend[request_type]": "Change of No. of Employees"
},
  dataType : 'json',
  success : function (res) {
    console.log(res);
  },
  error:function(xhr)
  {
    console.log(xhr.responseText);
  }
});
});
  $('body,html').animate({scrollTop:parseInt($("#no_employees").offset().top-100)}, 1000);
});


  $('#approved_modal').click(function(){
    $('#approved').modal('show');
  })

    if(userSession != 0) {

    var buss_profile ="bp.buss_id,bp.user_id,bp.buss_name,bp.tin_no,bp.buss_mop,bp.dt_apply,bp.tin_no,bp.refno,bp.dti_no,bp.dti_dt_reg,bp.buss_type";
    var owners_profile ="op.first_name ,op.last_name ,op.middle_name ,op.address,op.mobile,op.tel_no,op.postcode";
    console.log(userSession);
     $.ajax({
       url : global_url+'/api/bplo_api/dynamic/',
       type : 'POST',
       data : {
       column_names : buss_profile+","+owners_profile,
       table_name : 'buss_profile bp',
       "join[0]" : "owners_profile op",
       "type[0]" :  "inner",
       "ids[0]" : "bp.buss_id = op.buss_id",
       "where[0]" : "bp.user_id",
       "pars[0]" : userSession
     },
      dataType : 'json',


    success : function(data){
       var return_data =[];
       content = data.content;
        for(var i = 0 ; i<content.length; i++){
          const elem = content[i];

          return_data.push({
            "ownersname": elem.first_name.concat(" "+elem.last_name),
            "buss_name":elem.buss_name,
            "tin_no":elem.tin_no,
            "btnbuss_id":"<input type='button' role='button' class='btn btn-primary amend_display' name = '"+elem.buss_id+"' id='"+elem.buss_id+"' value = 'Select'>"
          });
        }

    $('#ammend_info').dataTable({
        processing: true,
        searching : true,
        data: return_data,
        columns: [
                  {"data" : "ownersname"},
                  {"data" : "buss_name"},
                  {"data" : "tin_no"},
                  {"data" : "btnbuss_id"}
                 ],

       deferLoading: 10
       });
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
                console.log("acc");
          }
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

    $(document).on('click', '.amend_display', function(event){
      var id = $(this).attr("id");
        sessionStorage.setItem("ammendbuss_id",id);
       $('#approved').modal('show');
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


//   function buss_ammend(r){
//   var i = r.parentNode.parentNode.rowIndex -1;
//   var a = document.getElementById(i);
//   sessionStorage.setItem("ammendbuss_id",a.getAttribute("name"));
//   $('#approved').modal('show');
// }
//


function ammenddisplay()
{
  var bussId = sessionStorage.getItem("ammendbuss_id");
  console.log(bussId);
  var buss_profile ="bp.user_id,bp.buss_id,bp.kind_org,bp.buss_name,bp.tin_no,bp.buss_mop,bp.dt_apply,bp.tin_no,bp.refno,bp.dti_no,bp.dti_dt_reg,bp.buss_type";
  var buss_profile2 ="bp.gov_entity,bp.buss_area,bp.buss_total_emp,bp.male_emp,bp.female_emp,bp.unit_vehicle,bp.emp_in_lgu";
  var buss_profile3 ="bp.amendment,bp.amendment_to,bp.buss_email,bp.buss_telno,bp.buss_phone,bp.buss_address,bp.buss_postcode,bp.is_rented";
  var building_specs ="bs.houseno as buss_houseno,bs.bldg_no as buss_bldgno,bs.unit_no as buss_unit,bs.street_no as buss_street,bs.brgy as buss_brgy,bs.subdivision as buss_subd,bs.city as buss_city,bs.province as buss_prov,bs.contact_no as buss_contact";
  var owners_profile ="op.id as owner_id,op.first_name as owner_fname,op.last_name as owner_lname,op.middle_name owner_mname,op.address,op.mobile,op.tel_no,op.emaill,op.postcode as owner_post";
  var owner_info ="oi.houseno as owner_houseno,oi.bdlgname as owner_bldg,oi.unitno as owner_unit,oi.street as owner_street,oi.brgy as owner_brgy,oi.subdivision as owner_subd,oi.city as owner_city,oi.province as owner_prov";
  var buss_line ="bl.id as primary_id,bl.buss_line,bl.buss_line_code,bl.sub_category,bl.no_units,bl.capitalization,bl.essential,bl.non_essential";
  var taxpayer = "tp.last_name as tax_lname,tp.first_name as tax_fname,tp.middle_name as tax_mname,tp.franchise";

      $.ajax({
        url : global_url+'/api/bplo_api/dynamic/',
        type : 'POST',
        data : {
          column_names : buss_profile+","+buss_profile2+","+buss_profile3+","+owners_profile+","+buss_line+","+taxpayer+","+owner_info+","+building_specs,
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
          "join[3]" : "owner_info oi",
          "type[3]" : "inner",
          "ids[3]" : "bp.buss_id = oi.owner_id",
          "join[4]" : "building_specs bs",
          "type[4]" : "inner",
          "ids[4]" : "bp.buss_id = bs.bus_id",
          "where[0]" : "bp.buss_id",
          "pars[0]" : bussId,
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

 ////////////////////////
 // owners information
 ////////////////////////
         $('#ammenduserid').val( res.user_id);
         $('#ammendbussid').val( res.buss_id);
         $('#ammend_lname').val( res.tax_lname);
         $('#ammend_fname').val( res.tax_fname);
         $('#ammend_mname').val( res.tax_mname);

         var kind_org = res.kind_org
         $("input[name='ammend[kind_org]'][value='"+kind_org+"']").prop('checked', true);

         $('#ammend_bussname').val( res.buss_name);
         $('#nature_bussname').val( res.tax_mname);

         $('#ammend_lastname').val( res.owner_lname);
         $('#ammend_firstname').val( res.owner_fname);
         $('#ammend_midname').val( res.owner_mname);
 ////////////////////////
 // owner information
 ////////////////////////
         $('#ammendownerid').val(res.owner_id);
         $('#owneremail').val( res.emaill);
         $('#ownertel').val( res.tel_no);
         $('#ownermobil').val( res.mobile);
         $('#owneradd').val( res.buss_area);
         $('#ownerhouseno').val( res.owner_houseno);
         $('#ownerbldg').val( res.owner_bldg);
         $('#ownerunit').val( res.owner_unit);
         $('#ownerstreet').val( res.owner_street);
         $('#ownerbrgy').val( res.owner_brgy);
         $('#ownersubd').val( res.owner_subd);
         $('#ownerpostal').val( res.owner_post);

         $('#ammend_noemp').val( res.buss_total_emp);
         $('#ammend_male').val( res.male_emp);
         $('#ammend_female').val( res.female_emp);
 ////////////////////////
 // bussiness information
 ////////////////////////
           $('#taxpayer_name').val(res.tax_lname +" "+ res.tax_fname);
           $('#franchise').val(res.franchise);
           $('#ammend_bussadd'). val(res.buss_address);
           $('#ammend_house').val( res.buss_houseno);
           $('#ammend_bussbldg').val( res.buss_bldgno);
           $('#ammend_bussunit').val( res.buss_unit);
           $('#ammend_street').val( res.buss_street);
           $('#ammend_brgy').val( res.buss_brgy);
           $('#ammend_subd').val( res.buss_subd);
           $('#ammend_postal').val( res.buss_postcode);
           $('#ammend_bussemail').val( res.buss_email);
           $('#ammend_telno').val( res.buss_telno);
           $('#ammend_mobile').val( res.buss_phone);
 ////////////////////////
 // bussiness line//////
 ////////////////////////
           $("#addline option[value='"+res.buss_line+"']").attr("selected", "selected");
           $("#addcode option[value='"+res.buss_line_code+"']").attr("selected", "selected");
           var newOption = $('<option>');
           newOption.attr('value', res.buss_line_code).text(res.buss_line_code).addClass("newoption");
           $('#addcode').append(newOption);
           $("#addcode option[value='"+res.buss_line_code+"']").attr("selected", "selected");
           $('#ammendsubcategory'). val(res.sub_category);
           $('#ammendno_units').val( res.no_units);
           $('#ammendcapitalization').val( res.capitalization);
           $('#ammend_essen').val( res.essential);
           $('#ammendno_nonessen').val( res.non_essential);
           $('#ammendbusslineid').val( res.primary_id);
 ////////////////////////
 // Lessor's information
 ////////////////////////
      if(res.is_rented == 1){
        var lessor_profile ="lp.email as lessor_email,lp.first_name as lessor_fname,lp.last_name as lessor_lname,lp.middle_name as lessor_mname,lp.address as lessor_address,lp.monthly_rental,lp.mobile_no,lp.tel_no as lessor_telno";
        var emergency_contacts ="ec.first_name as emerg_fname,ec.last_name as emerg_lname,ec.contact_no as emerg_contact";
         $('#lessors').show();
         $.ajax({
           url : global_url+'/api/bplo_api/dynamic/',
           type : 'POST',
           data : {
             column_names : lessor_profile +","+buss_profile,
             // column_names : "*",
             table_name : 'buss_profile bp',
             "join[0]" : "lessor_profile lp",
             "type[0]" : "inner",
             "ids[0]" : "bp.buss_id = lp.buss_id",
             "where[0]" : "bp.buss_id",
             "pars[0]" : bussId
           },
           dataType : 'json',
           success : function (res) {
              const r = res.content[0];
              // console.log(r);
              $('#lessor_lname').val(r.lessor_lname);
              $('#lessor_fname').val(r.lessor_fname);
              $('#lessor_mname').val(r.lessor_mname);
              $('#lessor_add').val(r.lessor_address);
              $('#lessor_telno').val(r.lessor_telno);
              $('#lessor_mobile').val(r.mobile_no);
              $('#lessor_email').val(r.lessor_email);
              $('#lessor_mosrental').val(r.monthly_rental);
              // $('#lessor_emerg'). html('&nbsp; : ' + r.emerg_fname+" "+r.emerg_lname);
              // $('#emerg_contact'). html('&nbsp; : ' + r.emerg_contact);
           }
         });
       }
       else {
         $('#lessors').hide();
       }
}}},
        error: function(xhr)
        {
          console.log("error");
        }
});
    }
    function disable_inputs()
    {
        $('input[name^="ammend"]').each(function(ammend) {
          if($(this).val().trim()!=""){
              $(this).prop('disabled', true);
          }
        });
    }
