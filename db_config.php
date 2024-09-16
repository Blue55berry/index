<?php
global $db_server, $db_username, $db_password, $db_name;
$db_server = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_name = 'cake_forms';
global $db_pl_con;

$db_pl_con = mysqli_connect($GLOBALS['db_server'], $GLOBALS['db_username'],
    $GLOBALS['db_password'], $GLOBALS['db_name']);
if (!$GLOBALS['db_pl_con'])
    die("MySQLi Procedural - Database Connection failed: " .
        mysqli_connect_error());
  //echo "MySQLi Procedural" . " - " . "Database Connected Successfully!";
//echo "<br>";

?>