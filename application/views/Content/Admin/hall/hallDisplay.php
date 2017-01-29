
<div class="ui container"><br>
  <h1 align="center">Hall Management</h1><br>
    <!-- search box -->
  <div class="ui grid">
  <div class="two column row">
<div class="left floated column"><a class="ui mybutton approve button left aligned small" onClick="add_hall()"><i class="add icon"></i>ADD HALL</a></div>

    <div class="right floated column right aligned ">
      <form action="<?php echo site_url('main/search_keyword');?>" method = "post">
    <div class="ui left aligned category search">
      <button data-tooltip="View all list :)"  href="<?php echo base_url('main/viewHall');?>" class="circular basic small ui icon button"><i class="list icon"></i></button>
  <div class="ui icon input">
    <input class="prompt" placeholder="Search hall name.." type="text" name = "keyword">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
  </form></div>
  </div>
</div>

<table class="ui celled striped selectable padded table">
  <thead>
    <tr>
    <!-- <th class="center"></th> -->
    <th class="one wide" style="text-align:center; background-color:#f0f0f0"></th>
    <th class="two wide" style="background-color:#f0f0f0">Hall Name</th>
    <th class="two wide" style="background-color:#f0f0f0">Location</th>
    <th class="three wide" style="background-color:#f0f0f0">Description</th>
    <th class="two wide" style="text-align:center; background-color:#f0f0f0 ">Price</th>
    <th class="two wide" style="text-align:center; background-color:#f0f0f0">Approver</th>
    <th class="two wide" style="text-align:center; background-color:#f0f0f0">Last Modified</th>
    <th class="two wide" style="text-align:center; background-color:#f0f0f0">Action</th>
    </tr>
  </thead>
   <tbody> 
    <?php 
         $count =1;
         foreach($halls as $row):
     ?>
  
    <tr>
      <!-- <td><//?=$row->hall_id?></td> -->
       <td class="selectable" onClick="test(<?= $row->hall_pic ?>);">
      <a href=""><img  style="border-radius: 50%; width:50px;" src="<?php echo base_url(); ?>assets/images/usc-logo.png" alt=""></a>
      </td>
      <td><?=$row->hall_name?></td>
      <td><?=$row->build_name?></td>
      <td><?=$row->hall_description?></td>
      <td><?=$row->hall_price?>.00</td>
      <td></td>
      <td><?=$row->hall_lastmodified?></td>
      <td>
       <div class="column mycenter">
          <a class="ui icon tiny black button" href="<?=base_url();?>main/editHall/<?=$row->hall_id?>" value = "<?= $row->hall_id ?>" id = "hallID"><i class="write icon"></i></a>      
          <a class="ui icon tiny red button" href="javascript:;" onClick="confirm_delete(<?=$row->hall_id?>)"><i class="trash Outline icon"></i></a>
       </div>
      </td>
    </tr>
       <?php  $count++;  endforeach; ?>
  </tbody>
</table>
 </div>

 <!-- DELETE MODAL -->

  <div id="confirmdel" class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Delete Building
  </div>

  <div class="content">
      <p>Are you sure you want to delete this Hall?</p>
  </div>

  <div class="actions">
    <div class="ui red cancel inverted button">
      Cancel
    </div>
    <div class="ui green ok inverted button">
      Yes
    </div>
  </div>
</div>
<!-- ADD HALL MODAL -->

<div id="addmodal" class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Add Hall
  </div>

  <div class="content">
      <?=form_open('main/processAdd');?>
      <div class="ui form">
  <table cellpadding="5" border="0" >
    <tr>
      <div class="field">
       <td>Hall Name</td>
       <td><?=form_input('hallName');?></td>
       </div>
    </tr>
    <tr>
    <td><p style="margin:12px;"></p></td>
    <tr>
    
      <td>Building / Area Name  &nbsp;</td>

 <td><select class="ui dropdown" name="location">

           <?php foreach($buildings as $row):?>
             <option value="<?=$row->build_id?>"><?=$row->build_name?></option>
              <?php endforeach; ?>    
    </select></td>

    </tr>
    <tr>
    <td><p style="margin:12px;"></p></td>
    <tr>
    <tr>
      <td>Hall Price</td>
      <td><?=form_input('price');?></td>
    </tr>
    <tr>
    <td><p style="margin:12px;"></p></td>
    <tr>
     <div class="field">
     <td>Description</td>
      <td><?=form_textarea('descp');?></td>
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

<script>  
  function test(x){
     alert(x)
  }
    function add_hall(){
      $('#addmodal').modal('show')
    }
function confirm_delete(id)
    {
  $('#confirmdel').modal({

    closable  : true,
    onDeny    : function(){
     
    },
    onApprove : function() {
        window.location="<?=base_url()?>main/deleteHall/"+id;
    }
  })  
      .modal('show');
    }
</script>  