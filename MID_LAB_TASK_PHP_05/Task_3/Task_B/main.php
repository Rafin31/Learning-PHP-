<?php

if(isset($_POST['submit'])){

		$day        = $_POST['day'];
		$month 		= $_POST['month'];
        $year 		= $_POST['year'];

		echo $day. "/" .$month. "/" .$year ;
	}
		
?>


<div>
        <form method="post" action="main.php">
            <fieldset>
                <legend>Date of Birth</legend>
                dd &nbsp &nbsp &nbsp &nbsp &nbsp mm &nbsp &nbsp &nbsp &nbsp yy <br>
                <input type="text" name="day" size="1"> /
                <input type="text" name="month" size="1"> /
                <input type="text" name="year" size="1">
                <hr>
                <input type="submit" name="submit" value="submit">
            </fieldset>
        </form>
    </div>