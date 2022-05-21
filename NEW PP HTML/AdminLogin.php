<?php
//Retrieve The Admin Login Details->

$a_id = $_GET['a_id'];
$a_pswd = $_GET['a_pswd'];

//Connect To The Database

$db = pg_connect("host=localhost dbname=plastio_portal user=postgres password=postgres")or die("Couldn't Connect To The Database");


?>
