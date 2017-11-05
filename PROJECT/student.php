
<html>
<head>
</head>
<body>
<form id='register' action='register.php' method='POST'>
<fieldset style="width:100px">
<legend> Register</legend>
<!--<input type='hidden' name='submitted' id='submitted' value='1'/>
-->
<label for='name' >Your Full Name*: </label>
<input type="text" name="name" id="name" maxlength="50"><br>
<label for="rollno"> Roll No*.</label>
<input type="text" name="rollno" id="rollno" maxlength="50"><br>
<label for="username">UserName*.</label>
<input type="text" name="uname" id="uname" maxlength="50"><br>
<label for="Password" >Password*.</label>
<input type="text" name="password" id="pass" maxlength="50"><br>
<label for="ConformPassword">ConformPassword*.</label>
<input type="text" name="conformpassword" id="pass" maxlength="50"><br>
<label for="College name">College Name*</label>

<select>
<option value="">Select</option>
<option value="SIOM">SIOM</option>
<input type="text" name="others" id="others" maxlength="50"><br>

</select>
</fieldset>
</form>
</body>
</html>
