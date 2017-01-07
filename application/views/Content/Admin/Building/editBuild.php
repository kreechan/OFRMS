<div class="ui container" style="min-height:65%;"> <br><br>
<?=form_open('main/updateBuilding');?>
  <table cellpadding="5" border="0" >
    <tr>
       <td>Building Name</td>
       <td><?=form_input('Bname', $get_edit->build_name);?>
           <?=form_hidden('txtid',$get_edit->build_id)?>
       </td>
    </tr>
   <tr>
      <td>Hall Members</td>
      <td><?=form_input('Bmem',$get_edit->build_members);?></td>
    </tr>
    <tr>
    	<td>Description</td>
    	<td><?=form_input('Bdescp',$get_edit->build_description);?></td>
    </tr>
    <tr>
        <td></td>
        <td><?=form_submit('submit','save');?></td>
    </tr>  
  </table>
<?=form_close();?>
</div>