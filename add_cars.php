<?php

include("db.php");

if(isset($_POST['car_name'])){

	$car_name = $_POST['car_name'];

	$query = "INSERT INTO cars(title) VALUES('$car_name')";

	$query_car_name = mysqli_query($connection, $query);

	if(!$query_car_name){

		die("Query failed ". mysql_error($connection));

	}

	header("Location: index.html");

};

?>