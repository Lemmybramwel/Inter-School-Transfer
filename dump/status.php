<?php

require 'conn.inc.php';
require 'core.inc.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interschooltransferdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
echo '<input type="button" style="width:150px;height:30px"  value="Click here to Logout" onclick="window.location =\'logout.php\'" />';

//if(isset($_SESSION))
//{
	//if($_SESSION['category']=="student")
	//{
		//$query="SELECT `roll` FROM `register` WHERE `roll`=$_SESSION['username']";
		//if($query_run=mysql_query($query))
		//{
		//$roll=mysql_result($query_run, 0 , 'roll');
		//}
	//}
//}




?>
<title> Status </title>
<h1> Registration Status</h1>
<style>
body
{ 
 
  background: transparent url(background.jpg) repeat;}
h1{
	color:blue;
	font-weight: bold;
	font-style:italic;
	position:absolute;
	left:550px;
	top:120px;
}
table{
	 position:absolute;
     border: 5px;
	 background-color:#eee;
	 border-collapse:collapse;
	 top:200px;
	 left:200px;
	 width:900px;
}
th{
	background-color:#000;
	color:white;
}
table, td, th { 
	padding:5px;
	border:1px solid #000;
}
</style>
</head>

<body bgcolor="pink">

<?php
$roll = $_SESSION['username'];
echo $roll;

$sql = "SELECT * FROM admin,lib,hod,register where admin.roll='$roll' and admin.roll=lib.roll and admin.roll=hod.roll and admin.roll=register.roll";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Roll Number</th><th>Name</th><th>Admin_Approval</th><th>HOD_Approval</th><th>Lib_Approval</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["roll"]. "</td><td> " . $row["name"]. "</td><td> " . $row["approve"]. "</td><td> " . $row["approve_h"]. "</td><td> " . $row["approve_l"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>


          