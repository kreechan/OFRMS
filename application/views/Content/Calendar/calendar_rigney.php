<link href='<?php echo base_url(); ?>assets/css/fullcalendar.css' rel='stylesheet' />
<script src='<?php echo base_url(); ?>assets/js/moment.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/fullcalendar.min.js'></script>
<?php if($this->session->flashdata('success')): ?>
<script>alert('success!');</script>
<?php endif; ?>
<script>

	$(document).ready(function() {
		
    var obj;

    $.ajax({
      type: 'post',
      data: {},
      url: '<?= base_url()."client_reservation/getReservations"?>',
      success: function(data){

     obj = JSON.parse(data);
    if(obj){
    $('#calendar').fullCalendar({
      header: {
        left: 'prev, today',
        center: 'title',
        right: 'month, agendaWeek,agendaDay'
      },
      height: 600,
      defaultDate: new Date(),
      // minTime: '07:00:00',
      // maxTime: '22:00;00',
      navLinks: false, // can click day/week names to navigate views
      selectable: true,
      selectHelper: true,
            allDaySlot: false,
      editable: true,    
      events: [obj.result],
          
          eventClick: function(calEvent,jsEvent,view){
                $('#calendarmodal').modal('show');
          },
          eventDrop: function(event, delta, revertFunc){
            alert(event.title);
          },
          dayClick: function(date, d){
              var date =  moment(date).format('YYYY-MM-DD');
              $.getJSON('<?php echo base_url('client_reservation/retrieve_reservations')?>',{
                date:date
              }).done(function(res){
                console.log(res)
                $('#eventlist').html('')
                $(res.data).each(function(i,v){
                  $('#eventlist').append('<li>'+'ACTIVITY: '+v.activity+ '<br>' + 'DEPARTMENT: '+ v.department + '<br>'+'START DATE AND TIME: '+moment(v.event_datetime).format('MMMM DD, YYYY hh:mm A')+ '<br>'+'END DATE AND TIME: ' +moment(v.event_endtime).format('MMMM DD, YYYY hh:mm A')+'</li>')
                })
                $('#calendarmodal').modal('show');
              })
              $('#hidden-date').val(date);
              
          }
          
       

        }); 
        } //if obj;
        else{
          $("#calendar").fullcalendar();
        }
      } //end of success function

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
		width: 1000px; /*850 old value*/
		margin: 0 auto;
        background-color: rgba(255, 255, 255, 0.50);
		
	}
    

    .fc-toolbar{
        background-color: #24a033;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        padding: 40px 20px 20px; /*20 old value*/
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
<!--first modal-->
<div class="uno ui large stackable long modal" id="calendarmodal">
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
      <ul id="eventlist">
      </ul>
    </div>
  </div>
  
</div>
<!--second modal-->
<div class="ui large stackable long modal" id="dosmodal">
     <i class="close icon"></i>
  <div class="header">
   Book Reservation
  </div>
  <div class="content">
    <?=form_open('client_reservation/add_reserve');?>
      <div class="ui form">
      <table>
        <tr>
          <div class="field">
            <td>Firsname: &nbsp;</td>
            <td><input type="text" name="firstname" value="<?php echo $this->session->userdata('user_data')['fname']; ?>"></td>
            <td>Lastname: &nbsp;</td>
            <td><input type="text" name="lastname" value="<?php echo $this->session->userdata('user_data')['lname']?>"></td>
          </div>
        </tr>
        <tr>
            <td><p style="margin:12px 0px;"></p></td>
        </tr>
        <tr>
          <div class="field">
            <td>Activity: &nbsp;</td>
            <td><input type="text" name="activity"></td>
          </div>
        </tr>
        <tr>
            <td><p style="margin:12px 0px;"></p></td>
        </tr>
        <tr>
          <div>
            <td>Hall Name: &nbsp;</td>
            <td><input type="text" name="hallname"></td>
          </div>
        </tr>
        <tr>
          <td><p style="margin:12px 0px;"></p></td>
        </tr>
         <tr>
            <td>Department: &nbsp;</td>
            <td><input type="text" name="department" value="<?php echo $this->session->userdata('user_data')['dept']?>"></td>
        </tr>
        <tr>
        <td><p style="margin:12px 0px;"></p></td>
        </tr>
        <tr>
            <td>Time Start: &nbsp;</td>
            <td>
                <input type="hidden" name="date" id="hidden-date">
                <select  name="timestart" class="ui compact dropdown">
                    <option value="7:30 AM">7:30AM</option>
                    <option value="8:00 AM">8:00AM</option>
                    <option value="8:30 AM">8:30AM</option>
                    <option value="9:00 AM">9:00AM</option>
                    <option value="9:30 AM">9:30AM</option>
                    <option value="10:00 AM">10:00AM</option>
                    <option value="10:30 AM">10:30AM</option>
                    <option value="11:00 AM">11:00AM</option>
                    <option value="11:30 AM">11:30AM</option>
                    <option value="12:00 AM">12:00AM</option>
                    <option value="12:30 PM">12:30PM</option>
                    <option value="1:00PM">1:00PM</option>
                    <option value="1:30PM">1:30PM</option>
                    <option value="2:00PM">2:00PM</option>
                    <option value="2:30PM">2:30PM</option>
                    <option value="3:00PM">3:00PM</option>
                    <option value="3:30 PM">3:30PM</option>
                    <option value="4:00 PM">4:00PM</option>
                    <option value="4:30 PM">4:30PM</option>
                    <option value="5:00 PM">5:00PM</option>
                    <option value="5:30 PM">5:30PM</option>
                    <option value="6:00 PM">6:00PM</option>
                    <option value="6:30 PM">6:30PM</option>
                </select>
                 - 
                <select  name="timeend" class="ui compact dropdown">
                    <option value="8:00 AM">8:00AM</option>
                    <option value="8:30 AM">8:30AM</option>
                    <option value="9:00 AM">9:00AM</option>
                    <option value="9:30 AM">9:30AM</option>
                    <option value="10:00 AM">10:00AM</option>
                    <option value="10:30 AM">10:30AM</option>
                    <option value="11:00 AM">11:00AM</option>
                    <option value="11:30 AM">11:30AM</option>
                    <option value="12:00 PM">12:00PM</option>
                    <option value="12:30 PM">12:30PM</option>
                    <option value="1:00 PM">1:00PM</option>
                    <option value="1:30 PM">1:30PM</option>
                    <option value="2:00 PM">2:00PM</option>
                    <option value="2:30 PM">2:30PM</option>
                    <option value="3:00 PM">3:00PM</option>
                    <option value="3:30 PM">3:30PM</option>
                    <option value="4:00 PM">4:00PM</option>
                    <option value="4:30 PM">4:30PM</option>
                    <option value="5:00 PM">5:00PM</option>
                    <option value="5:30 PM">5:30PM</option>
                    <option value="6:00 PM">6:00PM</option>
                    <option value="6:30 PM">6:30PM</option>
                </select>
            </td>
        </tr>
       <tr>
          <td>
              <p style="margin:12px 0px;"></p>
            </td>
       </tr>

       <tr>
           <div class="field">
              <td>Purpose: &nbsp;</td>
              <td><textarea name="purpose" id="" cols="15" rows="5"></textarea></td>
          </div>
        </tr>

        <tr>
           <div class="field">
              <td>Date Picked: &nbsp;</td>
              <td><input type="text" id = "datepicked" value = ""></input></td>
          </div>
        </tr>

      </table>
  </div>
  </div>
  <div class="actions">
    <div class="ui red cancel inverted button">
      Cancel
    </div>
    <input  value="Save" type="submit" class="ui green ok inverted button">
  </div>
  <?=form_close();?>
  
</div>
<!--end of second modal-->
<div>
<center><img style="width: 1000px; margin-bottom:-20px; border-radius: 10px 10px 0px 0px;" src="<?php echo base_url('assets/images/tbhall2.jpg'); ?>" alt=""></center>
<div id='calendar'></div>
</div>


    
<!--
	select: function(start, end) {
				var title = prompt('Event Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},
-->

