<?php 

session_id('q5dndvq1u2v8v39a2j4oom2sp8');
require_once("config.php");
session_regenerate_id();
echo session_id();
echo "</br>";
var_dump($_SESSION);
 ?>