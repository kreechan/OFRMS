<div class="ui container"><br>
  <h1 align="center">User Management</h1><br>
    <!-- search box -->
  <div class="ui grid">
  <div class="two column row">
    <div class="left floated column"><a class="ui mybutton approve button left aligned small" href="<?php echo base_url('main/regUser');?> "><i class="add icon"></i>ADD User</a></div>

    <div class="right floated column right aligned ">
      <form action="<?php echo site_url('main/searchUsers');?>" method = "post">
    <div class="ui left aligned category search"> 
      <button data-tooltip="View all list :)"  href="<?php echo base_url('main/searchUsers');?>"  class="circular basic small ui icon button"><i class="list icon"></i></button>
  <div class="ui icon input">
    <input class="prompt" placeholder="Search by name.."  type="text" name = "keyword">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
  </form></div>
  </div>
</div>

<table class="ui celled fixed  table">
  <thead>
    <tr>
    <!-- <th class="center"></th> -->
    <th class="three wide"> ID No. </th>
    <th class="three wide"> Name</th>
    <th class="three wide">Department</th>
    <th class="three wide">Position</th>
    <th class="four wide">Email</th>
    <th class="two wide" style="text-align:center;">Action</th>
    </tr>
  </thead>  
    <?php 
         foreach($usersOutput as $row):
     ?>
  <tbody>
    <tr>
      <td><?=$row->idNumber?></td>
      <td><?=$row->fname.'
      '.$row->lname?></td>
      <td><?=$row->dept?></td>
      <td><?=$row->position?></td>
      <td><?=$row->email?></td>
      <td>
       <div class="column mycenter">
          <a class="ui icon tiny black button" href="<?=base_url();?>main/edit_User/<?=$row->idNumber?>" value = "<?= $row->idNumber?>" id ="id"><i class="write icon"></i></a>
          <a class="ui icon tiny red button" href="javascript:;" onClick="confirm_delete(<?=$row->idNumber?>)"><i class="trash Outline icon"></i></a>
       </div>
      </td>
    </tr>
  <?php    endforeach; ?>
  </tbody>
</table>
<!-- POPUP -->
 </div>
 
 <!--Modal DELETE-->
  <div id="confirmdel" class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Delete User
  </div>

  <div class="content">
      <p>Are you sure you want to delete this User?</p>
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

<script> 
    
    function confirm_delete(id)
    {
  $('#confirmdel').modal({

    closable  : true,
    onDeny    : function(){
     
    },
    onApprove : function() {
       window.location="<?=base_url()?>main/deleteUsers/"+id;
    }
  })  
      .modal('show')
      ;
    }

</script> 