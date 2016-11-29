<!DOCTYPE html>
<html lang="">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/semantic.css">
<link rel="stylesheet" href="assets/css/style.css">
<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'> -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/semantic.min.js"></script>

    <title>USC - Online Facility Reservation and Managment System - Change Password</title>
    
</head>

<body>
<div class="top-border"></div>
<div class="ui container">
       
<div class="ui secondary pointing menu stackable">
    <a class="item">Home</a>
    <a class="item">Calendar</a>
    <a class="item"><i class="add to calendar icon"></i>Make Reservation</a>

    <div class="right menu">
        <a class="ui item">
        <div class="ui floating dropdown"><i class="user icon"></i>My Profile <i class="dropdown icon"></i>
            <div class="menu transition hidden">
                <div class="item" data-value="1"><i class="settings icon"></i>My Account</div>
                <div class="item" data-value="2">Change Password</div>
                <div class="ui divider"></div>
                <div class="item" data-value="3"><i class="power icon"></i>Logout</div>     
            </div>
        </div>
        </a>
  </div>
</div> 

<!-- End of top menu -->

<script>
 $(document).ready(function(){
    $('.ui.dropdown').dropdown({transition: 'drop'});
    $('#approve').click(function(){
	   $('.ui.small.modal').modal('show'); 
}); 
});
</script>
