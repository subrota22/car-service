<?php
defined("HOST_NAME") ?  NULL : define("HOST_NAME", "localhost") ;
defined("USER_NAME") ?  NULL : define("USER_NAME", "root") ;
defined("PASSWORD") ?  NULL : define("PASSWORD", "") ;
defined("DB_NAME") ?  NULL : define("DB_NAME", "car_service") ;
$con = mysqli_connect(HOST_NAME,USER_NAME , PASSWORD ,DB_NAME ); 
?>