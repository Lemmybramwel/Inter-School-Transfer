0<?php
	require 'config.php';
	
	class db_class
    {
        public $host = db_host;
        public $user = db_user;
        public $pass = db_pass;
        public $dbname = db_name;
        public $conn;
        public $error;

        public function __construct()
        {
            $this->connect();
        }

        private function connect()
        {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if (!$this->conn) {
                $this->error = "Fatal Error: Can't connect to database" . $this->conn->connect_error;
                return false;
            }
        }
     //function to save user in nyumba bora database
        public function save($roll, $name, $school,  $program,$department, $kcse, $cluster, $year, $semester, $username, $email, $pass)
        {
            $stmt = $this->conn->prepare("INSERT INTO `students` (roll, name, school, program, department, kcse_grade, cluster, year, semester, username, email, password) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")
            or die($this->conn->error);
            $stmt->bind_param("ssssssssssss", $roll, $name, $school,  $program,$department, $kcse, $cluster, $year, $semester, $username, $email, $pass);
            if ($stmt->execute()) {
                $stmt->close();
                $this->conn->close();
                return true;
            }
        }
            //function to save admin details to nyumba bora.
        public function apply($roll, $name, $school,  $department, $program, $year, $semester, $cluster, $nschool, $ndepartment, $nprogram, $nyear, $nsemester )
        {
            $stmt = $this->conn->prepare("INSERT INTO `application` (roll, name, school, department, program, year, semester, cluster, n_school, n_department, n_program, n_year, n_semester) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")
            or die($this->conn->error);
            $stmt->bind_param("sssssssssssss", $roll, $name, $school,  $department, $program, $year, $semester, $cluster, $nschool, $ndepartment, $nprogram, $nyear, $nsemester);
            if ($stmt->execute()) {
                $stmt->close();
                $this->conn->close();
                return true;
            }
        }

        public function book($hostel, $room, $year, $sem, $regno, $name,  $idno,$gender, $nationality, $county, $address, $sponsor, $prog, $usern, $email)
        {
            $stmt = $this->conn->prepare("INSERT INTO `room_booking` (Hostel_Name, Room_No, Year, Semester, reg_no, Name,  Id_Number, Gender, Nationality, County, Home_Address, Sponsor, Program, Username, Email) VALUE(?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?) ")
                or die($this->conn->error);
            $stmt->bind_param("ssssssissssssss", $hostel, $room, $year, $sem, $regno, $name,  $idno,$gender, $nationality, $county, $address, $sponsor, $prog, $usern, $email );
            if ($stmt->execute()){
                $stmt->close();
                $this->conn->close();
                return true;
            }
        }

        //function to creat hostel/ add hostel
        public function create($hid, $hostel, $room)
        {
            $stmt = $this->conn-> prepare("INSERT INTO `hostel_table`(hostel_ID, hostel_name, rooms) VALUES(?, ?, ?)") or die ($this->conn->error);
            $stmt->bind_param("sss", $hid, $hostel, $room);
            if ($stmt->execute()){
                $stmt->close();
                $this->conn->close();
                return true;
            }


        }

            //user login function
        public function login( $username, $pass)
        {
            $stmt = $this->conn->prepare("SELECT * FROM `students` WHERE `username` = '$username' && `password` = '$pass'") or die($this->conn->error);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                $valid = $result->num_rows;
                $fetch = $result->fetch_array();
                return array(
                    'roll' => $fetch['roll'],
                    'count' => $valid

                );




            }
        }

        public function adminlogin( $username, $pass)
        {
            $stmt = $this->conn->prepare("SELECT * FROM `admin` WHERE `username` = '$username' && `password` = '$pass'") or die($this->conn->error);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                $valid = $result->num_rows;
                $fetch = $result->fetch_array();
                return array(
                    'id' => $fetch['id'],
                    'count' => $valid

                );




            }
        }


        
            
        
        public  function change_pwd($pwd)
        {
            $stmt = $this->conn->prepare("SELECT password FROM registration where `password`='$pwd'") or die($this->conn->error);
             $stmt->execute();
             $result = $stmt->get_result();
             $valid = $result->num_rows;
             $fetch = $result->fetch_array();
             return array(
                     'password' => $fetch['password'],
                 'count' => $valid
             );
        }

        //admin login function
        public function admin_login ($email, $pwd)
        {
            $stmt = $this->conn-> prepare("SELECT * FROM `admin_table` WHERE `email` = '$email' && `password` = '$pwd'") or die ($this->conn->error);
            if ($stmt->execute())
            {
                $result = $stmt->get_result();
                $valid = $result->num_rows;
                $fetch = $result->fetch_array();
                return array(
                        'staff_no' => $fetch['staff_no'],
                    'count' => $valid
                );
            }
        }


        public function user_account($reg_no){
            $stmt = $this->conn->prepare("SELECT * FROM `registration` WHERE `reg_no` = '.$reg_no'") or die($this->conn->error);
            if($stmt->execute()){
                $result = $stmt->get_result();
                $fetch = $result->fetch_array();
                return array(
                    'regno'=> $fetch['reg_no'],
                    'name'=>$fetch['name']
                );
            }
        }
    }
?>