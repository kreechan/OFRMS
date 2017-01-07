<table class="ui celled  table">
  <thead>
    <tr>
    <th class="collapsing centered">Hall ID</th>
    <th>Hall Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Status</th>
    <th>Action</th>
    </tr>
  </thead>
    <?php 
         foreach($halls as $row): 
     ?>
  <tbody>
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
  </tbody>
</table>
   
<!-- POPUP -->
<script>
</script>   