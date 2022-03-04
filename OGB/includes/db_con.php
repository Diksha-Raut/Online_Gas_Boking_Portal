<?php
$conn = mysqli_connect("localhost", "root","");
if (!$conn)
	die("Not Able to Connect with Database");
mysqli_select_db($conn,"gas_book_db");
?>