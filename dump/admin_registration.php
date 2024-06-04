<?php
session_start();

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Admin Registration</title>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-social.css">
	<link rel="stylesheet" href="../css/bootstrap-select.css">
	<link rel="stylesheet" href="../css/fileinput.min.css">
	<link rel="stylesheet" href="../css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../house.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
    <div class="navbar-header d-flex col">
        <a class="navbar-brand" href="index.php"><b>E</b>-Maintain<b>Portal</b></a>
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
            <li class="nav-item "><a href="" class="nav-link">Welcome <b style="color:#4aba70;"><?php echo ucfirst(strtolower($user));  ?></b></a></li>
            <li class="nav-item " ><a href="#" class="nav-link">Submit Request</a></li>
            <li class="nav-item "><a href="response.php" class="nav-link">Responses</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right ml-auto">
            <li class="nav-item"><a href="faq.html" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
            <li class="nav-item dropdown">
                <a href="profile.php" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="images/profile2.png" class="avatar" alt="Avatar"> My Account<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="profile.php" class="dropdown-item"><i class="fa fa-user-o"></i> User</a></li>
                    <li><a href="profile.php" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
                    <li class="divider dropdown-divider"></li>
                    <li><a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<div class="ts-main-content">
    <?php include('includes/sidebar1.php');?>
    <?php include('includes/header.php');?>
    <div class="content-wrapper">
        <div class="container-fluid">

            <h2 class="page-title">Admin Registration </h2>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-success" style="background-color: silver">
                        <div class="panel-heading">Fill all Info</div>
                        <div class="panel-body">
                            <form method="post" action="insert.php" name="adminregistration" class="form-horizontal" onSubmit="return valid();">




                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Staff No : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="staffno" id="staffno"  class="form-control" required="required" >
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Name : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name" id="name"  class="form-control" required="required" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">	Hostel ID : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="hid" id="hid"  class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">ID Number : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="idno" id="idno"  class="form-control" required="required">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">E-mail : </label>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" id="email"  class="form-control" required="required">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Password : </label>
                                            <div class="col-sm-8">
                                                <input type="password" name="pwd" id="pwd"  class="form-control" required="required">
                                            </div>
                                        </div>




                                        <div class="col-sm-6 col-sm-offset-4">
                                            <button class="btn btn-default" type="submit">Cancel</button>
                                            <input type="submit" name="submit" Value="Register" class="btn btn-primary">
                                        </div>



                            </form>
                        </div>
                    </div>                </div>
                <div class="col-md-2"></div>

            </div>
        </div>
    </div>
</div>


</body>
</html>