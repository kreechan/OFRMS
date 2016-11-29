<link href='assets/css/fullcalendar.css' rel='stylesheet' />
<script src='assets/js/moment.min.js'></script>
<script src='assets/js/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev, today',
				center: 'title',
				right: 'next'
			},
			defaultDate: '2016-09-12',
			navLinks: true, // can click day/week names to navigate views
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('Event Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
					
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},
			editable: false,    //dragable
			eventLimit: 2, // allow "more" link when too many events
			events: [
				{
					title: '2',
					start: '2016-09-01'
				},
				{
					id: 999,
					title: '4',
					start: '2016-09-09'
				},
				{
					id: 999,
					title: '2',
					start: '2016-09-16'
				},
				{
					title: '3',
					start: '2016-09-11',
				}
				
			],
            eventClick: function(event) {
                alert("hello");
                 $('.ui.dropdown')
                     .dropdown({transition: 'drop'});
            }
		});
		
	});

</script>
<style>
   
	body {
        
		padding: 0;
		font-family: "Montserrat",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		width: 850px;
		margin: 0 auto;
		
	}
     .fc-event{
        display: inline-block;
    width:55px;
    height:55px;
    border-radius:250px;
    font-size:23px;
    color:#fff;
    line-height:55px;
    text-align:center;
    text-decoration: none;
    } 

    .fc-toolbar{
        background-color: #24a033;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        padding: 20px;
        margin-bottom: 0px;
    }
    .fc-center{
        color: #fff;
    }
.fc-day:hover{
    background:#dcffe5;
    cursor: pointer;
}
/*Allow pointer-events through*/
.fc-slats, /*horizontals*/
.fc-content-skeleton, /*day numbers*/
.fc-bgevent-skeleton /*events container*/{
    pointer-events:none
}

/*Turn pointer events back on*/
.fc-bgevent,
.fc-event-container{
    pointer-events:auto; /*events*/
    position: relative;
     display: table;
        margin: 0 auto;
}
    th span{
        color:
    }
    a{
        color:#353936; 
}
</style>


	<div id='calendar'></div>

