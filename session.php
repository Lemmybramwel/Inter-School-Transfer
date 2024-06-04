<?php
/**
 * Created by PhpStorm.
 * User: WESCO
 * Date: 15/01/2019
 * Time: 11:43
 */
session_start();
if(!($_SESSION['roll'])){
    header('location:index.php');
}else{
}
?>