<!DOCTYPE html>
<html lang="">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/semantic.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'> -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?=base_url('assets/js/jquery.form.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.validate.min.js')?>"></script>
<script src="<?=base_url('assets/js/common.js')?>"></script>
<script src="<?php echo base_url(); ?>assets/js/semantic.min.js"></script>

    <title>USC - Online Facility Reservation and Managment System - Change Password</title>

</head>

<body>
<div class="top-border"></div>
<div class="ui container">

<div class="ui menu stackable">
    <a href=" <?php echo base_url()?>main/members" class="item">Home</a>
    <a href="<?php echo base_url() ?>main/calendar"class="item">Calendar</a>
    <a href="<?php echo base_url() ?>client_reservation/reservation" class="item"><i class="add to calendar icon"></i>Add Reservation</a>

    <div class="right menu">
        <div class="ui item floating dropdown">
      <i class="user icon"></i>My Profile <i class="dropdown icon"></i>
            <div class="menu transition hidden">
                <a class="item" data-value="1"><i class="settings icon"></i>My Account</a>
                <a href="<?php echo base_url('main/changepass')?>" class="item" data-value="2">Change Password</a>
                <div class="ui divider"></div>
                <a href="<?php echo base_url('main/logout'); ?> " class="item" data-value="3"> <i class="power icon"></i>Logout</a>

            </div>

        </div>
  </div>
</div>

<!-- End of top menu -->

<script>
 $(document).ready(function(){
    $('.ui.dropdown').dropdown({transition: 'drop'});
    $('#approve').click(function(){
       $('.ui.small.modal').modal('show');
});
     $('.detail-popup')
  .popup({
    lastResort: 'right center',
    inline  : true,
    on  : 'click',
    position   : 'bottom left',
    delay: {
      show: 300,
      hide: 800
    }
  })
;
});
</script>
