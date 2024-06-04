<?php
require_once 'session.php';
include('includes/config.php');



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
        <title>Student Inter-School Transfer</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

</head>
<body>
<div class="brand clearfix" style="background: deepskyblue;">
    <a href="#" class="logo" style="font-size:16px; -webkit-text-fill-color: darkred"><b>NYUMBA BORA HOSTELS</b></a>
    <span class="menu-btn"><i class="fa fa-bars"></i></span>
    <ul class="ts-profile-nav">
        <li class="ts-account">
            <?php
            $aid=$_SESSION['reg_no'];
            $ret="select * from registration where reg_no=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('s',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
            {
                ?>
                <a href="#"><img src="img\WIN_20190104_01_14_09_Pro.jpg" class="ts-avatar hidden-side" alt=""> <?php echo $row->reg_no;?> <i class="fa fa-angle-down hidden-side"></i></a><?php } ?>
            <ul>
                <li><a href="my-profile.php">My Account</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
          <div class="content-wrapper">
			<div class="container-fluid">
                <?php
                $aid=$_SESSION['reg_no'];
                $ret="select * from registration where reg_no=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('s',$aid);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                //$cnt=1;
                while($row=$res->fetch_object())
                {
                ?>

				<div class="row">
					<div class="col-md-12">
                        <h2 class="page-title">welcome <?php echo $row->name;?> </h2>
                                                <?php }?>
						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
										<form method="post" action="booking_query.php" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"><h4 style="color: green" align="left">Room Related info </h4> </label>
                                            </div>









                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">HOSTEL. </label>
                                                <div class="col-sm-8">
                                                    <select name="hostel" id="hostel"class="form-control"   required>
                                                        <option value="">Select Hostel</option>
                                                        <?php
                                                        $conn = new mysqli('localhost', 'root', '', 'nyumba_bora') or die(mysqli_error());
                                                        $g_animal = $conn->prepare("SELECT * FROM `animal` GROUP BY `Hostel_Group`");
                                                        if($g_animal->execute()){
                                                            $g_result = $g_animal->get_result();
                                                        }
                                                        while($f_ganimal = $g_result->fetch_array()){
                                                            ?>
                                                            <option value = "<?php echo $f_ganimal['Hostel_Group']?>"><?php echo $f_ganimal['Hostel_Group']?></option>
                                                            <?php
                                                        }
                                                        $conn->close();
                                                        ?>
                                                    </select>


                                                </div>
                                            </div>
                                            <div

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">ROOM. </label>
                                                <div class="col-sm-8">
                                                    <select name="room" id="room"class="form-control"  >
                                                        <?php
                                                        $conn = new mysqli('localhost', 'root', '', 'nyumba_bora') or die(mysqli_error());
                                                        $animal = $conn->prepare("SELECT * FROM `hostel4` ") or die(mysqli_error());
                                                        echo '<option value = "">Select a room</option>';
                                                        if($animal->execute()){
                                                            $a_result = $animal->get_result();
                                                        }
                                                        while($f_animal = $a_result->fetch_array()){
                                                            echo '<option value = "'.$f_animal['id'].'">'.$f_animal['id'].'</option>';
                                                        }
                                                        ?>
                                                    </select>

                                                </div>
                                            </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">YEAR</label>
                                        <div class="col-sm-8">
                                            <select name="year" id="year" class="form-control">
                                                <option value="">Select Academic Year</option>
                                                <option value="2018/19">2018/19</option>
                                                <option value="2019/20">2019/20</option>
                                                <option value="2020/21">2020/21</option>
                                                <option value="2021/22">2021/22</option>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">SEMESTER</label>
                                        <div class="col-sm-8">
                                            <select name="sem" id="sem" class="form-control">
                                                <option >Select Semester</option>
                                                <option >I</option>
                                                <option >II</option>

                                            </select>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Total Amount</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="ta" id="ta"  class="result form-control"  value="">
                                        </div>
                                    </div>


                                   

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">My Profile</div>
                                    <div class="panel-body">
                                        <form method="post" action="" class="form-horizontal">











                                             <?php
                                            $aid=$_SESSION['reg_no'];
                                            $ret="select * from registration where reg_no=?";
                                            $stmt= $mysqli->prepare($ret) ;
                                            $stmt->bind_param('s',$aid);
                                            $stmt->execute() ;//ok
                                            $res=$stmt->get_result();
                                            //$cnt=1;
                                            while($row=$res->fetch_object())
                                            {
                                            ?>
                                            <div class="row">
                                                <div class="col-md-12">


                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">



                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label"> Registration No : </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" name="regno" id="regno"  class="form-control" required="required" value="<?php echo $row->reg_no;?>" readonly>
                                                                    </div>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label"> Name : </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" name="name" id="name"  class="form-control" value="<?php echo $row->name;?>"   readonly >
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Date of Birth: </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="date" name="dob" id="dob"  class="form-control" value="<?php echo $row->DoB;?>"  readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Identification Number : </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" name="idno" id="idno"  class="form-control" value="<?php echo $row->id_no;?>" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Gender : </label>
                                                                    <div class="col-sm-8">
                                                                        <select name="gender" class="form-control" required="required">
                                                                            <option value="<?php echo $row->gender;?>"><?php echo $row->gender;?></option>
                                                                            <option value="male">Male</option>
                                                                            <option value="female">Female</option>


                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Nationality : </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" name="nationality" id="nation"  class="form-control" maxlength="10" value="<?php echo $row->nationality;?>" required="required">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">County : </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" name="county" id="county"  class="form-control" maxlength="10" value="<?php echo $row->county;?>" required="required">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Home-Address: </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" name="address" id="address"  class="form-control" maxlength="10" value="<?php echo $row->home_address;?>" required="required">
                                                                    </div>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Sponsor : </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" name="sponsor" id="sponsor"  class="form-control" maxlength="10" value="<?php echo $row->sponsor;?>" required="required">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Program : </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" name="prog" id="prog"  class="form-control" maxlength="10" value="<?php echo $row->program;?>" required="required">
                                                                    </div>

                                                                </div>


                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Username : </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" name="usern" id="usern"  class="form-control" maxlength="10" value="<?php echo $row->username;?>" required="required">
                                                                    </div>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Email id: </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="email" name="email" id="email"  class="form-control" value="<?php echo $row->email;?>" readonly>
                                                                        <span id="user-availability-status" style="font-size:12px;"></span>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>





                                                                <div class="col-sm-6 col-sm-offset-4">

                                                                    <input type="submit" name="submit" Value="Book Hostel" class="btn btn-primary">
                                                                </div>
                                                            </form>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src = "js/jquery-3.1.1.js"></script>
<script type = "text/javascript">
    $(document).ready(function(){
        $('#room').on('change', function(){
            if($('#room').val() == ""){
                $('#animal').empty();
                $('<option value = "">Select an animal</option>').appendTo('#animal');
                $('#animal').attr('disabled', 'disabled');
            }else{
                $('#animal').removeAttr('disabled', 'disabled');
                $('#animal').load('animal_get.php?Hostel_Group=' + $('#room').val());
            }
        });
    });
</script>




</html>