<?=form_open('main/submitBuilding');?>
  <table cellpadding="5" border="0" >
    <tr>
       <td>Building Name</td>
       <td><?=form_input('Bname');?></td>
    </tr>
    <tr>
    	<td>Hall Members  &nbsp;</td>
    	<td><?=form_input('Bmem');?></td>
    </tr>
    <tr>
    	<td>Description</td>
      <td><?=form_textarea('Bdescp');?></td>
  
    </tr> 
    <tr>
        <td></td>
        <td><?=form_submit('submit','save');?></td>
    </tr>  
  </table>
<?=form_close();?>