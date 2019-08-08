<!-- Custom JS HERE -->
<script type="text/javascript" src="/js/inputmask.js"></script>


$(document).ready(function(){

  $('.ornum').mask('00-00-000' );
  $('.money2').mask("#,##0.00", {reverse: true});
  $('.pin').mask('0000');
  $('.cell').mask('0000-000-0000' );
  $('.tel').mask('(000)000' );
  $('.postcode').mask('0000' );
  $('.date').mask('yyyy/dd/mm' );
  $('.tin').mask('0000-0000-0000' );
  });

</script>
