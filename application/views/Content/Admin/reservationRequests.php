<!-- Start of body content -->

<h3 class="ui myinverted top attached header">
  RESERVATION REQUEST
</h3>
<div class="ui attached segment">
  <div class="ui three column grid stackable fluid computer only">
      <div class="column mycenter myinverted">ACTIVITY</div>
      <div class="column mycenter myinverted"></div>
      <div class="column mycenter myinverted">ACTION</div>
  </div>
  
  <div class="ui three column grid stackable fluid">
      <div class="column mycenter">FILM SHOWING</div>
        <div class="column mycenter">
            <button class="small ui myinverted blue basic button" id="approve">View Details</button>
        </div>
      <div class="column mycenter">
          <button class="ui mybutton button">APPROVED</button>
          <button class="ui negative button">DENY</button>
      </div>
  </div>
   <div class="ui three column grid stackable fluid">
      <div class="column mycenter">ICT Orientation</div>
      <div class="column mycenter">
          <button class="small ui myinverted blue basic button" id="approve">View Details</button>
      </div>
      <div class="column mycenter">
        <button class="ui mybutton button">APPROVED</button>
        <button class="ui negative button">DENY</button>
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