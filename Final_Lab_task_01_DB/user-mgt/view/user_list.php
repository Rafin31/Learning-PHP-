<?php
	
	$title = "User List Page";
	include('header.php');
	require_once("../model/userModel.php");

?>

	<div id="page_title">
		<h1>User List Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="home.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
	
		<table border="1">
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>ACTION</th>
			</tr>
			<?php 
             $user = getAllUser() ;
			 print_r($user[0]['user_id']);
	         for( $i=0 ; $i != count($user) ; $i++ ){
			?>
			<tr>
				<td> <?php echo $user[0]['user_id']  ?>  </td>
				<td> <?php echo $user[0]['user_name'] ?> </td>
				<td> <?php echo $user[0]['user_email'] ?> </td>
				<td>
					<a href="edit.php?id=1"> EDIT </a> |
					<a href="delete.php?id=1"> DELETE </a> 
				</td>
			</tr>
			<?php 
			 }
			
			?>
		
			
		</table>
			
	</div>

<?php include('footer.php') ?>