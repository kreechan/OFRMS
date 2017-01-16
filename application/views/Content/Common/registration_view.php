
<div class="ui container" style="min-height:65%;">
  <br><br>
<div class="ui two column centered grid">
  <div class="column">
  <h2>Create an Account</h2>
</div>
</div>
<div class="ui very padded raised text container segment">  
 <form  class="ui form mycenter" action = "<?php echo base_url() ?>main/addProcess" method="post">
  
  <div class=" field">
   <div class="ui grid">
     
     <div class="five wide column right aligned"><label>ID Number</label></div>
    <div class="eleven wide column"><input type="text" name="idNum" autocomplete="new-firstname"></div>
    <div class="five wide column right aligned"><label>First Name</label></div>
    <div class="eleven wide column"><input type="text" name="firstname" autocomplete="new-firstname"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
    </div>
  </div>
  <div class=" field">
    <div class="ui grid">
     <div class="five wide column right aligned"><label>Last Name</label></div>
    <div class="eleven wide column"><input type="text" name="lastname" autocomplete="new-lastname"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
  </div>
    </div>
  <br>
  <div class=" field">
    <div class="ui grid">
     <div class="five wide column right aligned"><label>Password</label></div>
    <div class="eleven wide column"><input type="password" name="password" autocomplete="new-password"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
  </div>
     </div>
  <div class=" field"><div class="ui grid">
     <div class="five wide column right aligned"><label>Email</label></div>
    <div class="eleven wide column"><input type="text" name="email" autocomplete="new-email"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
  </div>
     </div>
     <div class=" field"><div class="ui grid">
     <div class="five wide column right aligned"><label>Department</label></div>
    <div class="eleven wide column"><input type="text" name="department" autocomplete="new-department"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
  </div>
     </div>
     <div class=" field"><div class="ui grid">
     <div class="five wide column right aligned"><label>Position</label></div>
    <div class="eleven wide column"><input type="text" name="pos" autocomplete="new-department"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
  </div>
     </div>
     

  <button class="ui button mybutton" type="submit">Submit</button>
</form>
</div>
     </div>
<!-- End of top menu -->
<script>
 $(document).ready(function(){
    $('.ui.dropdown').dropdown({transition: 'drop'});
     
});
</script>




