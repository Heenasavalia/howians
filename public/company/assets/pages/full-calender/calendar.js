"use strict";
$(document).ready(function() {
    $('#external-events .fc-event').each(function() {
        $(this).data('event', {
            title: $.trim($(this).text()),
            stick: true
        });
        $(this).draggable({
            zIndex: 999,
            revert: true,
            revertDuration: 0
        });
    });
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
        },
        defaultDate: '2016-09-12',
        navLinks: true,
        businessHours: true,
        editable: true,
        droppable: true,
        drop: function() {
            if ($('#checkbox2').is(':checked')) {
                $(this).remove();
            }
        },
        events: [{
            title: 'Business Lunch',
            start: '2016-09-03T13:00:00',
            constraint: 'businessHours',
            borderColor: '#FC6180',
            backgroundColor: '#FC6180',
            textColor: '#fff'
        }, {
            title: 'Meeting',
            start: '2016-09-13T11:00:00',
            constraint: 'availableForMeeting',
            editable: true,
            borderColor: '#4680ff',
            backgroundColor: '#4680ff',
            textColor: '#fff'
        }, {
            title: 'Conference',
            start: '2016-09-18',
            end: '2016-09-20',
            borderColor: '#93BE52',
            backgroundColor: '#93BE52',
            textColor: '#fff'
        }, {
            title: 'Party',
            start: '2016-09-29T20:00:00',
            borderColor: '#FFB64D',
            backgroundColor: '#FFB64D',
            textColor: '#fff'
        }, {
            id: 'availableForMeeting',
            start: '2016-09-11T10:00:00',
            end: '2016-09-11T16:00:00',
            rendering: 'background',
            borderColor: '#ab7967',
            backgroundColor: '#ab7967',
            textColor: '#fff'
        }, {
            id: 'availableForMeeting',
            start: '2016-09-13T10:00:00',
            end: '2016-09-13T16:00:00',
            rendering: 'background',
            borderColor: '#39ADB5',
            backgroundColor: '#39ADB5',
            textColor: '#fff'
        }, {
            start: '2016-09-24',
            end: '2016-09-28',
            overlap: false,
            rendering: 'background',
            borderColor: '#FFB64D',
            backgroundColor: '#FFB64D',
            color: '#d8d6d6'
        }, {
            start: '2016-09-06',
            end: '2016-09-08',
            overlap: false,
            rendering: 'background',
            borderColor: '#ab7967',
            backgroundColor: '#ab7967',
            color: '#d8d6d6'
        }]
    });
});