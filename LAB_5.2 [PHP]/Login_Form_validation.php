<?php


  session_start();
if ( isset ( $_POST [ 'submit' ] ) ) {

	$user_name =  $_POST [ 'user_name' ]   ;
	$user_name_length = strlen($user_name);
	$password =   $_POST [ 'password' ]  ;
	$password_length = strlen($password);
	
	
    if ($user_name == "" && $password == "") {
    	echo "Filled all thi file.";
    }
    elseif ( !preg_match('/^[a-zA-Z][a-zA-Z0-9._]/i', $user_name) && !preg_match("/[@#$%]/",$password) ){
    	echo "Username and password Didn't match";
    } 
	elseif ( $user_name_length < 2  && $password_length < 8) {
		echo "Username and password Didn't match";
	}
	else{
		 $user = $_SESSION['current_user'] ;

		 if ( $password == $user ['password'] && $user_name == $user ['user_name'] ) {
		 	header('location: logged_in.html');
		 }
		 else{
		 	echo "Password and Username didn't match";
		 }
	}
   
}


?>