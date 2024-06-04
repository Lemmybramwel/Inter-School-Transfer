<?php
require_once 'includes/class.php';
if (isset($_POST['login'])) {
    $me = $_POST['type'];
    $conn = new db_class();
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    if ($me == 'admin') {
        $get_user = $conn->adminlogin($username, $pass);
        if ($get_user['count'] > 0) {

            session_start();
            $_SESSION['id'] = $get_user['id'];
            echo '<script>window.location = "data"</script>';
        } else {
            echo '<script>alert("Invalid username or password")</script>';
        }


    }else{
        $get_user = $conn->login($username, $pass);
        if ($get_user['count'] > 0) {

            session_start();
            $_SESSION['roll'] = $get_user['roll'];
            echo '<script>window.location="panel.php"</script>';
        } else {
            echo '<script>alert("Invalid username or password")</script>';
        }

    }

}

?>

