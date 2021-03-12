<?php

$config = require_once "./operator/config.php";

if (isset($_GET["u"])) {
	$surl = "http://{$config["siteurl"]}/h.php?u={$_GET["u"]}";
}

require_once "operator/index.php";