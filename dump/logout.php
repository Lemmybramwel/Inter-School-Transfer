<?php
require "core.inc.php";

session_destroy();
?>
<?php
if(!isset($_SESSION['user_id']))
{
echo "<br/>"."</br>"."<br/>"."</br>"."<br/>"."</br>";
echo '<b><center><h1>You are Logged out</h1></b>';
echo '<p><input type="button" style="height:30px" value="Click here to Log-In Again" onclick="window.location =\'index.php\'" /></p>';
}else{
	header('location:logout.php');
}
?>
<html>
<title>Logout</title>
<head>
<style>


body
{ 
 
  background: transparent url(background.jpg) repeat;}
</style>
</head>
<body bgcolor="pink">
</body>
</html>