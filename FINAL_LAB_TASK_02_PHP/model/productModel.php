<?php
	
	require_once('db.php');


	function insertProduct($product){
		$conn = getConnection();
		$sql = "insert into products values('{$product['name']}', '{$product['buying_price']}', '{$product['selling_price']}','{$product['profit']}' , '{$product['display']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getProductByid($id){
		$conn = getConnection();
		$sql = "select * from products where product_id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function updateProduct($product){
		$conn = getConnection();
		$sql = "update products set name='{$product['name']}', buying_price='{$product['buying_price']}', desplayable='{$product['display']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($product){
		$conn = getConnection();
		$sql = "delete from products where name={$product}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>