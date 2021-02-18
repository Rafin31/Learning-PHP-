

<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="POST" action="main.php">
		<fieldset>
			<legend>Name</legend>
			 <input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name'];} ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>

