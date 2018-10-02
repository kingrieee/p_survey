<?php
	$sql = mysqli_connect("localhost", "root", "", "psychcare");

	if(!$sql){
		echo "Error Connecting to Database";
		exit();
	}
?>