<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["admin_loggedin"]) || $_SESSION["admin_loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
// Include config file
require_once "users_config.php";
 
// Define variables and initialize with empty values
$name= $email = $phonenumber = $password = $role= "";
$name_err = $email_err = $pnumber_err = $password_err =$role_err= "";
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
   // Validate username
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate email address
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter an address.";     
    } 
	elseif (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
     $email_err = "invalid email address";
    }
	else{
        $email = $input_email;
    }
    
    // Validate phonenumber
    $input_phonenumber = trim($_POST["phonenumber"]);
    if(empty($input_phonenumber)){
        $pnumber_err = "Please enter the phonenumber.";     
    } 
	elseif(!preg_match('/^(?:254|\+254|0)?(7(?:(?:[1-9][0-9])|(?:0[0-8])|(9[0-2]))[0-9]{6})$/', $input_phonenumber)) {
     $pnumber_err = 'Please enter a valid phone number';
    } 
    else{
        $phonenumber= $input_phonenumber;
    }
	// Validate password
	$input_password = trim($_POST["password"]);
    if(empty($input_password)){
        $password_err = "Please enter a password.";     
    } 
	else{
        $password= $input_password;
    }
	// Validate User Role
	$input_role= trim($_POST["role"]);
    if(empty($input_role)){
        $role_err = "Please enter admin to add ADMIN and user to add a normal user.";     
    } 
	else{
		 if($_POST['role'] =="admin")
		 {
        $role="admin";
		 }
        elseif($_POST['role'] =="user")
		{
         $role="user";
		}
		else
		{
         $role="user";
		}
	}
    // Check input errors before inserting in database
     if(empty($name_err) && empty($email_err) && empty($pnumber_err)&& empty($password_err)&& empty($role_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET name=?, password=?, email=?, phonenumber=?, role=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssi", $param_name, $param_password, $param_email, $param_phonenumber,$param_role, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_phonenumber = $phonenumber;
            $param_password=password_hash($password, PASSWORD_DEFAULT); // Creates a password hash;
			$param_role=$role;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: ../admin_panel");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
					$password=$row["password"];
                    $email = $row["email"];
                    $phonenumber = $row["phonenumber"];
					$role=$row["role"];
					
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: uerror.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: uerror.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="E-MaintainPortal is online maintenance portal for submission of damaged E-resources such as computer within our different departments in the school.A user submits a request for E-resource maintenance by describing the kind of damage of the Resource after which an Admin responds and action initiated thereafter."/>
<meta name="author" content="Collins Wekesa">
<title>Update User | E-MaintainPortal</title>
<link rel="icon" href="../images/favicon.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<style type="text/css">
	body{
		background: #fff;
		font-family: 'Open Sans', sans-serif;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {
		font-size: 14px;
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #d6d6d6;
		box-shadow: 0 0 4px rgba(0,0,0,.1);		
	}
	.nav-link img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #555;
		padding-left: 0;
		font-size: 20px;
		padding-right: 50px;
		font-family: 'Raleway', sans-serif;
		text-transform: uppercase;
		font-weight:bold;
	}
	.navbar .navbar-brand b {
		font-weight: bold;
		color: #4aba70;
	}
	.navbar ul.nav li {
		font-size: 96%;
		font-weight: bold;		
	}
	.navbar ul.nav li.active a, .navbar ul.nav li.active a:hover, .navbar ul.nav li.active a:focus {
		color: #4aba70 !important;
		background: transparent !important;
	}
	.search-box {
        position: relative;
    }
	.search-box input.form-control, .search-box .btn {
		font-size: 14px;
		border-radius: 2px !important;
	}
	.search-box .input-group-btn {
		padding-left: 4px;		
	}
	.search-box input.form-control:focus {
		border-color: #4aba70;
		box-shadow: 0 0 8px rgba(240,79,1,0.2);
	}
	.search-box .btn-primary, .search-box .btn-primary:active {
		font-weight: bold;
		background: #4aba70;
		border-color:#4aba70;
		text-transform: uppercase;
		min-width: 90px;
	}
	.search-box .btn-primary:focus {
		outline: none;
		background: #eb4e01;
		box-shadow: 0 0 8px rgba(240,79,1,0.2);
	}
	.search-box .btn span {
		transform: scale(0.9);
		display: inline-block;
	}
	.navbar .nav-item i {
		font-size: 18px;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar .nav-item.open > a {
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777;
		padding: 8px 20px;
		line-height: normal;
		font-size: 14px;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:active {
		color: #333;
	}
	.navbar .navbar-form {
		border: none;
	}
	.dropdown:hover>.dropdown-menu {
        display: block;
		transform: scale(1);
    }
	@media (min-width: 992px){
		.form-inline .input-group .form-control {
			width: 225px;			
		}
	}
	@media (max-width: 992px){
		.form-inline {
			display: block;
		}
	}
	@media (max-width: 480px){
		.navbar .navbar-brand {
		color: #555;
		padding-left: 0;
		font-size: 20px;
		padding-right: 10px;
		font-family: 'Raleway', sans-serif;
		text-transform: uppercase;
	}
	}

</style>
</head> 
<body>
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="../admin_panel"><b>E</b>-Maintain<b>Portal</b></a>
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
	<ul class="nav navbar-nav">	
		<li class="nav-item "><a href="../admin_panel" class="nav-link">Home</a></li>
		<li class="nav-item active" ><a href="" class="nav-link">Update User</a></li>
		<li class="nav-item "><a href="../admin_panel#user-response" class="nav-link">Responses</a></li>
		<li class="nav-item "><a href="../admin_panel#users" class="nav-link">Manage Users</a></li>
	</ul>
		<ul class="nav navbar-nav navbar-right ml-auto">
			<li class="nav-item"><a href="../faq.html" class="nav-link">FAQs</a></li>
			<li class="nav-item"><a href="../contact.php" class="nav-link">Contact Us</a></li>
			<li class="nav-item dropdown">
				<a href="../profile.php" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="../images/profile2.png" class="avatar" alt="Avatar"> My Account<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="../profile.php" class="dropdown-item"><i class="fa fa-user-o"></i> Admin</a></li>
					<li><a href="../profile.php" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
					<li class="divider dropdown-divider"></li>
					<li><a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<div class="container-fluid login-container mt-4">
    <div class="row">
	<div class="col-md-3"></div>
 <div class="col-md-6">
        <div class="tile">
                    <div class="page-header">
                        <h3>Update User Record</h3>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Username</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                            <span class="help-block"><?php echo $password_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                             <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($pnumber_err)) ? 'has-error' : ''; ?>">
                            <label>Phonenumber</label>
                            <input type="text" name="phonenumber" class="form-control" value="<?php echo $phonenumber; ?>">
                            <span class="help-block"><?php echo $pnumber_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($role_err)) ? 'has-error' : ''; ?>">
                            <label>Role</label>
                            <input type="text" name="role" class="form-control" value="<?php echo $role; ?>">
                            <span class="help-block"><?php echo $role_err;?></span>
                        </div>
						
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../admin_panel" class="btn btn-outline-primary">Cancel</a>
                    </form>
        </div>
		</div>
	<div class="col-md-3"></div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
</body>
</html>                                                        