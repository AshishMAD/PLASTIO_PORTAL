<?php
//Retrieve The Dealer Details->

$d_name = $_GET['d_name'];
$d_email = $_GET['d_email'];
$d_add = $_GET['d_add'];
$d_accntno = $_GET['d_acctno'];
$d_pswd = $_GET['d_pswd'];

//Connect To The Database

$db = pg_connect("host=localhost dbname=plastio_portal user=postgres password=postgres")or die("Couldn't Connect To The Database");


?>
