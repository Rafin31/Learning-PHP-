<?php


    session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

	$password = $_POST [ 'new_pass' ] ;


 if ( $password == "") {
    	echo "Filled all thi file.";
    }
    elseif (!preg_match("/[@#$%]/",$password) ){
    	echo "password need special Cherachter";
    } 
	elseif (  $password_length < 8) {
		echo " password need to longer than 8";
	}
	else{

		$user = $_SESSION['current_user'];
        $user['password'] = $password;
        $_SESSION['updatepass'] = 1;
        header('location: chang_pass.php');
	}
   




}
?>

 