<!DOCTYPE html>
<html lang="">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/semantic.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'> -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/semantic.min.js"></script>

    <title>USC - Online Facility Reservation and Managment System</title>
    
</head>

<body class="">
<div class="usc-bg">

<!--<div class="top-border"></div>-->

       
<div class="ui menu inverted mymenu fixed stackable" >
    <a  class="item" style="padding: 21.6808px;" href="<?php echo base_url('main/welcomepage');?>">Home</a>
    <a class="item">Calendar</a>
    <a class="item" href="<?php echo base_url('main/addReservation');?>"><i class="add to calendar icon"></i>Add Reservation</a>
    <div class="ui item floating dropdown"><i class="configure icon"></i>Manage Facility <i class="dropdown icon"></i>
      <div class="menu transition hidden">
        <a class="item" data-value="1" href="<?php echo base_url('main/viewHall');?>">Manage Hall</a>
        <a class="item" data-value="2" href="<?php echo base_url('main/viewBuilding');?>">Manage Building</a>
        <a class="item" data-value="3" href="<?php echo base_url('main/manageEndorser');?>">Manage Endorser</a>
        <a class="item" data-value="4" href="<?php echo base_url('main/displayUser');?>">Manage User</a>
      </div>
    </div>
 
    <div class="right menu">
      <div class="ui item floating dropdown" style="color:#;" >
      <i  class="user icon"></i>My Profile <i class="dropdown icon"></i>
          <div class="menu transition hidden" >
            <a style=" border: 0px solid transparent;" class="item" data-value="1" href="<?php echo base_url('main/myaccount'); ?>"><i class="settings icon"></i>My Account</a>
            <a class="item" data-value="2" href="<?php echo base_url('main/changePass'); ?>">Change Password</a>
            <div class="ui divider"></div>
            <a href="<?php echo base_url('main/logout'); ?> " class="item" data-value="3"> <i class="power icon"></i>Logout</a>  
          </div>
      </div>
    </div>
</div> <br><br><br><br>
<div class="ui container" >
<!-- End of top menu -->

<script>
 $(document).ready(function(){
    $('.ui.dropdown').dropdown({transition: 'slide'});
    $('#approve').click(function(){
       $('.ui.small.modal').modal('show');       
});
      $(window).bind('DOMContentLoaded load resize', function () {
  if ($(window).innerWidth() <= 512) {
    $('.mymenu').removeClass('fixed');
  }
 });
});
</script>
