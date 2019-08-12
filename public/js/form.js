
  $(document).ready(function(){

$('.tin').mask('0000-0000-0000' );
$('.ornum').mask('00-00-000' );
$('.money').mask("#,##0.00", {reverse: true});
$('.pin').mask('0000');
$('.cell').mask('0000-000-0000' );
$('.tel').mask('000-000' );
$('.postcode').mask('0000' );
$('.date').mask('yyyy/dd/mm' );
$('.mobile').mask('0000-000-0000' );

//////login JS

$(".email-signup").hide();
$("#signup-box-link").click(function(){
  $(".email-login").fadeOut(100);
  $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
});
$("#login-box-link").click(function(){
  $(".email-login").delay(100).fadeIn(100);;
  $(".email-signup").fadeOut(100);
  $("#login-box-link").addClass("active");
  $("#signup-box-link").removeClass("active");
});

});
