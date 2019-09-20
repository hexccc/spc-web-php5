var add_line_buss = [];


var global_url = 'http://192.168.100.207:8080';
//var global_url = 'http://81cdf678.ngrok.io';
// var global_url = 'http://795a28e3.ngrok.io/';
var userSession = sessionStorage.getItem("user_id");
$(document).ready(function () {
  $('#logged').on('hide.bs.modal', function (e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
  });

    if(userSession != 0) {
      }

//SUBMIT NEW BUSINESS
$('#addnewbuss').submit(function(e){
      e.preventDefault();
      // console.log($(this).serializeArray());
      console.log($(this).serializeArray());
      var buss_id;
      $.ajax({
        url : global_url + '/api/bplo_api',
        type : 'POST',
        crossDomain: true,
        dataType: 'json',
        data : $(this).serializeArray(),
        success : function(res){
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
                  'addline[essential]' : add_line_buss[i].bussact_essential.replace(/,/g,''),
                  'addline[non_essential]' : add_line_buss[i].bussact_nonessential.replace(/,/g,''),
                  'addline[ranks]' : 'secondary',
                  'addline[buss_id]' : buss_id
                },
                success : function(res){
                },
                error : function(xhr){
                }
              });
            }


            var user ="u.username";
            $.ajax({
            url : global_url+'/api/bplo_api/dynamic/',
            type : 'POST',
            data : {
              column_names : user,
              table_name : 'user u',
              "where[0]" : "u.id",
              "pars[0]" : userSession
            },
            dataType : 'json',
            success : function (res) {
              var content = res.content[0];
              var uname = content.username;
              $("#created_by").val(content.username);

              $.ajax({
              url : global_url+'/api/bplo_api/dynamicUpdate/',
              type : 'POST',
              data : {
                table_name : 'buss_profile',
                "where[0] ":  "buss_id",
                "pars[0]" : buss_id,
                "col_names[created_by]" : uname
              },
              dataType : 'json',
              success : function (res) {
                  console.log(res);
              }
            });


            }
          });

            notify(res.msg,'success',500);
          }
        },
        error : function(xhr){
          console.log(xhr.responseText);
          notify('Request Not Sent', 'danger',500)
        }
      });
    });
