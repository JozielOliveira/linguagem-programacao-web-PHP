<?php
$activeConfig = "develop";

if ($activeConfig == "develop") {
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);
}

$activeDB = "local";

if ($activeDB == "local") {
    $db = array(
        "hostname" => "localhost",
        "username" =>  "root",
        "password" => "root",
        "database" => "lpw_exemplo"
    );
}
?>