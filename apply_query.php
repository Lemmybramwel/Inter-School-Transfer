<?php
require_once "includes/class.php";
$conn = new db_class();
if(ISSET($_POST['submit'])) {
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $school = $_POST['school'];
    $program = $_POST['program'];
    $department = $_POST['dept'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $cluster = $_POST['cluster'];

    $nschool = $_POST['nschool'];
    $nprogram = $_POST['nprogram'];
    $ndepartment = $_POST['ndept'];
    $nyear = $_POST['nyear'];
    $nsemester = $_POST['nsemester'];


    $conn->apply($roll, $name, $school, $department, $program, $year, $semester, $cluster, $nschool, $ndepartment, $nprogram, $nyear, $nsemester);
    echo '<script>alert("Successfully saved!")</script>';
    echo '<script>window.location= "apply_transfer.php"</script>';
}