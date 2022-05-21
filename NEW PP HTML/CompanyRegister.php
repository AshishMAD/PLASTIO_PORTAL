<?php
//Retrieve The Company Details->

$c_name = $_GET['c_name'];
$c_email = $_GET['c_email'];
$c_add = $_GET['c_add'];
$c_accntno = $_GET['c_acctno'];
$c_pswd = $_GET['c_pswd'];

//Connect To The Database

$db = pg_connect("host=localhost dbname=plastio_portal user=postgres password=postgres")or die("Couldn't Connect To The Database");


?>
