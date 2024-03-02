var calendar;
var Calendar = FullCalendar.Calendar;
var events = [];
$(function() {
    if (!!scheds) {
        Object.keys(scheds).map(k => {
            var row = scheds[k]
            events.push({ ID: row.ID, Title: row.Title, Start: row.Start_date, End: row.End_date });
        })
    }
    var date = new Date()
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear()

    calendar = new Calendar(document.getElementById('calendar'), {
        headerToolbar: {
            left: 'prev,next today',
            right: 'dayGridMonth,dayGridWeek,list',
            center: 'Title',
        },
        selectable: true,
        themeSystem: 'bootstrap',
        
        events: events,
        
            eventClick: function(info) {
                var _details = $('#event-details-modal')
                var ID = info.event.ID
                if (!!scheds[ID]) {
                    _details.find('#Title').text(scheds[ID].Title)
                
                    _details.find('#Start').text(scheds[ID].sdate)
                    _details.find('#End').text(scheds[ID].edate)
                    _details.find('#edit,#remove').attr('data-ID', ID)
                    _details.modal('show')
                } else {
                    alert("Event is undefined");
                }
            },
            eventDidMount: function(info) {
                
            },
            editable: true
        });
        calendar.render();
 
        
        $('#schedule-form').on('reset', function() {
            $(this).find('input:hidden').val('')
            $(this).find('input:visible').first().focus()
        })
 
    
        $('#edit').click(function() {
            var id = $(this).attr('data-ID')
            if (!!scheds[ID]) {
                var _form = $('#schedule-form')
                console.log(String(scheds[ID].Start_date), String(scheds[ID].Start_date).replace(" ", "\\t"))
                _form.find('[name="ID"]').val(ID)
                _form.find('[name="Title"]').val(scheds[ID].Title)
                
                _form.find('[name="Start_date"]').val(String(scheds[ID].Start_date).replace(" ", "T"))
                _form.find('[name="End_date"]').val(String(scheds[ID].End_date).replace(" ", "T"))
                
                $('#event-details-modal').modal('hide')
                _form.find('[name="Title"]').focus()
            } else {
                alert("Event is undefined");
            }
        })
 
        
        $('#remove').click(function() {
            var ID = $(this).attr('data-ID')
            if (!!scheds[ID]) {
                var _conf = confirm("Are you sure to delete this scheduled event?");
                if (_conf === true) {
                    location.href = "./remove.php?id=" + ID;
                }
            } else {
                alert("Event is undefined");
            }
        })
    })