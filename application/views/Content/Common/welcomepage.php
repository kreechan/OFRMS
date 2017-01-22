  <br>
<div class="ui stackable grid">
<!--Hall Information-->
<div class="eleven wide column">
<h3 class="ui top attached header myinverted">
    <i class="browser icon"></i>HALL INFORMATION
</h3>
<table class="ui celled selectable attached padded table">
       <tbody> 
        <?php 
             $count =1;
             foreach($halls as $row):
         ?>

        <tr>
          <!-- <td><//?=$row->hall_id?></td> -->
           <td style="letter-spacing: 0px">
             <span style="font-weight:bolder; font-size: 17px;"><?=$row->hall_name?></span><br>
                <span>Location: </span><?=$row->hall_buildloc?> <br>
                <span>Price: </span>P <?=$row->hall_price?>.00 <br>
                <span>Description: </span><?=$row->hall_description?><br>
          </td>
        </tr>

           <?php  $count++;  endforeach; ?>
      </tbody>
    </table>
</div>
<!--hall info end-->

<!--today's schedule-->
<div class="five wide column">
<h3 class="ui top attached header" style="color:#1c964e;">
    <i class="warning circle icon"></i>TODAY'S RESERVATION
</h3>
<table class="ui celled selectable attached padded table">
       <tbody> 
        <?php 
             $count =1;
             foreach($halls as $row):
         ?>

        <tr>
           <td style="letter-spacing: 0px">
             <span style="font-weight:bolder; font-size: 14px;"><?=$row->hall_name?></span><br>
             <div id="showSched">No Reservation Today!</div>
             <!--<div id="hiddenSched"><?=$row->reservation_sched?></div> -->
        </tr>

           <?php  $count++;  endforeach; ?>
      </tbody>
    </table>
    </div>
</div>
<!--WELCOM DIMMER-->
<div id="picdimmer" class="ui page dimmer">
  <div class="content">
    <div class="center">WELCOME TEST :)</div>
  </div>
</div>

<script>
$(window).load(function(){
    var x = document.getElementById('hiddenSched').innerHTML;
    if (x.length == " "){
         alert("Blank")
    }else{
        alert(x);
    }
})

//    $(window).load(function(){
//             $('#picdimmer').dimmer('show')
//        });
//    window.onload = Scrolldown;
//  $('#home').addClass('active');
</script>