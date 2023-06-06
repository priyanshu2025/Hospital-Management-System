<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "ingram";
$db_port = 3307;
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass,$db_port);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>