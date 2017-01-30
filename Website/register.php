<html>

<form id="register" action="register.php" method="post" accept-charset="UTF-8"> <!--TODO will need to check values before entering them in database-->
<fieldset style="width:70%">
  <legend>Registration</legend>
    <input type='hidden' name='submitted' id='submitted' value='1'/>

    <label for='firstname'>First Name:</label>
    <input type='text' name='firstname' id='firstname' maxlength="100" />

    <label for='lastname'>Last Name:</label>
    <input type='text' name='lastname' id='lastname' maxlength="100" />

    <label for='email'>Email Address:</label>
    <input type='text' name='email' id='email' maxlength="50" />

    <label for='username'>Username:</label>
    <input type='text' name='username' id='username' maxlength="50" />

    <label for='password'>Password:</label>
    <input type='text' name='password' id='password' maxlength="50" />

    <input type='submit' name='Submit' value='Submit' />
      
</fieldset>
</form>
</html>
