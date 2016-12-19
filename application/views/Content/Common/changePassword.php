
<!-- End of top menu -->
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
   <label for="">Confrim Password</label>
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
    </form>
     </div>

    <div class="column"></div>
</div>
</div>



</div>
<script>
 $('.ui.dropdown')
  .dropdown({transition: 'drop'})
;
</script>
  