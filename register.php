<?php
require 'conn.inc.php';
require 'core.inc.php';

if (
//isset($_POST['1code']) && isset($_POST['1name']) && isset($_POST['1c']) && 
//isset($_POST['3code']) && isset($_POST['3name']) && isset($_POST['3c']) && 
//isset($_POST['4code']) && isset($_POST['4name']) && isset($_POST['4c']) &&
isset($_POST['name']) && isset($_POST['email']) && isset($_POST['roll']) && isset($_POST['sem']) && isset($_POST['year']) &&  isset($_POST['nwschl']) && isset($_POST['gred']) &&
isset($_POST['schl']) && isset($_POST['refid']))
//isset($_POST['roleid']) && isset($_POST['sgpa']) && isset($_POST['backlog']) && 

	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$roll = $_POST['roll'];
		//$branch = $_POST['branch'];
		$sem = $_POST['sem'];
    $gred = $_POST['gred'];
    $nwschl = $_POST['nwschl'];
		$year = $_POST['year'];
		$roleid = $_POST['schl'];
		//$sgpa = $_POST['sgpa'];
		//$backlog = $_POST['backlog'];
		$refid = $_POST['refid'];
		/*
		$code1 = $_POST['1code'];
		$code2 = $_POST['2code'];
		$code3 = $_POST['3code'];
		$code4 = $_POST['4code'];
		$name1 = $_POST['1name'];
		$name2 = $_POST['2name'];
		$name3 = $_POST['3name'];
		$name4 = $_POST['4name']; 
		$c1 = $_POST['1c'];
		$c2 = $_POST['2c'];
		$c3 = $_POST['3c'];
		$c4 = $_POST['4c'];
		$i='1';
		*/
		if(!empty($name) && !empty($gred)&& !empty($nwschl)&& !empty($email) && !empty($roll)  && !empty($sem) && !empty($year) && !empty($roleid)&&  !empty($refid))
		{
				$query = "SELECT `roll` FROM `register` WHERE `roll`= '$roll'";		
        //Checking Unique Username
				$query_run=mysqli_query($con,$query);
				if (mysqli_num_rows($query_run)==1)											
        	//If Any Rows Found... Can Be Greater Than 1 Also If Looking In Other Rows Also 
				{
					?>
					<label id="lb" > ** This Roll Number <?php echo $rollno ?> Already Exist </label>
					<?php
				}
				else																			
        //If No Rows Match i.e., Username Already Not Exists
				{
					$query= "INSERT INTO `register` VALUES ('".mysqli_real_escape_string($con,$name)."','".mysqli_real_escape_string($con,$email)."','".mysqli_real_escape_string($con,$gred)."','".mysqli_real_escape_string($con,$nwschl)."','".mysqli_real_escape_string($con,$roll)."','".mysqli_real_escape_string($con,$sem)."','".mysqli_real_escape_string($con,$year)."','".mysqli_real_escape_string($con,$roleid)."','".mysqli_real_escape_string($con,$refid)."')";   //Inserting The Values In Database Using mysql real escape string function for security purpose
					/*if ($query_run= mysql_query($query))
					{
						if(!empty($name1) && !empty($name2) && !empty($name3) && !empty($code1) && !empty($code2) && !empty($code3) && !empty($c1) && !empty($c2) && !empty($c3))
						{
							//for($i=1;$i<5;$i++)
							
								$query= "INSERT INTO `sub` VALUES ('".mysql_real_escape_string($roll)."','".mysql_real_escape_string($name1)."','".mysql_real_escape_string($code1)."','".mysql_real_escape_string($c1)."')";   //Inserting The Values In Database Using mysql real escape string function for security purpose
								$query1= "INSERT INTO `sub` VALUES ('".mysql_real_escape_string($roll)."','".mysql_real_escape_string($name2)."','".mysql_real_escape_string($code2)."','".mysql_real_escape_string($c2)."')";   //Inserting The Values In Database Using mysql real escape string function for security purpose
								$query2= "INSERT INTO `sub` VALUES ('".mysql_real_escape_string($roll)."','".mysql_real_escape_string($name3)."','".mysql_real_escape_string($code3)."','".mysql_real_escape_string($c3)."')";   //Inserting The Values In Database Using mysql real escape string function for security purpose
								$query3= "INSERT INTO `sub` VALUES ('".mysql_real_escape_string($roll)."','".mysql_real_escape_string($name4)."','".mysql_real_escape_string($code4)."','".mysql_real_escape_string($c4)."')";   //Inserting The Values In Database Using mysql real escape string function for security purpose
							*/
							if ($query_run= mysqli_query($con,$query) )
							{
								?>
								<label id="lb"> Thank You For Submission. <a href="dump/status.php?roll=$roll1"><<Request_status.</a></label>
								<?php		//Registered
							}
							else
							{
                echo '<script type="text/javascript">
           window.location = "register.php"
      </script>';
								?>
								<?php	//Can't Register
							}
						}
						
					}
				}
	
	
	echo '" /><a href="dump/status.php">Registration Status</a>';
	
