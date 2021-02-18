<?php

if(isset($_POST['submit'])){

		$name 		= $_POST['name'];
		echo $name;
	}
		
?>


<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="POST" action="main.php">
		<fieldset>
			<legend>Name</legend>
			 <input type="text" name="name" value=""> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>