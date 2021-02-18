<?php

if(isset( $_POST ['submit'] ) ) {
	
if (isset( $_POST['A+']) || isset($_POST['B+']) || isset( $_POST['C+']) || isset($_POST['AB+']) ){

	if (isset($_POST['A+'])) {echo "A+";}
	elseif ( isset($_POST['B+']) ) {
		echo "B+";
		
	}
	elseif ( isset($_POST['C+']) ) {
		echo "C+";
		
	}
	else{
		echo "AB+";
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
        <form action="main.php">
            <legend>Blood Group</legend>>
            <select name="blood_group">
                <option selected  name="A+" value=" <?php if (isset($_POST['A+'])) {echo A+;}?>">A+</option>
                <option value="B+" name="B+" value=" <?php if (isset($_POST['A+'])) {echo B+;}?>" >B+</option>
                <option value="o+" name="O+" value=" <?php if (isset($_POST['A+'])) {echo O+;}?>" >o+</option>
                <option value="ab" name="AB+" value=" <?php if (isset($_POST['A+'])) {echo AB+;}?>" >AB+</option>
                
            </select>
            <hr>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
	
</body>
</html>