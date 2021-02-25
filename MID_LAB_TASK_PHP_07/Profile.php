
<?php

session_start();
$user = $_SESSION['current_user'] ;

$user_name = $user ['user_name'];
$gender = $user ['gender'];
$date_birth = $user ['date_barth'];
$email =  $user ['email'];



?>






<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Publix Home</title>
</head>

<body>
<table align="center" width="1000px" border="1" height="500px">
    <tr>
        <td align="left" colspan="3">
            <img width="20%" src="Images/logo.png">
            <div width="100%" align="right">
                Logged in as <a href="3" target="_blank"> <?php echo $user_name ?> &nbsp </a>
                 <a href="Login.html" target="_blank">Logout</a>
            </div>
        </td>
    </tr>


    <tr>
        <td align="center" rowspan="3" >
        <a href="Profile.php" target="_blank">View Profile</a><br>
                    <a href="Edit_profile.php" target="_blank">Edit Profile</a><br>
                    <a href="change_pic.php" target="_blank">Change Profile Picture</a><br>
                    <a href="chang_pass.php" target="_blank">Change Password</a><br>
                    <a href="Login.html" target="_blank">Logout</a>
        </td>
        <td width="70%" rowspan="3">
           <fieldset>
               <legend>Profile</legend>
               <table>
                   <tr>
                       <td>Name : </td>
                       <td><?php echo $user_name ?> </td>
                       <td rowspan="5" >
                       <img width="30%" src="Images/user.png"><br>
                           <a href="">Change Profile Picture</a>
                       </td>
                   </tr>
                   <tr>
                   <td>Email : </td>
                       <td><?php echo $email ?> </td>
                       <td></td>
                   </tr>
                   <tr>
                   <td> Gender : </td>
                       <td><?php echo $gender ?> </td>
                       <td></td>
                   </tr>
                   <tr>
                   <td>Date of Birth : </td>
                       <td><?php  for(  $i = 0 ; $i < count($date_birth) ; $i++){echo $date_birth[$i]; if( $i !=2 ) { echo "/";  } } ?> </td>
                       <td></td>
                    </tr>
                   <tr>
                   <td>
                   <a href="">Edit Profile</a>
                   </td>
                      
                       <td></td>
                       <td></td>
                   </tr>

               </table>
           </fieldset>
        </td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr>
        <td align="center" colspan="2" >
            copyright@2021
        </td>
    </tr>
</table>
</body>

</html>


