<?php
$servername ="localhost";
$DBusername ="root";
$DBpassword = "";
$DBName = "covid_19";
$conn = mysqli_connect($servername, $DBusername , $DBpassword , $DBName);
if ( !$conn)
 die("Connection erronée".mysqli_connect_error());