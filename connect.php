<?php
	$link = mysqli_connect("us-cdbr-azure-east-c.cloudapp.net", "b3e4a852a6ac0e", "4bfa5a86", "fruited");
 
//Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
