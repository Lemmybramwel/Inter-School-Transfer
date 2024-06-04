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
if (isset($_POST['approve'])) 
{	
		$approve = $_POST['approve'];
		$roll= $_POST['roll'];
		echo $approve;
		if(!empty($approve)) 
		{
				$query = "SELECT `roll` FROM `admin` WHERE `roll`= '$roll'";		
				$query_run=mysql_query($query);
				if (mysql_num_rows($query_run)==1)												 
				{
					?>
					<label id="lb" > ** This Roll Number <?php echo $roll ?> Already Exist </label>
					<?php
				}
				else																			
				{
					$query= "INSERT INTO `admin` VALUES ('".mysql_real_escape_string($roll)."','".mysql_real_escape_string($approve)."')";
					if ($query_run = mysql_query($query))
					{
						?>
					<label id="lb"> Approved.</label>
					<?php	
					}
					else
					{
						?>
					<label id="lb" > ** Sorry! Couldn't Approve At This Time. Try Again Later. </label>
					<?php	//Can't Register
					}
					
				}
		}
		else
		{
			?>																				<!-- Rule To Remember -->
			<label id="lb" > ** Fill All The Fields </label> 									<!-- Follow css File Which Is Reffered Below -->
			<?php
		}
}

echo 'welcome>>>';

    $wel='You\'re are Logged in as';
    echo $wel.$_SESSION['user_id'];
	echo '&nbsp'.'&nbsp';
	echo '<input type="button" style="width:150px;height:30px"  value="Click here to Logout" onclick="window.location =\'logout.php\'" />';
?>	




<title> Admin Panel </title>
<h1>STUDENT LIST</h1>
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


$sql = "SELECT register.roll, name, approve_l, approve_h FROM register, hod WHERE register.roll=hod.roll AND register.roll=lib.roll";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Roll Number</th><th>Name</th><th>Verification</th><th>Lib_Approval</th><th>HOD_Approval</th><th>Approval</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
		$roll = $row["roll"];
		echo "<tr><td>" . $row["roll"]. "</td><td> " . $row["name"]. "</td><td><a href='details.php?roll=$roll'>view details</a></td><td> " . $row["approve_l"]. "</td><td> " . $row["approve_h"]. "</td><td><form action='' method='POST'><select name='approve'><option value='yes'> Yes </option><option value='no'> No </option></select><input type='text' name='roll' value='". $roll ."' hidden> <input type='submit' value='Submit'></form></td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>


          