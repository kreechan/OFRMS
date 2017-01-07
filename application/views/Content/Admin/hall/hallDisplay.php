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

<table class="ui celled striped fixed selectable padded table">
  <thead>
    <tr>
    <!-- <th class="center"></th> -->
    <th class="one wide"></th>
    <th class="three wide">Hall Name</th>
    <th class="two wide">Building Location</th>
    <th class="four wide">Description</th>
    <th class="two wide">Price</th>
    <th class="two wide" style="text-align:center;">Action</th>
    <th class="two wide" style="text-align:center;">Last Modified</th>
    </tr>
  </thead>
   <tbody> 
    <?php 
         $count =1;
         foreach($halls as $row):
     ?>
  
    <tr>
      <!-- <td><//?=$row->hall_id?></td> -->
       <td class="">
         <img src="<?=$row->hall_pic?>" alt="">
      </td>
      <td>
        <?=$row->hall_name?>
      </td>
      <td>
        <?=$row->hall_building?>  
      </td>
      <td><?=$row->hall_description?></td>
      <td>P<?=$row->hall_price?>.00</td>

      <td>
       <div class="column mycenter">
          <a class="ui icon tiny black button" href="<?=base_url();?>main/editHall/<?=$row->hall_id?>"><i class="write icon"></i></a>
          
<!--          <a class="ui icon tiny black button" href="javascript:;" onClick="edit_func(<?=$row->hall_id?>)"><i class="write icon"></i></a>-->
          
          <a class="ui icon tiny red button" href="javascript:;" onClick="confirm_delete(<?=$row->hall_id?>)"><i class="trash Outline icon"></i></a>
       </div>
      </td>
      <td></td>
    </tr>

       <?php  $count++;  endforeach; ?>
  </tbody>
</table>
 </div>

<!--EDIT HALL MODAL-->
 
<div id="editmodal" class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Add Hall
  </div>

  <div class="content">
      <?=form_open('main/updateHall');?>
  <table cellpadding="5" border="0" >
    <tr>
       <td>Hall Name</td>
       <td><?=form_input('hallName', $get_edit->hall_name);?>
           <?=form_hidden('txtid',$get_edit->hall_id)?>
       </td>

    </tr>
    <tr>
    	<td>Building / Area Name  &nbsp;</td>
    	<td><?=form_dropdown('BName',array('Engr'=>'Engineering','MR'=>'MR','SMED'=>'SMED','CAFA'=>'CAFA','Library'=>'Library'),$get_edit->hall_building);?></td>
    </tr>
    <tr>
    	<td>Hall Price</td>
    	<td><?=form_input('price',$get_edit->hall_price);?></td>
    </tr>
    <tr>
    	<td>Description</td>
    	<td><?=form_textarea('descp',$get_edit->hall_description);?></td>
    </tr>
  </table>

<div class="actions">
    <div class="ui red cancel inverted button">
      Cancel
    </div>
    <input  value="Save" type="submit" class="ui green ok inverted button">
<?=form_close();?>
  </div>
</div>
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
    <tr>
      <td>Building / Area Name:  &nbsp;</td>
        <td>
        <select name="BName" class="ui dropdown" id="select">
            <option value="1">Engineering</option>
            <option value="2">MR</option>
            <option value="3">SMED</option>
            <option value="4">CAFA</option>
            <option value="5">Library</option>
            <option value="6">CAS</option>
            <option value="7">Nursing</option>
          
        </select>
   </td>
   
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
    function edit_func(id){
        $('#editmodal').modal('show', +id)
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
      .modal('show')
      ;
    }

</script> 