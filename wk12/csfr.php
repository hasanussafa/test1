<!DOCTYPE html>
<html>
<head>
<title>Lab 08</title>
</head>
<body>
<?php
    
    if ($_POST['username'] == 'host' && $_POST['password'] == 'pass'){
        print "Congratulations!";
    }
    else{
        print "Sorry, Please try again";
    }
 ?>
<form method=POST>
<table>
<tr>
<td>
<label for="username">Username:</input>
</td>
<td>
<input type=text name=username></input>
</td>
<tr>
<tr>
<td>
<label for="password">Password:</input>
</td>
<td>
<input type=password name=password></input>
</td>
<tr>
<input type=submit name= submit value="Submit"/>
</tr>
</table>
</form>

<div id="splash">

</div>
</body>
</html>
