<div class="ui container" style="min-height:65%;"> <br><br>
<?=form_open('main/updateBuilding');?>
 <div class="ui form">
  <table cellpadding="5" border="0" >
    <tr>
       <td>Building Name</td>
       <td><?=form_input('Bname', $get_edit->build_name);?>
           <?=form_hidden('txtid',$get_edit->build_id)?>
       </td>
    </tr>
    <tr><td><p style="margin:12px;"></p></td></tr>
    <tr>
    	<td>Description</td>
    	<td><?=form_textarea('Bdescp',$get_edit->build_description);?></td>
    </tr>
    <tr><td><p style="margin:12px;"></p></td></tr>
    <tr>
        <td></td>
        <td><button class="ui button mybutton" type="submit">Submit</button></td>
    </tr>  
  </table>
  </div>
<?=form_close();?>
</div>