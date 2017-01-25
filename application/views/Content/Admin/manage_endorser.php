<style>
    .special{
        color:red;
    }
</style>
<div class="ui container" style="min-height:420px;">
<div class="ui grid">
<div class="eight wide column">

 
  <!-- table start -->
<table style="cursor:pointer;" class="ui selectable table">
<thead>
    <th ><form style="float: right;" action="<?php echo site_url('main/searchEndorser');?>" method = "post">
    <div class="ui left aligned category search">
  <div class="ui icon input">
    <input class="prompt" placeholder="Search by name.."  type="text" name = "keyword">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
  </form></th>
</thead>
    <?php foreach($usersOutput as $row):?>
    <tbody class="pickEndorser">
    <tr>
         <td><?=$row->fname.'  '.$row->lname?></td>
    </tr>
         <?php    endforeach; ?>
</tbody>
</table>
</div>
<div class="seven wide column">
<table class="ui table" style="cursor:pointer;">
   <thead>
          
            <th><select class="ui dropdown fluid" id="hallname">
           <?php foreach($halls as $row):?>
             <option value="<?=$row->hall_name?>"><?=$row->hall_name?></option>
              <?php endforeach; ?>    
        </select></th>
          
    
</thead>
    <tbody id="donePick">
    </tbody>
</table>
</div>
<div class="one wide column">
<table class="ui selectable table">
   <thead >
<th style="padding: 32px;"></th>
</thead>
    <tbody id="order">
    </tbody>
</table>
</div>
</div>
</div>
<button class="ui button mybutton" onClick="submitEndorser();">Submit</button>
<script>
    var counter = 1;
    var arrX = [];  var arrOrder = []; //arrays
    var i = 0; //iterate
    var arrMerge = [];
 $(function(){
    $('.pickEndorser td').on('click', function(){
        $(this).hide();
    var x = $(this).html();
    $('#donePick').after('<tr><td>'+x+'</td></tr>');
    $('#order').after('<tr><td>'+counter+'</td></tr>');
        arrX[i] = x;
        arrOrder[i] = counter;
        i++;
        counter++;
     });
 });
    function submitEndorser(){
      
      var jsonName = JSON.stringify(arrX);
      var jsonSerial = JSON.stringify(arrOrder);
      var hallname = [];
      hallname[0] = $('#hallname').val();
      var jsonHallname = JSON.stringify(hallname)
    
    $.ajax({
      type: 'post',
      data: {arrX:jsonName, arrOrder: jsonSerial, hallname:jsonHallname}, 
      url: '<?= base_url()."main/insertEndorser"?>',
      success: function(data){
          alert("success!")
      }
      });
}
</script>

