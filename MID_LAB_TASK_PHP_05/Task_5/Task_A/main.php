<?php

if(isset( $_POST ['submit'] ) ) {
	
if (isset( $_POST['SSC']) || isset($_POST['HSC']) || isset( $_POST['BSc']) || isset($_POST['MSc']) ){

	if (isset($_POST['SSC'])) {
		echo "SSC";
		
	}
	elseif ( isset($_POST['HSC']) ) {
		echo "HSC";
		
	}
	elseif ( isset($_POST['BSC']) ) {
		echo "BSC";
		
	}
	else{
		echo "MSc";
	}

}
}

?>

