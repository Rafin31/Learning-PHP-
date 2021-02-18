

<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="POST" action="main.php">
		<fieldset>
			<legend>Email</legend>
			 <input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>

