$(document).ready(function(){
  /*
    CHANGE PASSWORD
  */
    $('#changePasswordForm').validate({
      rules : {
        oldpassword : 'required',
        newpassword : 'required',
        confirmpassword : 'required'
      },
      messages : {
        oldpassword : 'This field is required',
        newpassword : 'This field is required',
        confirmpassword : 'This field is required'
      }
    });

    $('#changePasswordForm').ajaxForm({
      beforeSubmit : function() {
        $('[name = oldpassword]').val('');
        $('[name = newpassword]').val('');
        $('[name = confirmpassword]').val('');
      },
      success : function() {
        console.log('Form Submitted');
      }
    });
  /*
    END OF CHANGE PASSWORD
  */
});
