
<?php
$host = 'localhost:3036';
$usr = 'user';
$usrpass = 'user1234';
$conn = mysql_connect($host, $usr, $usrpass);
if(! $conn) die('connection failed' . mysql.error());
mysql_close($conn);
?>
