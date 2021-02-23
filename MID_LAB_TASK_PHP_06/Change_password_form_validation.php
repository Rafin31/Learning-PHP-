<?php
 session_start();
if ( isset ( $_POST [ 'submit' ] ) ) {

	$current_password =  $_POST [ 'current_password' ]   ;
	$current_password_length = strlen($current_password);
	$new_password =   $_POST [ 'new_password' ]  ;
	$retype_password =  $_POST [ 'retype_password' ];
	
	$curr_pass =  $_SESSION['current_user'];
	
   	if ($retype_password != "" && $current_password != ""  && $new_password != "" && $new_password == $retype_password && $current_password != $curr_pass[ 'password' ]  ) {
        echo "Password Updated Succesfully";
    }
    else
    {
		echo "All filed should be field and Password Should be Same";
	}
}





?>