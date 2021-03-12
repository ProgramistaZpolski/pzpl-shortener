<?php

$dbdata = [
	"dsn" => 'mysql:dbname=shortener;host=127.0.0.1',
	"user" => 'root',
	"password" => '',
	"siteurl" => "kasztan.art:7000"
];

$dbdata["connection"] = new PDO($dbdata["dsn"], $dbdata["user"], $dbdata["password"]);

return $dbdata;