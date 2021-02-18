<?php

if(isset( $_POST ['submit'] ) ) {
	
if (isset( $_POST['SSC']) || isset($_POST['HSC']) || isset( $_POST['BSc']) || isset($_POST['MSc']) ){

	if (isset($_POST['SSC'])) {
		echo "SSC";
		
	}
	elseif ( isset($_POST['HSC']) ) {
		echo "HSC";
		
	}
	elseif ( isset($_POST['BSC']) ) {
		echo "BSC";
		
	}
	else{
		echo "MSc";
	}

}
}

?>


<!DOCTYPE>
<html>
<!DOCTYPE>
<html>
<head>
	<title> Education Input </title>
</head>
<body>
	<div>
        <form method="post" action="main.php">
            <fieldset>
                <legend>Degree</legend>
                <input type="checkbox" name="SSC">SSC
                <input type="checkbox" name="HSC">HSC
                <input type="checkbox" name="BSc">BSc
                <input type="checkbox" name="MSc">MSc
            </fieldset>
            <hr>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
	
</body>
</html>