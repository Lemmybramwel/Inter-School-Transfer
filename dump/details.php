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

?>
<title> Details </title>
<center><h1>STUDENT DETAILS</h1></center>
<style>
body
{ 
 
  background: transparent url(background.jpg) repeat;}
h1{
	color:blue;
	font-weight: bold;
	font-style:italic;
	//position:absolute;
	margin:5px auto 5px auto;
}
table{
	 //position:absolute;
     border: 5px;
	 margin:20px auto 20px auto;
	 background-color:#eee;
	 border-collapse:collapse;
	 //top:200px;
	 //left:200px;
	 //width:900px;
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

$roll = $_GET['roll'];
echo $roll;
$sql = "SELECT * FROM register WHERE register.roll='$roll'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     
	 echo "<table><tr><th>Roll Number</th><th>Name</th><th>Email</th><th>Branch</th><th>Sem</th><th>Year</th><th>Role Id</th><th>Sgpa</th><th>Backlog</th><th>Ref_Id</th></tr>";
     // output data of each row
     if($row = $result->fetch_assoc()) {
		// $roll = $row["roll"];
		
         echo "<tr><td>" . $row["roll"]. "</td><td> " . $row["name"]. "</td><td> " . $row["email"]. "</td><td> " . $row["branch"]. "</td><td> " . $row["sem"]. "</td><td> " . $row["year"]. "</td><td> " . $row["roleid"]. "</td><td> " . $row["sgpa"]. "</td><td> " . $row["backlog"]. "</td><td> " . $row["refid"]. "</td></tr>";
     }
     echo "</table>";	 
	 
} else {
     echo "0 results";
}




$sql = "SELECT * FROM sub WHERE sub.roll='$roll'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     
	 echo "<table><tr><th>Subject Name</th><th>Suject Code</th><th>Subject Credit</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
		// $roll = $row["roll"];
		
         echo "<tr><td> " . $row["subname"]. "</td><td> " . $row["subcode"]. "</td><td> " . $row["credit"]. "</td></tr>";
     }
     echo "</table>";	 
	 
} else {
     echo "0 results";
       }



$conn->close();
?>  

</body>
</html>


          