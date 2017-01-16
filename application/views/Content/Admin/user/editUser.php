<div class="ui container" style="min-height:65%;"> <br><br>
<?=form_open('main/updateUser');?>
 <div class="ui form">
  <table cellpadding="5" border="0" >
    <tr>
       <td>First Name</td>
       <td><?=form_input('Firstname',$get_edit->fname)?>
           <?=form_hidden('txtid',$get_edit->idNumber);?>
       </td>
    <tr>
       <td>Last Name</td>
       <td><?=form_input('lastname',$get_edit->lname);?></td>
    </tr>
    </tr>
    <tr><td><p style="margin:12px;"></p></td></tr>
   <tr>
      <td>Department</td>
      <td><?=form_input('dept',$get_edit->dept)?></td>
    </tr>
    <tr><td><p style="margin:12px;"></p></td></tr>
    <tr>
    	<td>Position</td>
    	<td><?=form_textarea('pos',$get_edit->position)?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?=form_textarea('email',$get_edit->email)?></td>
    </tr>
    <tr><td><p style="margin:12px;"></p></td></tr>
    <tr>
        <td></td>
        <td><?=form_submit('submit','save')?></td>
    </tr>  
  </table>
  </div>
<?=form_close();?>
</div>