<?php

if(isset( $_POST ['submit'] ) ) {
	
if (isset( $_POST['male']) || isset($_POST['female']) || isset($_POST['other']) ){
	if (isset($_POST['male'])) {
		echo "Male";
		
	}
	elseif (isset($_POST['female'])) {
		echo "female";
		
	}
	else{
        echo "other";
	}

}
}

?>

