<?php

$host = "localhost"; /* Host name */
$user = "surveys"; /* User */
$password = "2148Surveys@"; /* Password */
$dbname = "surveys"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
