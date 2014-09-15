<?php
require_once('recaptchalib.php');
	$privatekey = '6Lf-2OYSAAAAABFzFkmP9nfLkPSAYP_nMLHGYKeC';
	$resp = recaptcha_check_answer ($privatekey,
	                            $_SERVER["REMOTE_ADDR"],
	                            $_POST["recaptcha_challenge_field"],
	                            $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
	$error = "The CAPTCHA was not entered correctly. Please try again";
	header("Location: registration.php?e=".urlencode($error));
	exit;  
} 
session_start();
$host="localhost"; // Host name 
$hostname = '127.0.0.1';
$user="ucbmunor"; // Mysql username 
$password="Ucbmunsec2014!"; // Mysql password 
$db_name="ucbmunor_login"; // Database name 
$tbl_name="registration2014"; // Table name  

// Connect to server and select databse.
$connection = mysql_connect("$host", "$user", "$password")or die("Cannot Connect"); 
mysql_select_db("$db_name", $connection)or die("Cannot Select DB");
$mysqli =  new mysqli($host, $user, $password, $db_name);
// Fields sent from form
$primaryName = $_POST['inputPrimaryContact'];
$primaryEmail = $_POST['inputPrimaryEmail'];
$primaryPhone = $_POST['inputPrimaryPhone'];
$university = $_POST['inputUniversity'];
$size = $_POST['inputDelegation'];
$username=$_POST['inputUserName']; 
$password=$_POST['inputPassword'];
$address = $_POST['inputAddress'];

function blowfishSalt($cost = 13) {
    if (!is_numeric($cost) || $cost < 4 || $cost > 31) {
        throw new Exception("cost parameter must be between 4 and 31");
    }
    $rand = array();
    for ($i = 0; $i < 8; $i += 1) {
        $rand[] = pack('S', mt_rand(0, 0xffff));
    }
    $rand[] = substr(microtime(), 2, 6);
    $rand = sha1(implode('', $rand), true);
    $salt = '$2a$' . sprintf('%02d', $cost) . '$';
    $salt .= strtr(substr(base64_encode($rand), 0, 22), array('+' => '.'));
    return $salt;
}
function securePassword($password) {
	return crypt($password, blowfishSalt());
}
function checkIfUsernameExists($username, $table) {
	$sql="SELECT * FROM $tbl_name WHERE username='$username'";
	$result=mysql_query($sql);
	$result = mysql_query("SELECT 1 FROM $table WHERE username ='$username' LIMIT 1");
	if(is_resource($result) && mysql_num_rows($result) > 0 ){
		$error = 'Sorry, that username is already taken.';
		header("Location: registration.php?e=".urlencode($error)); exit;
	}
	return;
}
function getCurrentDate() {
	$d = getdate();
	$month = $d[mon];
	$day = $d[mday];
	$year = $d[year];
	return $month."-".$day."-".$year;
}
checkIfUsernameExists($username, $tbl_name);
$date = getCurrentDate();
$password = securePassword($password);
/* create a prepared statement */

$sql = 'INSERT INTO ' . $tbl_name . ' (
    registrationDate, 
    primaryContact, 
    primaryEmail, 
    primaryPhone, 
    university,
    size,
    username,
    password,
    address
) 
VALUES (?,?,?,?,?,?,?,?,?)';
if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("sssssisss", $date, $primaryName, $primaryEmail, $primaryPhone, $university, $size, $username, $password, $address);
    $stmt->execute();
    $stmt->close();
}
$mysqli->close();

/*
$sql = "INSERT INTO `registration2014`  (`primaryContact`, `primaryEmail`, `primaryPhone`, `university`, `size`, `username`, `password`, `id`, `registrationDate`, `amountPaid`, `proofofpayment`, `address`)
VALUES ('$primaryName','$primaryEmail','$primaryPhone','$university','$size','$username','$password',NULL,'$date','0','0','$address');";
$add_member = mysql_query($sql, $connection) or trigger_error( mysql_error( $connection ), E_USER_ERROR );
mysql_close($connection);
*/

// write the email content  
$email_body = "Primary Contact: ".$primaryName.
			  "\nPrimary Email: ".$primaryEmail.
			  "\nPrimary Phone: ".$primaryPhone.
			  "\nUniversity: ".$university.
			  "\nDelegation Size: ".$size.
			  "\nAddress: ".$address;

$from = "From: nobody@ucbmun.org";
$subject = "[NEW UCBMUN REGISTRATION] ".$university;
$sg = "sg@ucbmun.org";
$dsg = "dsg@ucbmun.org";
$cose = "cos-external@ucbmun.org";

// send the email  

mail ($sg, $subject, $email_body, $from);
mail ($dsg, $subject, $email_body, $from);
mail ($cose, $subject, $email_body, $from);

header("Location: registration.php?s=".urlencode("s")); exit;  
