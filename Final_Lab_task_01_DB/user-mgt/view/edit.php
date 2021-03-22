<?php
	
	$title = "Edit Page";
	include('header.php');
	require_once("../model/userModel.php");
	$user = getAllUser() ;
	print_r($user[0]['user_id']);

	echo $_GET['id'];

?>

	<div id="page_title">
		<h1>Edit User Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="user_list.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
		<form method="post" action="../controller/editUser.php">
			<fieldset>
				<legend>Edit User</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value = <?php echo $user[0]['user_name'] ?>  ></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value=<?php echo $user[0]['user_name'] ?>></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value=<?php echo $user[0]['user_email'] ?>></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value=<?php echo $user[0]['user_password'] ?>></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Update">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

<?php include('footer.php') ?>