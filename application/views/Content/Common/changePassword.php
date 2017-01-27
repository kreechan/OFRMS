
<!-- End of top menu -->
<div class="ui grid">
<div class="three wide column">
    
    <div class="ui card">
  <div class="image">
    <img class="right floated mini ui image" src="<?php echo base_url('assets/images/fr.bucia.jpg')?>">
  </div>
</div>
<h5 class="ui header">Fr. Eleno P. Bucia, SVD, MA</h5>
<p class="ui sub header">VP Administrator / Approver</p>
<!-- <a class="ui mybutton button fluid" href="<?php echo base_url('main/mybookings'); ?>">Booking Steps</a>-->
</div>
<div class="thirteen wide column">
<form id="changePasswordForm" action = "<?php echo base_url() ?>main/changepassword" method = "post">
<h3 class="ui myinverted top attached header">
  CHANGE PASSWORD
</h3>
<div class="ui attached segment">
  <div class="ui three column centered  grid stackable">
  <div class="column">
    <label for="">Old Password</label>
  <div class="ui input fluid">
  <input placeholder="Old Password" type="password" name ="oldpassword">
</div>
  </div>
</div>
 <div class="ui three column centered stackable grid">
  <div class="column">
   <label for="">New Password</label>
    <div class="ui input fluid">
  <input placeholder="New Password" type="password" name="newpassword">
</div>
  </div>
</div>
 <div class="ui three column centered stackable grid">
  <div class="column">
   <label for="">Confirm Password</label>
    <div class="ui input fluid">
  <input placeholder="Confrim Password" type="password" name="confirmpassword">
</div>
  </div>
</div>
 <div class="ui three column centered stackable grid fluid">
    <div class="column"></div>

    <div class="grid six column row">
    <div class="column"><button class="ui positive button fluid" type= "submit">Save</button></div>
    <div class="column"><button class="ui negative button fluid">Cancel</button></div>
     </div>
     </div>
     </div>
    </form>
     
    
    <div class="column"></div>

</div>


</div>
<script>
 $('.ui.dropdown')
  .dropdown({transition: 'drop'})
;
</script>
  