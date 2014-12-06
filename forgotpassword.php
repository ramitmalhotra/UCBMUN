<?php
$return = array();
$host="localhost"; // Host name 
$user="ucbmunor"; // Mysql username 
$password="Ucbmunsec2014!"; // Mysql password 
$db_name="ucbmunor_login"; // Database name 
$tbl_name="registration2014"; // Table name  change to registration

// Connect to server and select databse.
mysql_connect("$host", "$user", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$mysqli =  new mysqli($host, $user, $password, $db_name);

//user whose pass to change here
$user = 'rajitkinra';
//pass to change
$pass = 'rajitisforgetfulandlazy';


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
		$return['e'] = $error;
		echo json_encode($return);
		//header("Location: registration.php?e=".urlencode($error));
		exit;
	}
	return;
}

//checkIfUsernameExists($user, $tbl_name);
$password = securePassword($pass);
/* create a prepared statement */

$sql = 'UPDATE ' . $tbl_name . ' SET password = "'. $password . '" where username = "' . $user . '"';

if ($mysqli->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
}
$mysqli->close();

?>