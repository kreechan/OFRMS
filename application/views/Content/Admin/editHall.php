<!-- Start of body content -->
<div class="ui items">
  <div class="item">
    <div class="ui small image">
      <img src="<?php echo base_url(); ?>assets/images/picmust.png">
    </div>
    <div class="middle aligned content">
      <div class="header">
        Rigney Hall
      </div>
    </div>
      <div class="extra">
        <div class="ui right floated button">
         <h1><a href="<?=base_url('user/main/viewHall');?>">Add User</a></h1>
        </div>
      </div>
    </div>
  </div>
</div>
  <table border="1" cellpadding="5" cellspacing="0" width="100%"  >
    <tr>
      <td align="center">Hall ID</td>
      <td align="center">Name</td>
      <td align="center">Description</td>
      <td align="center">price</td>
      <td align="center">Status</td>
      <td align="center">Action</td>
    </tr>
    <?php 
         foreach($halls as $row): 
     ?>
    <tr>
      <td align="center"><?=$row->hall_id?></td>
      <td align="center">
        <?=$row->hall_name?>  
      </td>
      <td align="center"><?=$row->hall_description?></td>
      <td align="center"><?=$row->hall_price?></td>
      <td align="center"><?=$row->hall_status?></td>
      <td>
        <a href=""> Edit </a>
        <a href=""> Delete </a>
      </td>
    </tr>
   <?php endforeach; ?>
   
<!-- POPUP -->
<script>
</script>   