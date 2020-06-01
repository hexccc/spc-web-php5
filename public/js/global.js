$(window).on('load', function () {
    setTimeout(function () {
        $('.preloader, .bar, .spinner').addClass('loaded');
    }); //800
    $(".preloader__img").fadeOut("slow");
    // setTimeout(function () {
    //     $('.fade-up').addClass('is-active');
    //     AOS.init({
    //         offset: 100,//200
    //         duration: 300,//600
    //         easing: 'ease-in-sine',
    //         delay: 50,//100
    //         disable: 'mobile'
    //     });
    // }, 500);//1000
    $(".webContent").show();
});

$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    
    }
  });