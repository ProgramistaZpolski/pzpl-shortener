<?php

$config = require_once "./operator/config.php";

$query = $config["connection"]->query("SELECT * FROM `links` WHERE `shorturl` = '{$_GET["u"]}'");
$query = $query->fetch();

$fullurl = $query["url"];

require_once "scene/getredirected.view.php";