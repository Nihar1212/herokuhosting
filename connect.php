<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_test');

// get the post records
$from = $_POST['from'];
$to = $_POST['to'];
$deparure = $_POST['deparure'];
$return = $_POST['return'];
$trip = $_POST['trip'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `from`, `to`, `deparure`, `return`,'trip') VALUES ('0', '$from', '$to, '$deparure', '$return', '$trip')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Tickets Booked";
}

?>