<?php

include("includes/db.php");
if($con){
		$query1 = "CREATE TABLE comments (Name varchar(20), Email varchar(50), Comment varchar(500))";
		mysqli_select_db($con,"ashik_domain");
		if(mysqli_query($con,$query1)){
			echo "Everything went fine";
		}
		else{
			die("Failed to create table. " .mysql_error());
		}
	}
	

else{
	die("Failed to connect to database: ".mysql_error());
}


?>