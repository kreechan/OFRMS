<link href='<?php echo base_url(); ?>assets/css/fullcalendar.css' rel='stylesheet' />
<script src='<?php echo base_url(); ?>assets/js/moment.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev, today',
				center: 'title',
				right: 'next'
			},
			defaultDate: '2016-09-12',
            minTime: '07:00:00',
			maxTime: '22:00;00',
			navLinks: false, // can click day/week names to navigate views
			selectable: true,
			selectHelper: true,
            allDaySlot: false,
			clickable: true,
//			select: function(start, end) {
//				var title = prompt('Event Title:');
//				var eventData;
//				if (title) {
//					eventData = {
//						title: title,
//						start: start,
//						end: end
//					};
//					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
//				}
//				$('#calendar').fullCalendar('unselect');
//			},
			eventLimit: 3, // allow "more" link when too many events
			events: [
                {
					title: 'Conference',
					start: '2016-08-31',
					end: '2016-09-06'
				},
               
                {
					title: 'Film Viewing',
					start: '2016-09-01',
					end: '2016-09-06'
				},
				{
					id: 999,
					title: 'ONJT Seminar',
					start: '2016-09-09'
				},
				{
					id: 999,
					title: 'Symposium',
					start: '2016-09-16'
				},
				{
					title: 'Halaj Seminar',
					start: '2016-09-11',
				}
				
			],
           dayClick: function(date, jsEvent, view) {
               $('.ui.modal').modal('show'); 
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

/*Allow pointer-events through*/
.fc-slats, /*horizontals*/
.fc-content-skeleton, /*day numbers*/
.fc-bgevent-skeleton,
    .fc-day /*events container*/{

    cursor: pointer;
}

/*Turn pointer events back on*/
.fc-bgevent,
.fc-event-container{
    pointer-events:auto; /*events*/
text-align:;
}
    th span{
        color:
    }
    a{
        color:#353936; 
}
</style>
<div class="ui large stackable long modal">
  <div class="header">
   Show list of reservations
    <div class="ui right floated buttons">
      <div class="ui mybutton button">
        <i class="add icon"></i>
        Book Reservation Now!
      </div>
    </div>
  </div>
  <div class="image content">
    <div class="image">
      <i class="archive icon"></i>
    </div>
    <div class="description">
      <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
    </div>
  </div>
  
</div>
<div id='calendar'></div>
	
	

