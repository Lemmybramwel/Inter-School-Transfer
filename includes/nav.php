<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
    <div class="navbar-header d-flex col">
        <a class="navbar-brand" href="index.php"><b>INTER-SCHOOL-TRANSFER</b></a>
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

            <li class="nav-item " ><a href="#" class="nav-link"></a></li>

        </ul>
        <?php
                        $aid=$_SESSION['id'];
                        $ret="select * from admin where id=?";
                        $stmt= $mysqli->prepare($ret) ;
                        $stmt->bind_param('s',$aid);
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                        //$cnt=1;
                        while($row=$res->fetch_object())
                        {
                        ?>

        <ul class="nav navbar-nav navbar-right ml-auto">
            <li class="nav-item"><a href="faq.html" class="nav-link">APPROVED STUDENTS</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">REJECTED STUDENTS</a></li>
            <li class="nav-item dropdown">
                <a href="profile.php" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="../images/profile2.png" class="avatar" alt="Avatar"> <?php echo $row->name?><?php } ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="profile.php" class="dropdown-item"><i class="fa fa-user-o"></i> User</a></li>
                    <li><a href="profile.php" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
                    <li class="divider dropdown-divider"></li>
                    <li><a href="../logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
</body>
</html>