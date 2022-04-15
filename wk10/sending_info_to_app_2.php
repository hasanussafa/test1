<!DOCTYPE html>
<html>
<head>
<title>Lab 07</title>
</head>
<body>
<?php echo htmlentities($_GET['q'], ENT_QUOTES, 'UTF-8'); ?>
<form method="get">
    <input name="q" placeholder="Enter Text"> <br/>
    <input type="submit" value="Go">
</form>

</body>
</html>