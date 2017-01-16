<div class="ui container" style="min-height:300px;">
<div class="ui grid">
<div class="six wide column">
<form  onSubmit="return test('skills');">
<select multiple="" name="skills" class="ui fluid dropdown">
    <option value="">Skills</option>
    <option value="angular">Angular</option>
    <option value="css">CSS</option>
    <option value="design">Graphic Design</option>
    <option value="ember">Ember</option>
    <option value="html">HTML</option>
    <option value="ia">Information Architecture</option>
    <option value="javascript">Javascript</option>
    <option value="mech">Mechanical Engineering</option>
    <option value="meteor">Meteor</option>
    <option value="node">NodeJS</option>
    <option value="plumbing">Plumbing</option>
    <option value="python">Python</option>
    <option value="rails">Rails</option>
    <option value="react">React</option>
    <option value="repair">Kitchen Repair</option>
    <option value="ruby">Ruby</option>
    <option value="ui">UI Design</option>
    <option value="ux">User Experience</option>
</select>
<input type="submit" value="Submit Form">
</form>
</div>
<div class="two wide column">
<!--<a class="ui button mybutton" onClick="test();">Submit</a>-->
</div>
<div class="eight wide column">
 <select name="skills" multiple="" class="ui fluid dropdown">
    <option value="">Skills</option>
    <option value="angular">Angular</option>
    
</select>
</div>
</div>
</div>
<script>
    function test(skills){
        var val = document.getElementsByName("skills");
            alert(val);
        
        
       // alert("asd");
    }
 $('.ui.dropdown').dropdown({transition: 'drop'});
</script>