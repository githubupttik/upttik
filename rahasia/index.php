<?php

$admin_cookie_code="asek4ever";
setcookie("Asek",$admin_cookie_code, time() + 3600,"/");
header("Location: ../administrator/index.php");

?> 
