<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$status= $_POST['status'];

		$sql = "UPDATE application SET status = '$status' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'status successfuly updated';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>