?>	




<html>
<head>
<style>


body
{ 
 
  background: transparent url(dump/background.jpg) repeat;}
</style>
</head>
<title>Register</title>
<body bgcolor="pink">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
   <td width="10%"  > 
   
      &nbsp;</td>
   <td width="90%"  > 
   
      <div align="left">
   
      <table border="0" cellpadding="0" cellspacing="0" width="100%" bordercolor="#E5E5E5" style="border-collapse: collapse">
        <form method="POST" name="frm" action="" onsubmit="return chk()">       

             <tr> 
              
            <td width="90%" class="normal"  height="22" colspan="2" align="center">
            <h1>Inter-School Transfer Form<h1></td>
          </tr>
              <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		 <tr> 
          <tr> 
              
            <td width="50%"  class="text-normalw"  height="22" align="left">&nbsp;&nbsp;&nbsp; 
            Name* </td>
            <td width="50%"   class="text-normalw"  height="22">&nbsp;<input type="text" name="name" size="34"  class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"   ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10" ></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left" >&nbsp;&nbsp;&nbsp; 
            Email*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22" >&nbsp;<input type="text" name="email" size="34"  class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"></td>
            <td width="55%" valign="top"  class="text-normalw"  height="10"></td>
          </tr>
            <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left">&nbsp;&nbsp;&nbsp; 
            Admision Number*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22" >&nbsp;<input type="text" name="roll" size="34"  class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"></td>
            <td width="55%" valign="top"  class="text-normalw"  height="10"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left"  >&nbsp;&nbsp;&nbsp; 
            School*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22" >&nbsp;<input type="text" name="schl" size="34"  class="text-normalw"></td>
          </tr>
        
          <tr> 
            <td width="27%"  class="text-normalw" height="10"></td>
            <td width="55%" valign="top"  class="text-normalw"  height="10"></td>
          </tr>
 
          <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left"  >&nbsp;&nbsp;&nbsp; 
           Current Semester*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22" >&nbsp;<input type="text" name="sem" size="34"  class="text-normalw"></td>
          </tr>

          <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left"  >&nbsp;&nbsp;&nbsp; 
            New School*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22" >&nbsp;<input type="text" name="nwschl" size="34"  class="text-normalw"></td>
          </tr>


          <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left"  >&nbsp;&nbsp;&nbsp; 
            KCSE Grade*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22" >&nbsp;<input type="text" name="gred" size="34"  class="text-normalw"></td>
          </tr>
          
         
          
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
           <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left" >&nbsp;&nbsp;&nbsp; Year of Study*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="year" size="34"  class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="dropdown" height="10"  > </td>
          </tr>
          <!--
          <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; User_Role_Id*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="roleid" size="34"  class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>

          <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; sgpa*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="sgpa" size="34"  class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
           
          <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; 
            backlog*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<select size="1" name="backlog">
             <option>Select</option>
             <option value="yes">Yes</option>
             <option value="no">No</option>
           
            </select></td>
			<td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="backlog_details" size="34" value="{backlog_details}" class="text-normalw"></td>-->
          
		  <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
         
          <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; pay_reciept_Number*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="refid" size="34"  class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		  <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		  <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		   <!--<tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; Date*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="date" size="34"  class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		 <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; 
            Designation*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="user_designation" size="34"  class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		  
		<tr> 
          
          <table border="2">
          <tr>
          <th>Sl No</th>
          <th>Subject Code</th>
          <th>Subject Name</th>
          <th>Credits</th>
          </tr>

          <tr>
          <td>1.</td>
          <td><input type="text" name="1code" size="10" /></td>
          <td><input type="text" name="1name" size="20" /></td>
          <td><input type="text" name="1c" size="3" /></td>
          </tr>

          <tr>
          <td>2.</td>
          <td><input type="text" name="2code" size="10" /></td>
          <td><input type="text" name="2name" size="20" /></td>
          <td><input type="text" name="2c" size="3" /></td>
          </tr>

          <tr>
          <td>3.</td>
          <td><input type="text" name="3code" size="10" /></td>
          <td><input type="text" name="3name" size="20" /></td>
          <td><input type="text" name="3c" size="3" /></td>
          </tr>

          <tr>
          <td>4.</td>
          <td><input type="text" name="4code" size="10" /></td>
          <td><input type="text" name="4name" size="20" /></td>
          <td><input type="text" name="4c" size="3" /></td>
          </tr>

          <tr>
          <td>Total Credits.</td>
          <td><input type="text" name="total_credits" size="10" /></td>
          </tr>
          </table>
          -->
 

         
          <tr align="center"> 
            <td colspan="2" height="26" > 
              <input type="submit" value="Submit" class="normal"></td>
          </tr>
        
          </form>
      </table>
  </table>