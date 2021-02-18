<?php

if(isset( $_POST ['submit'] ) ) {
	
if (isset( $_POST['A+']) || isset($_POST['B+']) || isset( $_POST['C+']) || isset($_POST['AB+']) ){

	if (isset($_POST['A+'])) {
		echo "A+";
		
	}
	elseif ( isset($_POST['B+']) ) {
		echo "B+";
		
	}
	elseif ( isset($_POST['C+']) ) {
		echo "C+";
		
	}
	else{
		echo "AB+";
	}

}
}

?>