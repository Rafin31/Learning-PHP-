<?php 
   
if( isset( $_POST [ "submit" ] ) ){
    

    $username =  $_POST [ "user_name" ] ;
    $password =  $_POST [ "password" ] ;
    $confirm_pass =  $_POST [ "confirm_password" ] ;

 
if( $username == " "  || $password == " " || $confirm_pass == " " ){
    echo "Fill up all the fields " ;
}
elseif( $password != $confirm_pass   ){
    echo "password and confiorm password shoul be match";
}
else{

 $user_info = [
        "user_name" =>  $username  ,
        "password"  =>  $password 
      ] ;

$user_info_json = json_encode ( $user_info ) ;

$json_file = fopen("users.json" , "w"  ) ;
fwrite($json_file , $user_info_json );
fclose($json_file);

header('location: Login.html');

}








    
}




?>