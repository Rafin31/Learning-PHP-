<?php
	session_start();
	require_once('../model/productModel.php');
	$id = $_GET['id'];
	if(isset($_POST['submit'])){

		$name       	= $_POST['name'];
		$selling_price  = $_POST['selling_price'];
		$buying_price   = $_POST['buying_price'];
		$display 	    = $_POST['radio'];
		
		if($name == "" || $selling_price == "" || $buying_price == "" || $display == ""){
			echo "Null submission";
		}else{
            $product = [
                'name'          => $name,
                'selling_price'	=>$selling_price, 
                'buying_price'	=>$buying_price, 
                'buying_price'	=>$buying_price,
                'display'		=>$display
            ];

			

			$status = updateProduct($product);
				
			if($status){
				echo "Data Successfully Updated";
			}else{
				echo "Invalid Request";
			}
		}
	}
