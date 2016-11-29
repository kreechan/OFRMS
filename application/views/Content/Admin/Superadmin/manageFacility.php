<!-- Start of body content -->

<h3 class="ui myinverted top attached header">
  Manage Facility
</h3>
<div class="ui attached segment ">
 
 <div class="ui cards mycenter centered">
  <div class="card">
    <div class="content">
      <div class="header">Manage Facility Reservation Request</div>
      <div class="description">
        Elliot Fu is a film-maker from New York.
      </div>
    </div>
    <div class="ui bottom attached mybutton button">
      <i class="configure icon"></i>
      ENTER
    </div>
  </div>
  <div class="card">
    <div class="content">
      <div class="header">Manage USC Facilities</div>
      <div class="description">
        Veronika Ossi is a set designer living in New York who enjoys kittens, music, and partying.
      </div>
    </div>
    <div class="ui bottom attached mybutton button">
      <i class="add circle icon"></i>
      ADD / DELETE
    </div>
  </div>
 
     
</div>
 
</div>
   
<!-- MODALS -->
   
</div>
<div class="ui small modal">
  <i class="close icon"></i>
  <div class="header">
    Archive Old Messages
  </div>
  <div class="image content">
    <div class="image">
      <i class="archive icon"></i>
    </div>
    <div class="description">
      <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
    </div>
  </div>
  <div class="actions">
    <div class="two fluid ui inverted buttons">
      <div class="ui cancel red basic inverted button">
        <i class="remove icon"></i>
        No
      </div>
      <div class="ui ok green basic inverted button">
        <i class="checkmark icon"></i>
        Yes
      </div>
    </div>
  </div>
</div>
<script>
 $(document).ready(function(){
    $('.ui.dropdown').dropdown({transition: 'drop'});
    $('#approve').click(function(){
	   $('.ui.small.modal').modal('show'); 
}); 
});
</script>
</body>
</html>