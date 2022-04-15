<!DOCTYPE html>
<html>
<head>
<title>Lab 08</title>
</head>
<body>
<form method=POST>
<table>
<tr>
<td>
    <label for="username">Username:</input>
</td>
<td>
    <input type=text name=username></input>
</td>

</tr>
 <tr>
<td> 
    <label for="pword">Password:</input>
	</td>
	<td>
    <input type=password name=pword></input>
	</td>
</tr>
<tr>
<td>
    <input type=submit name= submit value="Submit"/>
</td>
</tr>	
</form>

<div id="splash"> 

<?php
    $session_confirm = $_SESSION["confirmation"]; 
    $post_confirm  = $_POST['confirmation'];

    if ($session_confirm == $post_confirm && $_POST['pword'] == 'pass' && $_POST['username'] == 'host'){
        print "Congratulations!";
    }
    else{
        print "Sorry";
    }
?>

</div>
</body>
</html>