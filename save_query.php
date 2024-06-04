<?php
	require_once "includes/class.php";
	$conn = new db_class();
	if(ISSET($_POST['submit'])){
		$roll = $_POST['roll'];
		$name = $_POST['name'];
		$school = $_POST['school'];
		$program = $_POST['program'];
		$department = $_POST['dept'];
        $kcse = $_POST['grade'];
        $cluster = $_POST['cluster'];
        $year = $_POST['year'];
        $semester = $_POST['semester'];
        $username = $_POST['username'];
        $email = $_POST['mail'];
        $pass = $_POST['pass'];

        //hashing password
        $hashedpwd = password_hash($pass, PASSWORD_DEFAULT);
		$conn->save($roll, $name, $school,  $program,$department, $kcse, $cluster, $year, $semester, $username, $email, $pass);


		echo '<script>alert("Successfully saved!")</script>';
		echo '<script>window.location= "index.php"</script>';
	}	
?>