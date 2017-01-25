<!-- End of top menu -->
 <div class="ui link centered cards five doubling" > <!-- or use "three doubling" -->
 <?php 
         $count =1;
         foreach($halls as $row):
     ?>
  <div class="card">
    <div class="image">
      <img src="<?php echo base_url(); ?>assets/images/picmust.png">
    </div>
    <div class="content">
      <div class="header"><?=$row->hall_name?></div>
      <div class="meta">
        <p>P<?=$row->hall_price?>.00</p>
      </div>
      <div class="description">
       <?=$row->hall_description?>
      </div>
    </div>
    <a href="<?php echo base_url('cards_hall/calendar');?>" class="ui bottom attached mybutton button">
      <i class="lock icon large"></i>
     RESERVE
    </a>
  </div>
       <?php  $count++;  endforeach; ?>
</div>
  


<!-- end of body content -->