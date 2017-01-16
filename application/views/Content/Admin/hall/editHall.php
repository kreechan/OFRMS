<?=form_open('main/updateHall');?>
 <div class="ui form">
  <table cellpadding="5" border="0" >
    <tr>
       <td>Hall Name</td>
       <td><?=form_input('hallName', $get_edit->hall_name);?>
           <?=form_hidden('txtid',$get_edit->hall_id)?>
       </td>
       
    </tr>
    <tr>
        <td><p style="margin:10px;"></p></td>
    </tr>
    <tr>
    	<td>Building / Area Name  &nbsp;</td>
    	<td><select class="ui dropdown" name="location">
    	<?php foreach($buildings as $row):?>
             <option value="<?=$row->build_id?>"><?=$row->build_name?></option>
              <?php endforeach; ?>   
            </select>
        </td>
    </tr>
    <tr><td><p style="margin:10px;"></p></td></tr>
    <tr>
    	<td>Hall Price</td>
    	<td><?=form_input('price',$get_edit->hall_price);?></td>
    </tr>
    <tr><td><p style="margin:10px;"></p></td></tr>
    <tr>
    	<td>Description</td>
    	<td><?=form_textarea('descp',$get_edit->hall_description);?></td>
    </tr>
    <tr><td><p style="margin:10px;"></p></td></tr>
    <tr>
        <td></td>
        <td><button class="ui button mybutton" type="submit">Submit</button></td>
    </tr>  
  </table>
  </div>
<?=form_close();?>