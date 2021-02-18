<?php

if(isset( $_POST ['submit'] ) ) {
	
if (isset( $_POST['male']) || isset($_POST['female']) || isset($_POST['other']) ){
	if (isset($_POST['male'])) {
		echo "Male";
		
	}
	elseif (isset($_POST['female'])) {
		echo "female";
		
	}
	else{
        echo "other";
	}

}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<div>
        <form method="post" action="main.php">
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="male" value="<?php if (isset($_POST['male'])) {echo "Male";} ?>" >Male
                <input type="radio" name="female" value="<?php if (isset($_POST['female'])) {echo "female";} ?> ?>" >Female
                <input type="radio" name="other" value="<?php if (isset($_POST['other'])) {echo "other";} ?> ?>" >Other
            </fieldset>
            <input type="submit" name="submit" value="submit">

        </form>
    </div>
	
</body>
</html>

