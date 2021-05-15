<?php
/**********************************************************************
 *Contains all the basic Configuration
 **********************************************************************/
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'semresdb';
$dbC = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
        or die('Error Connecting to MySQL DataBase');
?>