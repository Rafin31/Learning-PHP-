

<!DOCTYPE>
<html>
<head>
	<title> Education Input </title>
</head>
<body>
	<div>
        <form method="post" action="#">
            <fieldset>
                <legend>Degree</legend>
                <input type="checkbox" name="SSC" value="<?php if (isset($_POST['SSC'])) {echo SSC;} ?>"> SSC
                <input type="checkbox" name="HSC" value="<?php if (isset($_POST['HSC'])) {echo "HSC";} ?>"> HSC
                <input type="checkbox" name="BSc" value="<?php if (isset($_POST['BSc'])) {echo "BSc";} ?>"> BSc
                <input type="checkbox" name="MSc" value="<?php if (isset($_POST['MSc'])) {echo "MSc";} ?>"> MSc
            </fieldset>
            <hr>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
	
</body>
</html>