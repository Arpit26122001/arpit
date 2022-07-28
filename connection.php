<?php
	$con=mysqli_connect("localhost","root","","college1_db");
	if(!$con){
		echo "connection failed";
	}
	else{
		echo "connection successfully";
	}

?>