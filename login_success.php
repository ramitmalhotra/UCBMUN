<?php
session_start();
if(!session_is_registered(myusername)){
header("location:registration1.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>