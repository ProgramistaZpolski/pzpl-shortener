<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>pzpl Shortener</title>
	<base href="./scene/">
	<link rel="stylesheet" href="style.min.css">
</head>

<body class="dark-mode pzplui-strict-mode m5">
	<h1 class="d4">You are getting redirected</h1><br>
	<p>You are being redirected to <?= $fullurl ?>, please wait...</p>
	Not working? <a href="<?= $fullurl ?>">Click here.</a>
	<noscript>
		<embed src="../flashback/bin/redirect.swf?u=<?= $_GET["u"] ?>" type="application/x-shockwave-flash">
	</noscript>
	<footer class="absolute bottom5 flexbox center-flex left0">
		<p class="mr7 mt3">POWERED BY</p>
		<img src="img/php.png" decoding="async" loading="lazy" alt="php" class="mr7">
		<img src="img/mysql.png" decoding="async" loading="lazy" alt="MySQL" class="mr7">
		<img src="img/flash.png" decoding="async" loading="lazy" alt="Flash" class="mr7">
		<img src="img/pzplui.png" decoding="async" loading="lazy" alt="pzplUI" class="mr7">
	</footer>
	<script>
		"use strict";
		setTimeout(() => {
			window.location = "<?= $fullurl ?>";
		}, 3000);
	</script>
</body>

</html>