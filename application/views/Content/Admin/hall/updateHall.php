<?=form_open('main/updateHall');?>
  <table cellpadding="5" border="0" >
    <tr>
       <td>Hall Name</td>
       <td><?=form_input('hallName', $get_edit->hall_name);?>
           <?=form_hidden('txtid',$get_edit->hall_id)?>
       </td>

    </tr>
    <tr>
    	<td>Building / Area Name  &nbsp;</td>
    	<td><?=form_dropdown('BName',array('Engr'=>'Engineering','MR'=>'MR','SMED'=>'SMED','CAFA'=>'CAFA','Library'=>'Library'),$get_edit->hall_building);?></td>
    </tr>
    <tr>
    	<td>Hall Price</td>
    	<td><?=form_input('price',$get_edit->hall_price);?></td>
    </tr>
    <tr>
    	<td>Description</td>
    	<td><?=form_textarea('descp',$get_edit->hall_description);?></td>
    </tr>
    <tr>
        <td></td>
        <td><?=form_submit('submit','save');?></td>
    </tr>  
  </table>
<?=form_close();?>