<?php
	
	require_once('db.php');

	function validateUser($username, $password){
		$conn = getConnection();
		$sql = "select * from users where user_name='{$username}' and user_password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function insertUser($user){
		$conn = getConnection();
		$sql = "insert into users values('', '{$user['username']}','{$user['email']}' , '{$user['password']}', 'user')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){
		$conn = getConnection();
		$sql = "select * from users where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function updateUser($user){
		print_r($user);
		$conn = getConnection();
		$sql = "update users set user_name='{$user['username']}', user_password='{$user['password']}', user_email='{$user['email']}', user_role='{$user['type']}' where user_id={$user['userid']}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>