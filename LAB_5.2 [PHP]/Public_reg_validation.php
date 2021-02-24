<?php


    session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
	$email =$_POST [ 'email' ];
	$user_name =$_POST [ 'user_name' ];
	$user_name_length = strlen($user_name);
	$password =$_POST [ 'password' ];
	$password_length = strlen($password);
	$confirm_password = $_POST [ 'confirm_password' ];
	if(isset($_POST['radio'])){
			  $gender =  $_POST [ 'radio' ]; 
			}
    $day    =   $_POST [ 'day'] ;
	$month  = $_POST [ 'month'];
	$year   = $_POST [ 'year' ] ;
    $date_of_birth = [ $day , $month , $year ];
    
}

if ( $name != "" && $email != "" && $user_name != "" && $password != "" && $confirm_password != "" && $gender != "" && !empty($date_of_birth) ){
	if ($password == $confirm_password) {

        if ( preg_match("/[@#$%]/", $password) && $user_name_length >= 2 && 
   		$password_length >= 8) {
       	$user = [	
			                'name'=>$name, 
							'user_name'=>$user_name, 
							'email'=> $email,
							'password'=>$password, 
							'gender'=> $gender,
							'date_barth'=> $date_of_birth,

						];
                $_SESSION['current_user'] = $user;
				header('location: Task1.html');
       }
	else{
		echo "Fill All the file and give atleast 2 word in username and your password Should be at least 8 charecter";
	}
}
else{
	echo "passwprd Didn't match";
}
}
else{
	echo "Fill all The fields";
}
?>