<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Password change - entrance</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="n3style.css" rel="Stylesheet" type="text/css">
</head>
<body dir=ltr >

<div id="skiptocontent" ><a href="#mainContent" id="skipper">Skip to main content</a></div>
<div class="myBreak">
</div>

<div dir=ltr style="float:left" lang="en">

<strong> <span  class="engText">English version</span>
</strong> </div>

<div dir=rtl style="float:right" lang="he">
<a href="hlogin.php" style="color:#3B5998"><strong><span class="hebText">לגרסה עברית</span>
</strong></a>
</div>

<img src="BGU.sig.png" height=84 alt="Logo of Ben-Gurion University of the Negev" >
 <div id="mainContent">

<h1>
Password change - entrance</h1>
<hr>
<div class="myBreak">
</div>
<div class="myBreak">
</div>
<span class="engLargerText">Here you can change your organizational password.
</span><div class="BR"></div><span class="engLargerText">Upon the successful completion of the process your password will be changed on all organizational systems, except your home router.
</span><div class="BR"></div><span class="engLargerText">The password change may also influence access to some departmental servers - please contact your computer referent for details.</span><div class="BR"></div><div class="myBreak">
</div>
<span class="engLargerText">Attention new students! </span><strong><span class="engLargerText">Do not change password before your email account is opened.</span></strong><div class="BR"></div><span class="engLargerText">Email account is opened one day after you first time register for a course.</span><div class="BR"></div><div class="myBreak">
</div>

<form action="main.php" method=POST >
<?php
if($_SESSION['error'] == 1) {
?>
    <h2 class="myEngh2"> Error message </h2>
    <span class="redengText" id="errorfound" tabindex=0>Login incorrect - please try again</span>
    <div class="myBreak">
    </div>
<?php
}
?>
<div class="ETable"><div class="Row"><div class="Cell"><span class="engText"><label for="username">Username:</label></span>
 </div>
<div class="Cell"> <input type="text" id="username" name="username" size=16 maxlength="16" dir="ltr"   value="" class="textEntryEng" >
</div>
<div class="Cell" hidden> <input type="text" id="eng" name="eng" size=16 maxlength="16" dir="ltr"   value="eng" class="textEntryEng" hidden>
</div>
 <div class="Cell">   </div>
  </div>
<div class="Row"><div class="Cell"><span class="engText"><label for="pass">Password:</label></span>
 </div>
<div class="Cell"> <input type="password" id="pass" name="pass" size=24 maxlength="24" dir="ltr"   value="" class="textEntryEng" >
</div>
 <div class="Cell">   </div>
  </div>
<div class="Row"><div class="Cell"><span class="engText"><label for="id">ID:</label></span>
 </div>
<div class="Cell"> <input type="text" id="id" name="id" size=12 maxlength="11" dir="ltr"   value="" class="textEntryEng" >
</div>
 <div class="Cell">   </div>
  </div>
 </div>

<div class="myBreak">
</div>
<div class="myBreak">
</div>

<input type=submit  name="nextbut" value="Next" class="buttonEntry">

<input type=hidden name="isheb" value="0">
</form>
<div class="myBreak">
</div>
<hr>
<span class="engText" id="forlink">In order to return to the home page of BGU click here:</span>

<a href="http://www.bgu.ac.il" id="bgulink"  aria-labelledby="forlink">
<span class="engText">Ben-Gurion University Home Page</span></a>
<div class="myBreak">
</div>
<span class="engText">In case of problems please contact the Computation Center Helpdesk at helpdesk@bgu.ac.il or 08-6477171
</span><div class="BR"></div><span class="engText">Building 58 Room No. 1 on the ground floor from Sunday to Thursday from 08.00 to 16.00</span><div class="BR"></div></div>
<?php
$_SESSION['error'] = 0;
?>
