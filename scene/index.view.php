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
	<h1 class="d4">pzpl Shortener</h1><br>
	<?php if (isset($surl)) : ?>
		<h2>Your URL: <?= $surl ?></h2>
	<?php endif; ?>
	<form action="../operator/generator.php" method="get">
		<div class="inputs">
			<label for="url">URL</label>
			<input type="text" name="url" id="url" placeholder="<?= $placeholders[0] ?>" class="flex-20">
		</div><br>
		<button type="submit" class="btn btn-normal">Generate</button>
	</form>
	<footer class="absolute bottom5 flexbox center-flex left0">
		<p class="mr7 mt3">POWERED BY</p>
		<img src="img/php.png" decoding="async" loading="lazy" alt="php" class="mr7">
		<img src="img/mysql.png" decoding="async" loading="lazy" alt="MySQL" class="mr7">
		<img src="img/flash.png" decoding="async" loading="lazy" alt="Flash" class="mr7">
		<img src="img/pzplui.png" decoding="async" loading="lazy" alt="pzplUI" class="mr7">
	</footer>
</body>

</html>