var add_line_buss = [];

$(document).ready(function () {


  $('#logged').on('hide.bs.modal', function (e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
  });
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
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
});

// $('#signinReg').submit(function(e){
//     e.preventDefault();
//     console.log($('#signinReg').serializeArray());
//
//     $.ajax({
//       url:'/signinReg',
//       type:'POST',
//       data: $(this).serialize(),
//       datatype: 'json',
//       success : function(res)
//       {
//           console.log(res);
//
//       },
//       error : function()
//       {
//           console.log("error");
//       }
//     });
// });

function notify(msg, type,responseTime) {
	setTimeout(function () {
		$.bootstrapGrowl(msg, {
			type: type,
			align: 'right',
			width: 'auto',
			allow_dismiss: false
		});
	}, responseTime);}
});
