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
});
