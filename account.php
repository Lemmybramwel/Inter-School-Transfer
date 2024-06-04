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
	<title>User Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="house.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
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
color: lightcoral;
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
.control-label{
font-weight:bold;
}
</style>


<body>


    <!-- Collection of nav links, forms, and other content for toggling -->
  <?php include 'includes/nanav.html'?>
<div class="ts-main-content">
   

        <div class="container-fluid">

            <h2 style="text-align: center; -webkit-text-decoration-color: blue"> </h2>
            <div class="row">

                <div class="col-md-12">

                            <form style="background: lightblue;" method="post" action="save_query.php" name="registration" class="form-horizontal" >
                                <h2  class="page-title"><center>Student Registration</center></h2>
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">ROLL.NO : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="roll" id="roll" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">NAME : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name" id="name" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">SCHOOL : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="school" id="schl" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">PROGRAM : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="program" id="prog" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">DEPARTMENT : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="dept" id="dept" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">K.C.S.E GRADE : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="grade" id="kcse" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">CLUSTER-POINTS : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="cluster" id="points" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">YEAR : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="year" id="yr" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">SEMESTER : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="semester" id="sem" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">USERNAME : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="username" id="usrnm" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">EMAIL : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="mail" id="email" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">PASSWORD : </label>
                                            <div class="col-sm-8">
                                                <input type="password" name="pass" id="pwd" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-4">
                                        <input style="margin-bottom: 1px" type="submit" class="btn btn-success btn-block btn-lg" value="SUBMIT" name="submit" >
                                    </div>


                                </div>




                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


</body>
</html>