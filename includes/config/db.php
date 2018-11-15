<?php



$hostname = "200.85.152.184";

$username = "bibliografika_u";

$password = "Sw2eg3DGUX";

$database = "bibliografika_cms";



$mysqli = new mysqli($hostname, $username, $password, $database);

if($mysqli->connect_errno){

    echo "Fallo al contectar a MySQL: (" .$mysqli->connect_errno. ") ".$mysqli->connect_error;

}



$mysqli->set_charset('utf8');

