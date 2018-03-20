<?php

$host="localhost";
$username="root";
$password=""; 
$db_name="Project";  

$link=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name",$link)or die("cannot select DB");

?>