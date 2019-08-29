
console.clear();
var error= "";
var uiFormSlide = {
  init: function() {
    this.steps = $(".ui-formSlide > [data-step]");
    this.currentStep = 0;
    $("#btnPrev").hide();

    $(this.steps[0])
      .addClass("active")
      .find(".ui-step-content")
      .addClass("in");
  },
  goTo: function(index) {
    this.play(index);
  },
  next: function() {
    this.nextStep = this.getNext(this.currentStep);
    this.animateHeight($(this.steps[this.nextStep]).outerHeight());
    this.currentStep = this.getNext(this.currentStep);
      $("#btnPrev").hide();

      error = 0;

      if (this.nextStep == 1)
      {
        var empty = false;
        $('input[name^="app"]').each(function(app) {


        if($(this).val().trim()==""){
            empty = true;
            $(this).addClass("fillthis");
        }else{
            $(this).removeClass("fillthis");
        }
      })
        //

        var dti_sec = $("input[name$='app[dti_sec]']").val();
        var tin = $("input[name$='app[tin]']").val();
        var dti = $("input[name$='app[dti_number]']").val();
        var buss_specifyentity = $("input[name$='app[buss_specifyentity]']").val();
        var cctv_eqp = $("input[name$='app[cctv_eqp]']").val();
        var tax_last_name = $("input[name$='app[tax_last_name]']").val();
        var tax_first_name = $("input[name$='app[tax_first_name]']").val();
        var tax_middle_name = $("input[name$='app[tax_middle_name]']").removeClass('fillthis');
        var tax_buss_name = $("input[name$='app[tax_buss_name]']").val();
        var tax_franchise = $("input[name$='app[tax_franchise]']").val();
        var tax_president = $("input[name$='app[tax_president]']").val();
        var tax_gender = $("input[name$='app[tax_gender]']").val();

        if( dti_sec == '' || tin == '' || dti == '' || buss_specifyentity == '' || cctv_eqp == '' || tax_last_name == '' || tax_first_name == '' || tax_buss_name== '' || tax_franchise== '' || tax_president== '' || tax_gender== '' )
        {this.currentStep = 0; this.nextStep = 1;goback();}
        else {this.nextStep = 2;}
     }

      else if (this.nextStep == 2)
      {

        var empty = false;
        $('input[name^="app"]').each(function(app) {


        if($(this).val().trim()==""){
            empty = true;
            $(this).addClass("fillthis");
        }else{
            $(this).removeClass("fillthis");
        }
      })
        //

        var buss_address = $("input[name$='app[buss_address]']").val();
        var buss_houseno = $("input[name$='app[buss_houseno]']").val();
        var buss_bldgname = $("input[name$='app[buss_bldgname]']").val();
        var buss_unit = $("input[name$='app[buss_unit]']").val();
        var buss_street = $("input[name$='app[buss_street]']").val();
        var buss_barangay = $("input[name$='app[buss_barangay]']").val();
        var buss_subdivision = $("input[name$='app[buss_subdivision]']").val();

        var buss_city = $("input[name$='app[buss_city]']").val();
        var buss_province = $("input[name$='app[buss_province]']").val();
        var buss_phone = $("input[name$='app[buss_phone]']").val();
        var owner_lastname = $("input[name$='app[owner_lastname]']").val();
        var owner_firstname = $("input[name$='app[owner_firstname]']").val();
        var owner_middlename = $("input[name$='app[owner_middlename]']").removeClass('fillthis');

        var owner_postcode = $("input[name$='app[owner_postcode]']").val();
        var owner_houseno = $("input[name$='app[owner_houseno]']").val();
        var owner_bldgname = $("input[name$='app[owner_bldgname]']").val();
        var owner_unit = $("input[name$='app[owner_unit]']").val();
        var owner_street = $("input[name$='app[owner_street]']").val();
        var owner_barangay = $("input[name$='app[owner_barangay]']").val();

        var owner_subdivision = $("input[name$='app[owner_subdivision]']").val();
        var owner_city = $("input[name$='app[owner_city]']").val();
        var owner_province = $("input[name$='app[owner_province]']").val();
        var owner_tel_no = $("input[name$='app[owner_tel_no]']").val();
        var owner_mobile = $("input[name$='app[owner_mobile]']").val();

        var emp_in_lgu = $("input[name$='app[emp_in_lgu]']").removeClass('fillthis');
        var male_emp = $("input[name$='app[male_emp]']").removeClass('fillthis');
        var female_emp = $("input[name$='app[female_emp]']").removeClass('fillthis');
        var service_vehicle = $("input[name$='app[service_vehicle]']").removeClass('fillthis');

        var lessor_last_name = $("input[name$='app[lessor_last_name]']").removeClass('fillthis');
        var lessor_first_name = $("input[name$='app[lessor_first_name]']").removeClass('fillthis');
        var lessor_middle_name = $("input[name$='app[lessor_middle_name]']").removeClass('fillthis');
        var lessor_address = $("input[name$='app[lessor_address]']").removeClass('fillthis');
        var lessor_tel_no = $("input[name$='app[lessor_tel_no]']").removeClass('fillthis');
        var lessor_email = $("input[name$='app[lessor_email]']").removeClass('fillthis');
        var lessor_monthly_rental = $("input[name$='app[lessor_monthly_rental]']").removeClass('fillthis');

        if(buss_address == '' || buss_houseno == '' || buss_bldgname== '' || buss_unit== '' || buss_street== '' || buss_barangay == '' || buss_subdivision== '' || buss_city== '' || buss_province== '' || buss_phone== '' || owner_lastname== '' || owner_firstname== '' ||  owner_postcode== '' || owner_houseno== '' || owner_bldgname== '' || owner_unit== '' || owner_street== '' || owner_barangay== '' || owner_subdivision== '' || owner_city == '' || owner_province == '' || owner_tel_no == '' || owner_mobile == '')
        {this.currentStep = 1; goback();}
        else {this.nextStep = 3;}

        if ($('#owner_email').val() != ''){
          var email = $('#owner_email').val();
           validateEmail(email);

           if (validateEmail(email)) {
             console.log("validated");
           }
           else {
              notify('Invalid format of  owner\'s email', 'danger');
           }
        }

        if ($('#buss_email').val() != ''){
          var email = $('#buss_email').val();
           validateEmail(email);

           if (validateEmail(email)) {
             console.log("validated");
           }
           else {
              notify('Invalid format of  business email', 'danger');
           }
        }

       }



      else if (this.nextStep == 3)
      {
        if($("#addline1").val() == '' )
        {$("#addline1").addClass('fillthis');this.currentStep = 2;goback();}
        else {$("#addline1").removeClass('fillthis');this.nextStep = 4;}

        if($("addcode1").val() == '' )
        {$("addcode1").addClass('fillthis');this.currentStep = 2;goback();}
        else {$("addcode1").removeClass('fillthis');this.nextStep = 4;}

        if($("input[name$='app[no_units]']").val() == '' )
        {$("input[name$='app[no_units]']").addClass('fillthis');this.currentStep = 2;goback();}
        else {$("input[name$='app[no_units]']").removeClass('fillthis');this.nextStep = 4;}

        if($("input[name$='app[capitalization]']").val() == '' )
        {$("input[name$='app[capitalization]']").addClass('fillthis');this.currentStep = 2;goback();}
        else {$("input[name$='app[capitalization]']").removeClass('fillthis');this.nextStep = 4;}

        if($("input[name$='app[subcategory]']").val() == '' )
        {$("input[name$='app[subcategory]']").addClass('fillthis');this.currentStep = 2;goback();}
        else {$("input[name$='app[subcategory]']").removeClass('fillthis');this.nextStep = 4;}

      }

      else if (this.nextStep == 4)
      {
        this.nextStep = 5;
        $("#btnNext").hide();
      }

      else {
        return false;
      }

      if (error == 1)
      {notify('Fill up input fields', 'danger');}
      else{
          $('input[name^="app"]').each(function(app) {
              $(this).removeClass("fillthis");
          })
      }

      if (this.nextStep > 1)
      { $("#btnPrev").show();}

      function goback()
      {
        $('body,html').animate({scrollTop: 0}, 900);
        error = 1;
        return false;
      }
      function validateEmail(email) {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);

      }

      if (this.nextStep == 5)
      {

      }


      $('body,html').animate({scrollTop: 0}, 800);
      this.play(this.currentStep, 'forward');
  },


  prev: function() {
    this.prevStep = this.getPrev(this.currentStep);
    this.animateHeight($(this.steps[this.prevStep]).outerHeight());
    this.currentStep = this.getPrev(this.currentStep);
    this.play(this.currentStep, 'backward');
    if (this.prevStep == 0)
    {
      $("#btnPrev").hide();
    }
    else {
        $("#btnNext").show();
    }
    console.log(this.prevStep);
  },
  getNext: function(currentStep) {
    return currentStep + 1 >= this.steps.length ? 0 : currentStep + 1;
  },
  getPrev: function(currentStep) {
    return currentStep - 1 < 0 ? this.steps.length - 1 : currentStep - 1;
  },
  play: function(currentStep, direction) {
    var _self = this;
    $('.ui-formSlide').removeClass('forward backward').addClass(direction);
    $(this.steps[currentStep])
      .addClass("active")
      .siblings("[data-step]")
      .removeClass("active");
    setTimeout(function() {
      $(_self.steps[currentStep])
        .find(".ui-step-content")
        .addClass("in")
        .end()
        .siblings("li")
        .find(".ui-step-content")
        .removeClass("in");
    }, 300);
  },
  animateHeight: function(targetHeight) {
    $(".ui-formSlide").animate(
      {
        height: targetHeight + "px"
      },
      300,
      function() {
        $(".ui-formSlide").css("height", "auto");
      }
    );
  }
};

$(document).ready(function() {
  uiFormSlide.init();

  $("#btnNext").click(function(e) {
	  uiFormSlide.next();
  });

  $("#btnPrev").click(function() {
    uiFormSlide.prev();

		$('body,html').animate({
							scrollTop: 0
					}, 800);
  });


  var modepayment = $("input[name='app[basicnew]']:checked").val();
  if (modepayment == "new")
  {
    $("#clearall").show();
  }
  else {
    $("#clearall").hide();
  }
  $("#clearall").click(function(e) {
    $('#addnewbuss')[0].reset();
  });

});
function notify(msg, type,responseTime) {
	setTimeout(function () {
		$.bootstrapGrowl(msg, {
			type: type,
			align: 'right',
			width: 'auto',
			allow_dismiss: false
		});
	}, responseTime);}
