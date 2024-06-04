<?php
	require_once 'includes/class.php';
if (isset($_GET['sample.php'])){
    $conn = new db_class();
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $get_user = $conn->login($username, $pass);
    if($get_user['count'] > 0){

        session_start();
        $_SESSION['roll'] = $get_user['roll'];
        echo '<script>window.location = "apply_transfer.php"</script>';
    }else{
        echo '<script>alert("Invalid username or password")</script>';
        //echo '<script>window.location = "index.php"</script>';
    }
}









?>