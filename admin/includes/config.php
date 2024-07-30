 <!--live server -->
<?php
define('DB_SERVER','localhost');
define('DB_USER','u776132630_hotscape');
define('DB_PASS' ,'2K^lq;Oz+#m');
define('DB_NAME','u776132630_hotscape');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
