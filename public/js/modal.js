
  $("div[id^='event']").each(function(){

    var currentModal = $(this);

    currentModal.find('.btn-next').click(function(){
      currentModal.modal('hide');
      currentModal.closest("div[id^='event']").nextAll("div[id^='event']").first().modal('show');
    });

    currentModal.find('.btn-prev').click(function(){
      currentModal.modal('hide');
      currentModal.closest("div[id^='event']").prevAll("div[id^='event']").first().modal('show');
    });

  });


  $("div[id^='news']").each(function(){

    var currentModal = $(this);

    currentModal.find('.btn-next').click(function(){
      currentModal.modal('hide');
      currentModal.closest("div[id^='news']").nextAll("div[id^='news']").first().modal('show');
    });

    currentModal.find('.btn-prev').click(function(){
      currentModal.modal('hide');
      currentModal.closest("div[id^='news']").prevAll("div[id^='news']").first().modal('show');
    });

  });
