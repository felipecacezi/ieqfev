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
            events: [
              {
                id: '1',
                title: 'Domingo - Manhã',
                start: '2024-05-26 09:00',
                end: '2024-05-26 11:00',
                backgroundColor: '#f00'
              },
              {
                  id: '2',
                  title: 'Domingo - Noite',
                  start: '2024-05-26 18:00',
                  end: '2024-05-26 20:00',
                  backgroundColor: '#f00'
              },
              {
                  id: '3',
                  title: 'Quarta-Feira',
                  start: '2024-05-22 20:00',
                  end: '2024-05-22 21:30',
                  backgroundColor: '#f00'
              }
            ],
            eventClick: function(info) {
              alert('Event: ' + info.event.title);
            }
          };
    } else {
        var configs = {
            initialView: 'dayGridMonth',
            headerToolbar: { center: 'dayGridMonth,listWeek' },
            locale: 'pt-BR',
            firstDay: 1,
            events: [
              {
                id: '1',
                title: 'Domingo - Manhã',
                start: '2024-05-26 09:00',
                end: '2024-05-26 11:00',
                backgroundColor: '#f00'
              },
              {
                  id: '2',
                  title: 'Domingo - Noite',
                  start: '2024-05-26 18:00',
                  end: '2024-05-26 20:00',
                  backgroundColor: '#f00'
              },
              {
                  id: '3',
                  title: 'Quarta-Feira',
                  start: '2024-05-22 20:00',
                  end: '2024-05-22 21:30',
                  backgroundColor: '#f00'
              }
            ],
            eventClick: function(info) {
              alert('Event: ' + info.event.title);
            }
          };
    }

    // alert(altura + '-' + largura);

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, configs);

    calendar.render();
});