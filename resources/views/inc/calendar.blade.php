<div id='calendar'></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'dayGrid', 'googleCalendar' ],
    header: {
      left: 'prev',
      center: 'title',
      right: 'next today'
    };


    // THIS KEY WON'T WORK IN PRODUCTION!!!
    // To make your own Google API key, follow the directions here:
    // http://fullcalendar.io/docs/google_calendar/
    googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',


    eventClick: function(arg) {

      // opens events in a popup window
      window.open(arg.event.url, '_blank', 'width=700,height=650');

      // prevents current tab from navigating
      arg.jsEvent.preventDefault();
    }

  });

  calendar.render();
});
</script>
