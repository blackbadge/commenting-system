<?php
include 'databaseconn.inc.php';
include 'comm.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>comments</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	
<?php
echo "<form method='POST'action='".givecomments($conn)."' >
		<input type='hidden' name='uid' value='Anonymous'>
		
		<textarea name='message'>Type a comment...</textarea><br> 
		 <button type='submit' name='commsubmit'>Post Comment</button> 

	</form>";

getcomments($conn);
	?>
</body>
</html>
