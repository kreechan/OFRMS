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
               $('.uno').modal('setting', 'transition', 'fade left').modal('show'); 
    }
		});
        $('#dosbutton').on('click', function(){
            $('#dosmodal').modal('setting', 'transition', 'fade left').modal('show');
        })
        
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
<div class="uno ui large stackable long modal">
     <i class="close icon"></i>
  <div class="header">
   Show list of reservations
    <div class="ui right floated buttons">
      <div class="ui mybutton button" id="dosbutton">
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
      <p>:)</p>
    </div>
  </div>
  
</div>
<!--second modal-->
<div class="ui large stackable long modal" id="dosmodal">
     <i class="close icon"></i>
  <div class="header">
   Book Reservation
<!--
    <div class="ui right floated buttons">
      <div class="ui mybutton button">
        <i class="add icon"></i>
        Book Reservation Now!
      </div>
    </div>
-->
  </div>
  <div class="content">
      <div class="ui form">
  <table>
    <tr>
      <div class="field">
        <td>Activity: &nbsp;</td>
        <td><input type="text"></td>
       </div>
    </tr>
    <tr>
    <td><p style="margin:12px 0px;"></p></td>
    </tr>
     <tr>
        <td>Department: &nbsp;</td>
        <td><input type="text"></td>
    </tr>
    <tr>
    <td><p style="margin:12px 0px;"></p></td>
    </tr>
    <tr>
        <td>Time Start: &nbsp;</td>
        <td>
            <select  name="timestart" class="ui compact dropdown">
                <option value="1">7:30AM</option>
                <option value="2">8:00AM</option>
                <option value="3">8:30AM</option>
                <option value="4">9:00AM</option>
                <option value="5">9:30AM</option>
                <option value="5">10:00AM</option>
                <option value="5">10:30AM</option>
                <option value="5">11:00AM</option>
                <option value="5">11:30AM</option>
                <option value="5">12:00AM</option>
                <option value="5">12:30PM</option>
                <option value="5">1:00PM</option>
                <option value="5">1:30PM</option>
                <option value="5">2:00PM</option>
                <option value="5">2:30PM</option>
                <option value="5">3:00PM</option>
                <option value="5">3:30PM</option>
                <option value="5">4:00PM</option>
                <option value="5">4:30PM</option>
                <option value="5">5:00PM</option>
                <option value="5">5:30PM</option>
                <option value="5">6:00PM</option>
                <option value="5">6:30PM</option>
            </select>
             - 
            <select  name="timeend" class="ui compact dropdown">
                <option value="2">8:00AM</option>
                <option value="3">8:30AM</option>
                <option value="4">9:00AM</option>
                <option value="5">9:30AM</option>
                <option value="5">10:00AM</option>
                <option value="5">10:30AM</option>
                <option value="5">11:00AM</option>
                <option value="5">11:30AM</option>
                <option value="5">12:00AM</option>
                <option value="5">12:30PM</option>
                <option value="5">1:00PM</option>
                <option value="5">1:30PM</option>
                <option value="5">2:00PM</option>
                <option value="5">2:30PM</option>
                <option value="5">3:00PM</option>
                <option value="5">3:30PM</option>
                <option value="5">4:00PM</option>
                <option value="5">4:30PM</option>
                <option value="5">5:00PM</option>
                <option value="5">5:30PM</option>
                <option value="5">6:00PM</option>
                <option value="5">6:30PM</option>
            </select>
        </td>
    </tr>
<tr>
    <td><p style="margin:12px 0px;"></p></td>
    </tr>

 <tr>
     <div class="field">
        <td>Purpose: &nbsp;</td>
        <td><textarea name="" id="" cols="15" rows="5"></textarea></td>
      </div>
    </tr>
  </table>
  </div>
  </div>
  
</div>
<div id='calendar'></div>
	
	

