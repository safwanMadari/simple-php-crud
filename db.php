<?php

$conn = mysqli_connect('localhost','root','','super_crud');

if(!$conn){
	echo "Connection Failed".mysqli_connect_error();
}

?>