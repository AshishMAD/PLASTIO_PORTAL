<?php
//Retrieve The Company Login Details->

$c_email = $_GET['c_email'];
$c_pswd = $_GET['c_pswd'];

//Connect To The Database

$db = pg_connect("host=localhost dbname=plastio_portal user=postgres password=postgres")or die("Couldn't Connect To The Database");


?>
