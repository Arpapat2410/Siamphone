<?php
    include_once("../model/ConDB.php");
    include_once("../model/Phone.php");
    $identifier = htmlspecialchars($_GET["identifier"]);

    $obj_name = new Phone();
    $rs2 = $obj_name-getPhone($identifier);
    $jsonCode = $rs2;
    $jsonDecode = json_decode($jsonCode, true);
?>