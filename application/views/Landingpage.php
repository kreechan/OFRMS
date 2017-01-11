<!DOCTYPE html>
<html lang="">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/semantic.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'> -->


    <title></title>
</head>

<body>
   <div class="top-border"></div>

<div class="ui stackable grid">
  <div class="right floated seven wide column ">
    
      <form class="ui form" action="<?php echo base_url(); ?>main/login_validation" method="post" accept-charset="utf-8">
        <div class="three fields">
            <div class="field">
               <input name="idnumber" placeholder="Username" type="text">
 
            </div>
            <div class="field">
               <input name="password" placeholder="Password" type="password">
               <a style="color:#1c964e; font-size: 85%;" href="">Forgot Password</a>
            </div>
            <div class="field">
               <div class="ui stackable grid">
               <div class="nine wide column">
                  <div class="column"><button class="ui mybutton small button fluid" type="submit">LOGIN</button>
                      
                  </div>
                  
                </div>
                </div><!-- <a href="<?php echo base_url() ?>main/registration_show">To SignUp Click Here</a> -->
                
            </div>
            
        </div>
      </form>
       <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
  </div>
</div> 


<div class="ui container" style="min-height:60%;">
<div class="ui stackable grid">
    <div class="one wide column mycenter mobile only" style="bac2kground-color:green;">
        <img class="usc-logo" src="<?php echo base_url(); ?>assets/images/usc-logo.png" alt="1">
    </div> 
</div> 
<div class="ui stackable grid">
    <div class="one wide column center-logo tablet only" style="bac2kground-color:green;">
        <img class="usc-logo" src="<?php echo base_url(); ?>assets/images/usc-logo.png" alt="2">
    </div> 
</div> 
<div class="ui stackable grid">
    <div class="two wide column center-logo large screen only" style="bac2kground-color:green;">
        <img class="usc-logo" src="<?php echo base_url(); ?>assets/images/usc-logo.png" alt="3">
    </div> 

    <div class="twelve wide column" style="ba2ckground-color:red;">
        <h1 class="ui header" style="color:#1c964e;">UNIVERSITY OF SAN CARLOS 
        <div class="sub header mysubhead">Talamban - Online Facility Reservation and Management System</div></h1>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut maximus metus quis purus dignissim, vitae volutpat metus vulputate. Integer cursus semper nisi, id vulputate ipsum varius non. Nunc nec ligula fringilla, volutpat ligula id, mattis magna. Pellentesque pellentesque, erat vel convallis dapibus, nibh eros convallis urna, faucibus eleifend tellus elit sed magna. Nullam mattis metus at odio volutpat vestibulum. Nunc eleifend nibh quis sapien dignissim semper in ut eros. Nullam tincidunt urna metus.

        Fusce tellus turpis, pretium eget tortor semper, sollicitudin dapibus nulla. Suspendisse pellentesque imperdiet ex vitae varius. Sed sagittis, ipsum ac sagittis mollis, libero quam malesuada lacus, nec fringilla enim est sit amet urna. Mauris ornare laoreet placerat. Curabitur quis efficitur erat, ut semper ante. Cras dignissim luctus odio, id ultricies odio malesuada dignissim. Curabitur leo odio, suscipit a venenatis ac, ultrices sed ligula. Vivamus vehicula lorem erat, quis iaculis urna tristique ac.



        Vivamus vitae vehicula neque, ac consectetur elit.</p>
    </div>
    <div class="two wide column" style="ba2ckground-color:blue;">
    <p></p>
  </div>
</div>       
</div>  

</body>
</html>
