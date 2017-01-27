<!-- Start of body content -->
<div class="ui container" style="min-height: 300px;">
<h3 class="ui myinverted top attached header">
  RESERVATION REQUEST
</h3>
<div class="ui attached segment">
  <div class="ui three column grid stackable fluid computer only">
      <div class="column mycenter myinverted">ACTIVITY</div>
      <div class="column mycenter myinverted"></div>
      <div class="column mycenter myinverted">ACTION</div>
  </div>
   <?php
     foreach($req as $row):
    ?>
  <div class="ui three column grid stackable fluid">
      <div class="column mycenter"><?=$row->activity?></div>
        <div class="column mycenter">
          
            <div class="ui detail-popup">
                <button class="small  ui myinverted blue basic button item">View Details</button>
            </div>
        </div>
      <div class="column mycenter">
          <button class="ui mybutton button">APPROVED</button>
          <button class="ui negative button">DENY</button>
      </div>
  </div>
   <?php endforeach ?>
</div>
  
</div>
<script>

</script>