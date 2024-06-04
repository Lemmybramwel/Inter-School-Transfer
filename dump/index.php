<?php
require "core.inc.php";
require "conn.inc.php";

if(loggedin())
{
	switch($_SESSION['category'])
	{
		case "hod" : {header('Location:hod.php');
		break;
	    }
		case "admin" :{ header('Location:admin_panel');
		break;
		}
		//case "library" : {header('Location:library.php');
		//break;
		//}
		case "student" : {header('Location:panel.php');
		break;
		}
		default: case "admin" : header('Location:logout.php');
	}
	
	
}
else
{
include "login.inc.php";
}
?>
