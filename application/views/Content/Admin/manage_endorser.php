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
    <tbody id="donePick">
    </tbody>
</table>
</div>
<div class="one wide column">
<table class="ui selectable table" >
    <tbody id="order">
    </tbody>
</table>
</div>
</div>
</div>
<script>
    var counter = 0;
    var arrX = [];  var arrOrder = []; //arrays
    var i = -1; //iterate
    var arrMerge = [];
 $(function(){
    $('.pickEndorser td').on('click', function(){
        $(this).hide();
    var x = $(this).html();
    $('#donePick').after('<tr><td>'+x+'</td></tr>');
        counter++;
    $('#order').after('<tr><td>'+counter+'</td></tr>');
        i++;
        arrX[i] = x;
        arrOrder[i] = counter;
        arrMerge[i] = [arrX[i],arrOrder[i]];
        //alert(arrMerge[i]);
     });
 });
</script>

