<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){

		$name = $_POST['name'];
        $usernm = $_POST['username'];
        $pwd = $_POST['pass'];

		$sql = "INSERT INTO admin(name, username, password) VALUES ('$name', '$usernm', '$pwd')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Admin added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>