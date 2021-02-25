<?php


    session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {
$user = $_SESSION['current_user'];
$user['user_name'] = $_POST['changeName'];
$user['gender'] = $_POST['radio'];
$user['date_barth'] = $_POST['changeDOB'];
$user['email'] = $_POST['changeEmail'];

$_SESSION['updateInfoDone'] = 1;
 header('location: Edit_profile.php');

}
?>

 