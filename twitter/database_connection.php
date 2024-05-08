<?php
require("class.pdofactory.php");

$connect = PDOFactory::GetPDO("pgsql:dbname=usuaris;host=localhost;port=5432", "postgres", "postgres", array());
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

date_default_timezone_set('America/New_York');


?>