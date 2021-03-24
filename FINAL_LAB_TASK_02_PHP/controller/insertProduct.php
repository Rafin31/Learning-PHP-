<?php
	session_start();
	require_once('../model/productModel.php');

	if(isset($_POST['submit'])){

		$name    	        = $_POST['name'];
		$buying_price 		= $_POST['buying_price'];
		$selling_price 		= $_POST['selling_price'];
		$display 	        = $_POST['radio'];
		$profit             = $selling_price - $buying_price  ;
	

		if($name == " " || $buying_price == " " || $selling_price == " " || $display == " "){
			echo "invalid information...please try again!";
		}else{

				$product = [
							'name'          =>$name, 
							'buying_price'  =>$buying_price, 
							'selling_price'	=>$selling_price,
							'profit'        =>$profit, 
							'display'		=>$display
						];

				$status = insertProduct($product);

				if($status){
					header('location: ../view/porduct_list.php');
				}else{
					echo "Db error";
				}

			
		}
	}
