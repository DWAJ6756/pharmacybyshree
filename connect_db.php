<?php

error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
$con=mysqli_connect('localhost','root','','pharmacy')or die("cannot connect to server");
mysqli_select_db($con,'pharmacy')or die("cannot connect to database");

?>