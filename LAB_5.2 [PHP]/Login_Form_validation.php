<?php
  session_start();
if ( isset ( $_POST [ 'submit' ] ) ) {

	$user_name =  $_POST [ 'user_name' ]   ;
	$user_name_length = strlen($user_name);
	$password =   $_POST [ 'password' ]  ;
	$password_length = strlen($password);
	
	
   	if ( $user_name != "" && $password != "" && preg_match('/^[a-zA-Z][a-zA-Z0-9._]/i', $user_name) && preg_match("/[@#$%]/",$password) && $user_name_length >= 2 && 
   		$password_length >= 8 ) {
       
       $user = $_SESSION['current_user'] ;

    if( $password == $user ['password'] && $user_name == $user ['user_name'] ) {
    echo "login Successfull";
    
    }else{
    echo "Incorrect Username or password";
   }

    }
    else
    {
		echo "Fill All the file and give atleast 2 word in username and your password Should be at least 8 charecter";
	}
}





?>