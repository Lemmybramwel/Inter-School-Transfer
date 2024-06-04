<?php

if(isset ($_POST['username'])&&isset($_POST['password']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
    $category=$_POST['category'];
	
	if(!empty($username)&&!empty($password))
	{
		$query="SELECT `Id` FROM `login_user` WHERE `username`='$username' AND `password`='$password' AND `category`='$category'";
		if($query_run=mysqli_query($con,$query))
		{
			$query_num_rows=mysqli_num_rows($query_run);
		if($query_num_rows==0)
			{
			echo "invalid username and password";	/*while($row = mysqli_fetch_assoc($result)) {
   $id = $row['ID'];
   $name = $row['name'];hod admin lib  
   etc..0754041903
}*/
			}
			//else if($query_num_rows==1)
			//{   
        while($row = mysqli_fetch_assoc($query_run))
        { 
        $user_id=$row['Id'];
        //$username=$row['username'];
       // $category=$row['category'];

		   // $user_id= mysqli_result($query_run,0, 'Id');//mysqli_fetch_assoc($query_run);
				$_SESSION['user_id']=$user_id;
				$_SESSION['username']=$username;
				$_SESSION['category']=$category;
				header('Location:index.php');
			  }  
			
		}
	}
	else
	{
		echo "you must supply a username and password";
	}
}
?>
<html>
<head>
<style>

body
{ 
  background: transparent url(background.jpg) repeat;}
  
  #site_content
{ width: 1200px;
  overflow: hidden;
  margin-bottom: 30px;
  margin-left: 100px;
  background: transparent url(../images/transparent.png) repeat;
  border-radius: 0px 0px 7px 7px;
  -moz-border-radius: 0px 0px 7px 7px;
  -webkit-border: 0px 0px 7px 7px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
  -moz-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
  box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;}

#content
{ width:850;
  margin:100px 5px 5px 5px;
  
  float: left;
  //border:1px solid #0043A8;
  
  }


  
  #child_header
{
	width:1204px;
	height: 60px;
	//border: 1px solid red;
	margin-left:100px;
	margin-top:0px;
	background: transparent url(../images/background.jpg) repeat;
}
#banner
{ width: 1204px;
  position: fixed;
  height: 60px;
  padding: 15px 0 0 0;
   background: transparent url(../images/background.jpg) repeat;
  //border:1px solid blue;
  margin: 0px ;
 
  z-index:1000;
}
   .content_container
{ width: 300px;
  height:280px;
  padding: 10px;
  margin: 10px 10px 20px 10px;
  float: left;
  border:5px solid #7380A0;
  box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 18px;
  font-size: 15px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 10px 10px;
  -moz-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 10px 10px;
   border-radius: 10px 10px 10px 10px;
  }
  #welcome
{ width: 46%;
  float: left;
  height: 40px;
  margin: 0 auto;
  padding-left: 20px;
  
 //border:1px solid blue;
 display:inline-block;
  } 
  
#welcome_slogan
{ width: 46%;
  float: left;
  height: 40px;
  margin: 0 auto;
  margin-left:50px;
  padding-left: 20px;
  
  text-align:right;
   
 //border:1px solid blue;
 display:inline-block;
}
   
#welcome H3
{ font: normal 300% Times New Roman, Times, serif;
  letter-spacing: -3px;
  text-shadow: 1px 1px #000;
  color: #0043A8;}

#welcome_slogan H3
{ 
  font: normal 300%  Times New Roman, Times, serif;
  letter-spacing: -3px;
  text-shadow: 1px 1px #FFF;
  color: #0043A8;
 } 
  
  .form_settings input
  {
	  border-radius: 5px 5px 5px 5px;
	  width: 200px;
	  border: 1px solid #7380A0;
	  padding: 5px;
	  
	  
  }
  
  .form_settings select
  {
	  border-radius: 5px 5px 5px 5px;
	  width: 150px;
  }
  
  .form_settings button
  {
	  width:100px;
	  background:#7380A0;
	  border-radius: 5px 5px 5px 5px;
	  border: 1px solid #7380A0;
  }
</style>
</head>
<title> Log In</title>
<body bgcolor="pink">
<h2 align="center" > UNIVERSITY OF KABIANGA  <span> </span></h2>
    <div id="child_header">
	  <div id="banner">
	    <div id="welcome">
	      <h3>Inter-School  <span>Transfer System</span></h3>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h3></h3>
	    </div><!--close welcome_slogan-->			
	  </div><!--close banner-->
	  </div>
	  
    </header>
<div id="site_content">	

  <div id="content" >
<div class="content_container" >
<form action="<?php echo $current_file; ?> " method="POST">
	<div class="form_settings">
            <h4 style="color:#0043A8;">Username*:</h4>
              <input type="text" name="username" autofocus required>
              <br><br>
            <h4  style="color:#0043A8;">Password*:</h4>
              <input type="password" name="password" required>
              <br><br>
               <select name="category" style="font-size:18px;">
                 <option value="select">select</option>
                 <option value="admin">admin</option>
                 <option value="hod">hod</option>
				        <option value="library">library</option>
                 <option value="student">student</option>
               </select>
             <br><br>
			 <input type="submit" value="Log In">
            <br>
			<center>Click here to <a href="../account.php">Create Account</a></center>
			<div class="text-center text-light" style="color:blue; margin-top: 10%">
                                            <a href="forgot-password.php" style="color:black;">Forgot password?</a>
                                        </div>
		  <h5 style="color:#0043A8;"><i><b>* marked fields are mandatory</b></i></h5>
		          
    </div>
</form>
</div>
</div>
</div>
</body>
</html>

<?php

?>