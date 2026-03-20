<?php
$dbhost = '127.0.0.1'; // you can use localhost
$dbname = 'system_mgt1'; // database name
$dbuser = 'root';
$dbpassword = '';
$dbport = 3306;

//mysql connect
$db = new mysqli($dbhost, $dbuser, $dbpassword, $dbname, $dbport);
if ($db->connect_error) {
    // die('Connection Failed'. $db->connect_error);
    echo 'Connection Failed.' . $db->connect_error;
    die();
}
// echo "succes";

