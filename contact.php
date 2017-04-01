<?php
include('./control.php');
include('./email.php');

$ctrl = new ccValidate();
$mailArgs = array();

$mailArgs['fName'] = $_POST['fName'];
$mailArgs['lName'] = $_POST['lName'];
$mailArgs['telNum'] = $_POST['telNum'];
$mailArgs['email'] = $_POST['email'];
$mailArgs['dateOfBirth'] = $_POST['dateOfBirth'];
$mailArgs['school'] = $_POST['school'];
$mailArgs['program'] = $_POST['program'];
$mailArgs['year'] = $_POST['year'];
$mailArgs['budget'] = $_POST['budget'];
$mailArgs['contract'] = $_POST['contract'];
$mailArgs['moveInDate'] = $_POST['moveInDate'];
$mailArgs['nextOfKin'] = $_POST['nextOfKin'];
$mailArgs['telKin'] = $_POST['telKin'];
$mailArgs['comment'] = $_POST['comment'];
$mailArgs['captcha'] = $_POST['g-recaptcha-response']; 


 if($ctrl->validate($mailArgs)){
	$ccEmail = new ccEmail();
	$ccEmail->sendEmail($mailArgs);
	header("Location: applied.html"); 
	die();
	/// forward to thankyou page
}else{
	echo ". Error found, press back and edit the form.";
} 

?>
