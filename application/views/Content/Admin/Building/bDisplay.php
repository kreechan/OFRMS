<div class="ui container"><br>
  <h1 align="center">Building Management</h1><br>

  <div class="ui grid">
  <div class="two column row">
    <div class="left floated column">
      <a class="ui mybutton approve button left aligned small" onClick="add_building()"><i class="add icon"></i>ADD BUILDING</a> 
    </div>

    <div class="right floated column right aligned ">
      <form action="<?php echo site_url('main/search_building');?>" method = "post">
    <div class="ui left aligned category search">

      <button data-tooltip="View all list :)"  href="<?php echo base_url('main/viewBuilding');?>" class="circular basic small ui icon button"><i class="list icon"></i></button>
  <div class="ui icon input">
    <input class="prompt" placeholder="Search hall name.." type="text" name = "keyword">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
  </form></div>
  </div>
</div>

<table class="ui striped celled fixed selectable padded table">
  <thead>
    <tr>
    <!-- <th class="collapsing centered"> </th> -->
    <th class="three wide">Building Name</th>
    <th class="six wide">Description</th>
    <th class="two wide" style="text-align:center;">Action</th>
    <th class="two wide" style="text-align:center;">Last Modified</th>
    </tr>
  </thead>
   <tbody> 
    <?php 
         $count =1;
         foreach($build as $row):
     ?>
    <tr>
      <!-- <td align="center"><?=$row->build_id?></td> -->
      <td align="center">
        <?=$row->build_name?>  
      </td>
      <td align="center"><?=$row->build_description?></td>
      <td>
       <div class="column mycenter">
          <a class="ui icon tiny black button" href="<?=base_url();?>main/editBuilding/<?=$row->build_id?>"><i class="write icon"></i></a>
          <a class="ui icon tiny red button" href="javascript:;" onClick="confirm_delete(<?=$row->build_id?>)"><i class="trash Outline icon"></i></a>
       </div>
      </td>
      <td><?=$row->lastmodified?></td>
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
      <p>Are you sure you want to delete this building?</p>
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

<!-- ADD BUILDING MODAL -->

 <div id="addmodal" class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Add Building
  </div>

  <div class="content">
      <p><?=form_open('main/submitBuilding');?>
      <div class="ui form">
  <table cellpadding="5" border="0" >
    <tr>
       <td>Building Name</td>
       <td><?=form_input('Bname');?></td>
    </tr>
       <tr>
    <td><p style="margin:12px;"></p></td>
    <tr>
       <tr>
    <td><p style="margin:12px;"></p></td>
    <tr>
    <tr>
      <td>Description</td>
      <td><?=form_textarea('Bdescp');?></td>
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
    function add_building(id){
      $('#addmodal').modal('show')
    }
    function confirm_delete(id)
    {
  $('#confirmdel').modal({

    closable  : true,
    onDeny    : function(){
     
    },
    onApprove : function() {
       window.location="<?=base_url()?>main/deleteBuild/"+id;
    }
  })  
      .modal('show')
      ;
    }

</script> 