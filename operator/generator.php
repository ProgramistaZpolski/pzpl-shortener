<?php

$config = require_once "config.php";

$num = rand(0, 99999);

$query = $config["connection"]->query("SELECT * FROM `links` WHERE `shorturl` = '{$num}'");

do {
	$num = rand(0, 99999);
} while($query->fetchAll());

$config["connection"]->query("INSERT INTO `links` (`id`, `url`, `shorturl`, `clicks`) VALUES (NULL, '{$_GET["url"]}', '{$num}', '0');");

header("Location: ../index.php?u=$num");