<?php 

if( isset( $_POST [ "submit" ] ) ){

$username =  $_POST [ "user_name" ] ;
$password =  $_POST [ "password" ] ;


$json_file = fopen("users.json" , "r"  ) ;
$json_data = fread( $json_file , filesize("users.json"));

$users_data = json_decode($json_data, true) ;

if (  $username != " " && $password != " "  ){
  if( $username == $users_data["user_name"] && $password == $users_data["password"] ){
    echo " Log In Successfull....  " ;
  }else{
    echo "Password or Username didn't match..." ;
  }



 
}
else{
  echo "Please fill up all the fields....." ;
}








fclose($json_file) ;
}




?>