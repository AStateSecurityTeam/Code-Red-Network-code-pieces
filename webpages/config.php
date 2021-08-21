<?php

$db_user = "root";
$db_pass = "P@$$w0rd";
$db_name = "useraccounts";

$db = new PDO('mysql:host=localhost;dbname=$db_name', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $db
?>
