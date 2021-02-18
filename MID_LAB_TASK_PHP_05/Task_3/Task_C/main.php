<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
<div>
        <form method="post" action="main.php">
            <fieldset>
                <legend>Date of Birth</legend>
                dd &nbsp &nbsp &nbsp &nbsp &nbsp mm &nbsp &nbsp &nbsp &nbsp yy <br>
                <input type="text" name="day" size="1" value=" <?php if(isset($_POST['submit'])){ echo $_POST['day'];}?>"> /
                <input type="text" name="month" size="1" value="<?php if(isset($_POST['submit'])){ echo $_POST['month'];}?>"> /
                <input type="text" name="year" size="1" value="<?php if(isset($_POST['submit'])){ echo $_POST['year'];}?>">
                <hr>
                <input type="submit" name="submit" value="submit">
            </fieldset>
        </form>
    </div>
    </body>
</html>