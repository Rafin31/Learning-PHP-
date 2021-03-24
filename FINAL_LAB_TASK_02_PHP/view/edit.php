<?php
	
	$title = "Edit Page";
	require_once("../model/productModel.php");
	$id = $_GET['id'] ;
	$product = getProductByid($id);
	
	
	

	
?>

	<div id="page_title">
		<h1>Edit Product Page</h1>		
	</div>


	<div id="main_content">
		<form method="post" action="../controller/editProduct.php?id=<?=$_GET['id']?>">
			<fieldset>
				<legend>Edit Product</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value = <?php echo $product ['name'] ?>  ></td>
					</tr>
					<tr>
						<td>Buing Price</td>
						<td><input type="text" name="buying_price" value=<?php echo $product ['buying_price'] ?>></td>
					</tr>
					<tr>
						<td>Selling Price</td>
						<td><input type="text" name="selling_price" value=<?php echo $product ['selling_price'] ?>></td>
					</tr>
					<tr>
						<td>Display</td>
						<td><input type="radio" name="radio" value="yes"></td>
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

