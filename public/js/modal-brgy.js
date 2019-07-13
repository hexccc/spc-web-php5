$(document).ready(function() {
  $("#modalBrgy").on('show.bs.modal', function(e) {
    var link = e.relatedTarget.dataset,
        modal = $(this);
        title = link.title,
        chairman = 'Barangay Chairman: ' + link.chairman,
        contact = 'Contact Number: ' + link.contact,
        code = 'Barangay Code: ' + link.code;
    modal.find('#mTitle').text(title);
    modal.find('#mChMan').text(chairman);
    modal.find('#mCont').text(contact);
    modal.find('#mBrgyCode').text(code);
  });
  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

  // $("#moreNews").on('click', function(e) {
  //
  // })

  $.get('/api/getNews', function(response) {
    for(var i = 0; i < response.length; i++) {
      let data = response[i],
        id = 'id-' + data.id;
      $('#newsModals').append(
        `<div class="modal fade" id="${id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">` +
        `<div class="modal-dialog modal-dialog-centered">` +
        `<div class="modal-content">` +
        `<div class="modal-header">` +
        `<h5 class="modal-title" id="nTitle">${data.title}</h5>` +
        `<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>` +
        `</div>` +
        `<div class="modal-body">` +
        `<p id='nTitle'>${data.title}</p>` +
        `<p id='nSubtitle'>${data.subtitle}</p>` +
        `<p id='nContent'>${data.content}</p>` +
        `<img id="nThumbnail" alt="news-thumbnail" src="{{ URL::to('/') }}/image/{{${data.thumbnail}}}">` +
        `<iframe id="nVideo" width="" height=""></iframe>` +
        `</video></div></div></div></div>`
      );
    }
  });

});
