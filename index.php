<?php 

require 'connect.php';
require 'core.inc.php';


if (loggedin()) {
	
	echo 'you are logged in,';
	echo '<a href="logout.php">Logout</a>';
}
else{
include 'loginform.inc.php';

}

 ?>