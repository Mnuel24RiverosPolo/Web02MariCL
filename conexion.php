<?php
	function conexion(){
	$host = "host=containers-us-west-160.railway.app";
	$port = "port=5937";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=VOblkTXDxfqYPcDsrayE";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>