<?php

$config = require_once "../operator/config.php";

$query = $config["connection"]->query("SELECT * FROM `links` WHERE `shorturl` = '{$_GET["flash"]}'");
$query = $query->fetch();

$fullurl = $query["url"];

header("Location: $fullurl");