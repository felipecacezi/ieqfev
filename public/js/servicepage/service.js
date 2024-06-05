document.addEventListener('DOMContentLoaded', function() {

    var altura = window.screen.height;
    var largura = window.screen.width;
    var mobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

    if ( 
        (largura < altura) 
        || mobile
    ) {
        var configs = {
            initialView: 'listWeek',
            locale: 'pt-BR',
            firstDay: 1,
            timeZone: 'UTC',
            events: '/service/all',
            eventClick: function(info) {
              window.location.href = '/admin/service-detail?id=' + info.event.id;
            },
            customButtons: {
              myCustomButton: {
                text: 'Novo',
                click: function() {
                  window.location.href = '/admin/new-schedule';
                }
              }
            },
            headerToolbar: {
              left: 'prev,next today myCustomButton',
              center: 'title',
              right: 'listWeek'
            }
          };
    } else {
        var configs = {
            initialView: 'dayGridMonth',
            headerToolbar: { center: 'dayGridMonth,listWeek' },
            locale: 'pt-BR',
            firstDay: 1,
            timeZone: 'UTC',
            events: '/service/all',
            eventClick: function(info) {
              window.location.href = '/admin/service-detail?id=' + info.event.id;
            },
            customButtons: {
              myCustomButton: {
                text: 'Novo',
                click: function() {
                  window.location.href = '/admin/new-schedule';
                }
              }
            },
            headerToolbar: {
              left: 'prev,next today myCustomButton',
              center: 'title',
              right: 'dayGridMonth,listWeek'
            }
          };
    }

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, configs);
    calendar.render();
});