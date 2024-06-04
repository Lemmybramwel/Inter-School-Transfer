<?php
include 'session.php';
include  'includes/dbconfig.php';
('includes/user.php');

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


<body>





    <div class="container">


        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="panel panel-warning">
                    <div class="panel-heading">INTER SCHOOL TRANSFER</div>
                    <div class="panel-body">

                        <?php
                        $aid=$_SESSION['roll'];
                        $ret="select * from students where roll=?";
                        $stmt= $mysqli->prepare($ret) ;
                        $stmt->bind_param('s',$aid);
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                        //$cnt=1;
                        while($row=$res->fetch_object())
                        {
                        ?>

                        <form action="apply_query.php" method="post" class="form-horizontal">
                            <div class="row">
                                <div class="col-sm-4 ">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">ROLL.NO : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="roll" id="roll" class="form-control"  value="<?php echo $row->roll; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">NAME : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="name" id="name" class="form-control"  value="<?php echo $row->name; ?>" readonly>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-sm-4 ">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">SCHOOL : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="school" id="schl" class="form-control"  value="<?php echo $row->school; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">DEPARTMENT : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="dept" id="dept" class="form-control"  value="<?php echo $row->department; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">PROGRAM : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="program" id="prog" class="form-control"  value="<?php echo $row->program; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">YEAR : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="year" id="yr" class="form-control" value="<?php echo $row->year; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">SEMESTER : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nsemester" id="sem" class="form-control"  value="<?php echo $row->semester; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">CLUSTER-POINTS : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="cluster" id="points" class="form-control"  value="<?php echo $row->cluster; ?>" readonly>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-sm-4 ">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">SCHOOL : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nschool" id="schl" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">DEPARTMENT : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="ndept" id="dept" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">PROGRAM : </label>
                                        <div class="col-sm-8">
                                            <select name="nprogram" id="hostel"class="form-control"   required>
                                                <option value="">Select Program</option>
                                                <?php
                                                $conn = new mysqli('localhost', 'root', '', 'interschooltransferdb') or die(mysqli_error());
                                                $cos = $conn->prepare("SELECT * FROM `courses` ");
                                                if($cos->execute()){
                                                    $rst = $cos->get_result();
                                                }
                                                while($coss = $rst->fetch_array()){
                                                    ?>
                                                    <option value = "<?php echo $coss['courses']?>"><?php echo $coss['courses']?></option>
                                                    <?php
                                                }
                                                $conn->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">YEAR : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nyear" id="yr" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">SEMESTER : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="semester" id="sem" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">CLUSTER-POINTS : </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="ncluster" id="points" class="form-control" value="N/A" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-sm-offset-4">
                                    <input style="margin-bottom: 1px" type="submit" class="btn btn-success btn-block btn-lg" value="SUBMIT" name="submit" >
                                </div>


                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>


</div>



</body>
</html>
