<?php
	
	$conn = mysqli_connect('localhost:3307','root','','food');

	if ($conn == false) 
	{
		echo "Database connection failed";
	}
?>