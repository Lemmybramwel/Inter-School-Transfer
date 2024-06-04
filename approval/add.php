<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
        $regno = $_POST['regno'];
		$name = $_POST['name'];
        $dob = $_POST['dob'];
		$idno = $_POST['idno'];
        $gender = $_POST['gender'];
        $national = $_POST['naational'];
        $county = $_POST['county'];
        $address = $_POST['address'];
        $sponsor = $_POST['sponsor'];
        $prog = $_POST['prog'];
        $usernm = $_POST['usernm'];
        $email = $_POST['email'];
        $pwd = $_POST['pass'];

		$sql = "INSERT INTO registration (reg_no, name,DoB, id_no,gender, nationality, county, home_address, sponsor, program, username, email, passowrd) VALUES ('$regno','$name', $dob, '$idno','$gender', '$national', '$county', '$address', '$sponsor', '$prog', '$usernm', '$email', '$pwd')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
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