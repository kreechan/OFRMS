<?=form_open('main/processAdd');?>
  <table cellpadding="5" border="0" >
    <tr>
       <td>Hall Name</td>
       <td><?=form_input('hallName');?></td>
    </tr>
    <tr>
    	<td>Building / Area Name  &nbsp;</td>
    	<td><?=form_dropdown('BName',array('1'=>'Engineering',
                                           '2'=>'MR',
                                           '3'=>'SMED',
                                           '4'=>'CAFA',
                                           '5'=>'Library',
                                           '6'=>'CAS',
                                           '7'=>'Nursing')
                            );?>
                                
        </td>
    </tr>
    <tr>
    	<td>Hall Price</td>
    	<td><?=form_input('price');?></td>
    </tr>
    <tr>
    	<td>Description</td>
    	<td><?=form_textarea('descp');?></td>
    </tr>
    <tr>
        <td></td>
        <td><?=form_submit('submit','save');?></td>
    </tr>  
  </table>
<?=form_close();?>