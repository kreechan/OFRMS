<!-- Start of body content -->
<br><br>
<div class="ui container" style="height:300px;">
<h3 class="ui myinverted top attached header">
  RESERVATION REQUEST
</h3>
<div class="ui attached segment" style="min-height: 80%;">
  <div class="ui three column grid stackable fluid computer only">
      <div class="column mycenter myinverted">ACTIVITY</div>
      <div class="column mycenter myinverted"></div>
      <div class="column mycenter myinverted">ACTION</div>
  </div>
   <?php
     foreach($req as $row):
    ?>
  <?php if($row->reservation_status == null) { ?>
     <div class="ui three column grid stackable fluid">
      <div class="column mycenter"><?=$row->activity?></div>
        <div class="column mycenter">
         
        <button class="small  ui myinverted blue basic button item" onClick="viewDetails(<?=$row->reserve_id?>)">View Details</button>
           
        </div>
      <div class="column mycenter">
          <button class="ui mybutton button">APPROVED</button>
          <button class="ui negative button">DENY</button>
      </div>
  </div>
       <?php   }  ?>
  <?php endforeach ?>
   
</div>
</div>
<!--MODAL-->
<div id="viewModal" class="ui modal">
  <i class="close icon"></i>
  <div class="">
  </div>
  <div class="content">
   
    <p>ID: <?=$row->reserve_id?></p>
    <p>ACTIVITY: <?=$row->activity?></p>
    <p>HALL: <?=$row->hall_name?></p>
    <p>DEPARTMENT: <?=$row->department?></p>
    <p>PURPOSE: <?=$row->purpose?></p>
    <p>START: <?=$row->event_datetime?></p>
    <p>END: <?=$row->event_endtime?></p>
    <p>START: <?=$row->event_dateEnd?></p>
  </div>
</div>
<script>
   function viewDetails($id){
        $('#viewModal').modal('show')
   }
</script>