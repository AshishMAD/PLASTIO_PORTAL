<?php
//Retrieve The Dealer Login Details->

$d_email = $_GET['d_email'];
$d_pswd = $_GET['d_pswd'];

//Connect To The Database

$db = pg_connect("host=localhost dbname=plastio_portal user=postgres password=postgres")or die("Couldn't Connect To The Database");


?>
