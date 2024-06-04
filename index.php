<?php
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="LEMMY">
    <meta name="theme-color" content="#3e454c">
    <title>LOGIN</title>
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
<body>
<?php
include ('includes/nanav.html');
?>
<div class="container-fluid ">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading"><center>LOGIN PANEL</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="sample.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-4">
                                <label>USER-NAME</label><br>
                                <input type="text" name="username" placeholder="ENTER-USER-NAME">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-4">
                                <label>PASSWORD</label><br>
                                <input type="password" name="pass" placeholder="ENTER-PASSWORD">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-4">
                                <label >LOGIN AS</label><br>

                                <select name="type" id="year" class="form-control">
                                    <option value="">--Select--</option>
                                    <option value="student">student</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>

                        </div>
                        <input type="submit" name="login" class="btn btn-block btn-primary btn-lg" value="LOGIN">

                        <p><center>You dont have an Account?? <a href="account.php">click here</a>to CREATE</center></p>

                    </form>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
