<?php
	session_start();
include('../includes/dbconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>APPLICATION</title>
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-social.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-select.css">
    <link rel="stylesheet" href="bootstrap/css/fileinput.min.css">
    <link rel="stylesheet" href="bootstrap/css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <script type="text/javascript" src="../js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="../js/validation.min.js"></script>
    <script type="text/javascript" src="../http://code.jquery.com/jquery.min.js"></script>
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>

<?php include '../includes/nanav.html' ?>

<div class="ts-main-content">

        <h1 class="page-header text-center">INTER-SCHOOL TRANSFER APPLICATION LIST</h1>
        <div class="container-fluid">


            <div class="row">
                <div class="col-md-12 ">
                    <div class="col-md-12">

                        <div class="row">
                            <?php
                            if(isset($_SESSION['error'])){
                                echo
                                    "
                                    <div class='alert alert-danger text-center'>
                                        <button class='close'>&times;</button>
                                        ".$_SESSION['error']."
                                    </div>
                                    ";
                                unset($_SESSION['error']);
                            }
                            if(isset($_SESSION['success'])){
                                echo
                                    "
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
                                unset($_SESSION['success']);
                            }
                            ?>

                            <div class="panel panel-danger">
                                <div class="panel-heading">manage students</div>
                                <div class="panel-body">
                                    <div class="row">

                                        <div class="height10">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10" >
                                                <table id="myTable" class="table table-bordered table-striped">
                                                    <thead>
                                                    <th>ROLL</th>
                                                    <th>CLUSTER</th>
                                                    <th>DEPAERTMENT</th>
                                                    <th>NEW DEPARTMENT</th>
                                                    <th>NEW PROGRAM</th>
                                                    <th>NEW YEAR</th>
                                                    <th>NEW SEMESTER</th>
                                                    <th>STATUS</th>

                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    include_once('connection.php');
                                                    $sql = "SELECT * FROM application";

                                                    //use for MySQLi-OOP
                                                    $query = $conn->query($sql);
                                                    while($row = $query->fetch_assoc()){
                                                        echo
                                                            "<tr>
									<td>".$row['roll']."</td>
									<td>".$row['cluster']."</td>
									<td>".$row['department']."</td>
									<td>".$row['n_department']."</td>
									<td>".$row['n_program']."</td>
									<td>".$row['n_year']."</td>
									<td>".$row['n_semester']."</td>
									<td>".$row['status']."</td>
									
								</tr>";
                                                        include('edit_delete_modal.php');
                                                    }
                                                    /////////////////

                                                    //use for MySQLi Procedural
                                                    // $query = mysqli_query($conn, $sql);
                                                    // while($row = mysqli_fetch_assoc($query)){
                                                    // 	echo
                                                    // 	"<tr>
                                                    // 		<td>".$row['id']."</td>
                                                    // 		<td>".$row['firstname']."</td>
                                                    // 		<td>".$row['lastname']."</td>
                                                    // 		<td>".$row['address']."</td>
                                                    // 		<td>
                                                    // 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                                                    // 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                                                    // 		</td>
                                                    // 	</tr>";
                                                    // 	include('edit_delete_modal.php');
                                                    // }
                                                    /////////////////

                                                    ?>
                                                    </tbody>
                                                </table>
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
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>