//ADDITIONAL LINE OF BUSINESS
$('#addlineaddRow').click(function(){
  	add_line_buss.push({
  		'busact_addline': $('#addline').val(),
  		'busact_addcode': $('#addcode').val(),
  		'busact_addsubcat': $('#addsubcat').val(),
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

    td1.innerHTML = document.getElementById("addline").value;
    td2.innerHTML = document.getElementById("addcode").value;
    td3.innerHTML = document.getElementById("addsubcat").value;
    td4.innerHTML = document.getElementById("addunits").value;
    td5.innerHTML = document.getElementById("addessen").value;
    td6.innerHTML = document.getElementById("addnonessen").value;
    td7.innerHTML = document.getElementById("addcap").value;
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
//REGISTRATION
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
          notify('Registration Failed', 'danger',500)

        }
    });
});
//lOGIN
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
       console.log(res);
      if(res.response == true){
        sessionStorage.setItem("user_id",content.user_id);
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



    manufacturers = Array("Assemblers", "Re-packers", "Processors", "Brewers", "Distillers", "Rectifiers","Compounders of Liquors","Distilled Spirits","Wines","Bakery","Woodcraft/ Handicraft (Stuffed Toys)","Compounding (Distillers)","Oil Extraction","Food Processing - Ube Making", "Ice Cream Making","Body Builder (Jeep)");

    wholesalers   = Array("Water Refilling", "Boutique", "Dry Goods", "Ambulant/ Grocery", "Dry Goods/RTW", "Mini-Mart","Cedera","Glassware/ Aluminum","Cell Phone Accessories","Petshop ","Jewelries","Junkshop","Gift Shop","Radio Equipment", "Party Shop","Subdivision/Realty","Flower Shop/ Seedlings","Medical Supplies","Footwear","Relief Goods","Car Accessories","Hardware","Telecom Accessories","Telecom Accessories","Native Products","Supermarket","Coconut Dealer","FeedsN et.supplies","Pharmacy/Drug store","Fish Vendor","Chicken Vendor","Meat Vendor","Rice Retailer","Cement","Poultry/Piggery(Proprietor)","School Supplies","Fruit Vendor","Dried Fish","Rady To Cook-(Frozen Products)");

    food = Array("Breadshop", "Cafeteria", "Restaurant", "Canteen", "Food Vendor", "Take-Out Counter","Cocktail Lounge Or Bar","Cooked Food","Andok's","Goldilucks","Red Ribbon","Food Caterer","Palamig");

    contractors = Array("Machine/RepairNulcanizing shop", "Beauty Parlor/ Barbershop/ Spa Massage", "Bodega", "Internet Cafe", "Construction Services", "Computer Shop/ Rental","Dress Shop/ Tailoring","Skin & Body Care Clinic","Cemetery Contractor (Fixed)","Poultry & Piggery (Sub-Contractor)","Security Agency","Dry Cleaning","Drug Testing","Memorial Park","Printing Press/ Publication","Art Sign","Travel Agency","Educational(Schools)","Car Wash","Training Center","Catering Services","Funeral Parlor","Fitness Gym Center","Photography","Trucking","Brokerage");

    essentials = Array("Lying In Clinic","Medical Services/Laboratories","Hospital/ Medical Clinic","Veterinary Clinic","Feed Milling/ Rice Mill");

    banks = Array("Lending","Money Changer","Pre-Need Life Plan","Bank","Pawnshop","Money Remittance","Bill Payments");

    lease = Array("Hotels","Motels","Taverns");

    dealersLiquors = Array("Wines","Distilled spirits","Fermented liquors");

    other = Array("Boarding House","Lodging House","Private cemetery or Memorial park");

      $("#addline").change(function(){
      var stdlinebuss = $(".addlinebuss option:selected").val();
      var data = "<option value =''>Code of Business</option>";

        if (stdlinebuss =="manufacturers")
        {
              manufacturers.forEach(function(code){
              data += "<option value='"+code+"'>"+code+"</option>";

           });
        }
        else if (stdlinebuss =="wholesalers, distributors, or dealers")
        {
              wholesalers.forEach(function(code){
              data += "<option value='"+code+"'>"+code+"</option>";
           });
        }
        else if (stdlinebuss =="wholesalers")
        {
              wholesalers.forEach(function(code){
              data += "<option value='"+code+"'>"+code+"</option>";
           });
        }
        else if (stdlinebuss =="retailers")
        {
              data += "<option value='Sari-Sari Store'>Sari-Sari Store</option>";
        }
        else if (stdlinebuss =="food")
        {
              food.forEach(function(code){
              data += "<option value='"+code+"'>"+code+"</option>";
           });
        }
        else if (stdlinebuss =="contractors")
        {
              contractors.forEach(function(code){
                data += "<option value='"+code+"'>"+code+"</option>";
                });
           data += "<option value='' class='font-weight-bold bg-gray'>ESSENTIALS</option>";

           data += "<option value='lying in clinic'>Lying in clinic</option>";
           data += "<option value='medical services/laboratories'>Medical Services/Laboratories</option>";
           data += "<option value='hospital/medical clinic'>Hospital/Medical Clinic</option>";
           data += "<option value='veterinary clinic'>Veterinary Clinic</option>";
           data += "<option value='feed milling/rice mill'>Feed Milling/Rice Mill</option>";
        }
        else if (stdlinebuss =="banks and other financial institutions")
        {
              banks.forEach(function(code){
              data += "<option value='"+code+"'>"+code+"</option>";
           });
        }
        else if (stdlinebuss =="lease")
        {
              lease.forEach(function(code){
              data += "<option value='"+code+"'>"+code+"</option>";
           });
        }
        else if (stdlinebuss =="dealers of liquors")
        {
              dealersLiquors.forEach(function(code){
              data += "<option value='"+code+"'>"+code+"</option>";
           });
        }
        else if (stdlinebuss =="other business")
        {
              other.forEach(function(code){
              data += "<option value='"+code+"'>"+code+"</option>";
           });
        }
        else {
            data += "<option value=''></option>";
        }
          $("#addcode").html(data );
        });

      $("#addline1").change(function(){
        var stdlinebuss = $(".addlinebuss1 option:selected").val();
        var data = "<option value =''>Code of Business</option>";

          if (stdlinebuss =="manufacturers")
          {
                manufacturers.forEach(function(code){
                data += "<option value='"+code+"'>"+code+"</option>";

             });
          }
          else if (stdlinebuss =="wholesalers, distributors, or dealers")
          {
                wholesalers.forEach(function(code){
                data += "<option value='"+code+"'>"+code+"</option>";
             });
          }
          else if (stdlinebuss =="wholesalers")
          {
                wholesalers.forEach(function(code){
                data += "<option value='"+code+"'>"+code+"</option>";
             });
          }
          else if (stdlinebuss =="retailers")
          {
                data += "<option value='Sari-Sari Store'>Sari-Sari Store</option>";
          }
          else if (stdlinebuss =="food")
          {
                food.forEach(function(code){
                data += "<option value='"+code+"'>"+code+"</option>";
             });
          }
          else if (stdlinebuss =="contractors")
          {
                contractors.forEach(function(code){
                  data += "<option value='"+code+"'>"+code+"</option>";
                  });
             data += "<option value='' class='font-weight-bold bg-gray'>ESSENTIALS</option>";

             data += "<option value='lying in clinic'>Lying in clinic</option>";
             data += "<option value='medical services/laboratories'>Medical Services/Laboratories</option>";
             data += "<option value='hospital/medical clinic'>Hospital/Medical Clinic</option>";
             data += "<option value='veterinary clinic'>Veterinary Clinic</option>";
             data += "<option value='feed milling/rice mill'>Feed Milling/Rice Mill</option>";
          }
          else if (stdlinebuss =="banks and other financial institutions")
          {
                banks.forEach(function(code){
                data += "<option value='"+code+"'>"+code+"</option>";
             });
          }
          else if (stdlinebuss =="lease")
          {
                lease.forEach(function(code){
                data += "<option value='"+code+"'>"+code+"</option>";
             });
          }
          else if (stdlinebuss =="dealers of liquors")
          {
                dealersLiquors.forEach(function(code){
                data += "<option value='"+code+"'>"+code+"</option>";
             });
          }
          else if (stdlinebuss =="other business")
          {
                other.forEach(function(code){
                data += "<option value='"+code+"'>"+code+"</option>";
             });
          }
          else {
              data += "<option value=''></option>";
          }

            $("#addcode1").html(data );
          });



});
//end of document ready function


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
    sessionStorage.setItem("bussId",0);
      window.location.href = "/signin_requestor";
  }
